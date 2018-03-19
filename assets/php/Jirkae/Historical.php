<?php

namespace Jirkae;

class Historical {

   

    private $name;
    private $errors = array();

    public function __construct($name = NULL) {
        if (empty($name)) {            
            $this->name = md5(preg_replace('/\?.*$/', '', $_SERVER["REQUEST_URI"]));
        }                        
      
    }

   

    public function render() {
        ob_start();
        $historical = $this;
        require __DIR__ . '/historicalTemplate.php';
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
    
 

}
