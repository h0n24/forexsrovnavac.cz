<?php

namespace Jirkae;

class Discussion {

    const DATA_DIR = "discussion_data";
    const DATA_EXTENSION = 'txt';
    const SECRET = 'p30dSad94pLqCX039TedUelS734';
    const SECRET_KEY = 'discussionSecret';
    const DELETE_POST_KEY = 'deletePost';

    private $name;
    private $errors = array();

    public function __construct($name = NULL) {
        if (empty($name)) {            
            $this->name = md5(preg_replace('/\?.*$/', '', $_SERVER["REQUEST_URI"]));
        }                        
        if (isset($_POST['discussion_submit'])) {
            try {
                $this->proccessPost();
            } catch (\Exception $e) {
                $this->errors[] = $e->getMessage();
            }
        }
        
        if (isset($_GET[self::DELETE_POST_KEY]) && $_GET[self::SECRET_KEY] == self::SECRET) {
            $this->processDelete();
        }
        
        if (isset($_POST[self::DELETE_POST_KEY]) && $_GET[self::SECRET_KEY] == self::SECRET) {
            $this->processDelete2();
        }
    }

    public function proccessPost() {
        if ($this->name !== $_POST['discussion_name']) {
            throw new \Exception('Název discussion pluginu neodpovídá zaslaným datům');
        }
        if (!$this->checkNotRobot()) {
            throw new \Exception('Robotům je zakázáno vkládání příspěvků');
        }
        if (empty($_POST['name']) || empty($_POST['text'])) {
            throw new \Exception('Vyplňte prosím všechny políčka');
        }
        $post = array(
            'name' => self::strip($_POST['name']),
            'text' => self::strip($_POST['text']),
            'ip' => $_SERVER['REMOTE_ADDR'],
            'timestamp' => time(),
        );
        $posts = $this->getPosts();
        $posts[] = $post;   
        $this->savePosts($posts);
        header('location: ' . "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
        die;
    }

    private function savePosts($posts) {        
        if (!file_exists(__DIR__ . '/' . self::DATA_DIR)) {
            mkdir(__DIR__ . '/' . self::DATA_DIR);
        }
        file_put_contents(__DIR__ . '/' . self::DATA_DIR . '/' . $this->name . '.' . self::DATA_EXTENSION, json_encode($posts));        
    }


    private function checkNotRobot() {
        $number1 = substr($_POST['secure_q'], 2, 3);
        $number2 = substr($_POST['secure_q'], 8, 3);
        $result = $_POST['secure_a'];
        return $result == $number1 + $number2;
    }

    public function getPosts() {
        if (file_exists(__DIR__ . '/' . self::DATA_DIR . '/' . $this->name . '.' . self::DATA_EXTENSION)) {
            $json = file_get_contents(__DIR__ . '/' . self::DATA_DIR . '/' . $this->name . '.' . self::DATA_EXTENSION);                        
            return json_decode($json);
        } else {
            return array();
        }
    }
    
    public function getAllPosts() {
        $data = array();
        if (!file_exists(__DIR__ . '/' . self::DATA_DIR)) {
            return array();
        } else {
            foreach (scandir(__DIR__ . '/' . self::DATA_DIR) as $file) {
                if ($file == '.' || $file == '..') {
                    continue;
                }
                $json = file_get_contents(__DIR__ . '/' . self::DATA_DIR . '/' . $file);
                $tmp = json_decode($json);
                foreach ($tmp as $key => $_tmp) {
                    $_tmp->file = $file;
                    $_tmp->key = $key;
                }                
                $data = array_merge($data, $tmp);  
            }
        }
        usort($data, function($a, $b) {
            return $a->timestamp > $b->timestamp ? -1 : 1;
        });
        return $data;
    }

    private function processDelete() {
        $key = $_GET[self::DELETE_POST_KEY];
        $posts = $this->getPosts();         
        unset($posts[$key]);                 
        $this->savePosts(array_values($posts));
        
        header('location: ' . "http://$_SERVER[HTTP_HOST]".str_replace('&'.self::DELETE_POST_KEY.'='.$key, '', $_SERVER['REQUEST_URI']));
        die;
    }
    
    private function processDelete2() {
        $this->name = str_replace('.'.self::DATA_EXTENSION,'',$_POST['file']);
        $key = $_POST['key'];
        $posts = $this->getPosts();         
        unset($posts[$key]);                 
        $this->savePosts(array_values($posts));
        
        header('location: ' . "http://$_SERVER[HTTP_HOST]".$_SERVER['REQUEST_URI']);
        die;
    }

    public function getErrors() {
        return $this->errors;
    }

    public function render() {
        ob_start();
        $discussion = $this;
        require __DIR__ . '/discussionTemplate.php';
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
    
    public function renderAllComments() {
        ob_start();
        $discussion = $this;
        require __DIR__ . '/discussionAllComments.php';
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public static function strip($text) {
        return strip_tags(preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', "", $text), '');
    }

}
