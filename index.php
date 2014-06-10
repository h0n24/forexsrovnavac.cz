<?php
define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
define('CONTENT_DIR', ROOT_DIR .'content/'); //folder where content stored is
define('BASE_LANG', 'cs/'); //folder with base language

// Install PSR-0-compatible class autoloader
set_include_path(ROOT_DIR . 'assets/php/');

spl_autoload_register(function($class){
  require preg_replace('{\\\\|_(?!.*\\\\)}', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php';
});

use \core\core;
use \core\vars;
use \core\layout;
use \Michelf\MarkdownExtra;

//basic file type to look for
define('FILE_FORMAT', ".md");
define('BASE_URL', core::base_url(basename(__DIR__)));

// Get request url and script url
$url = '';
$request_url = (isset($_SERVER['REQUEST_URI'])) ? $_SERVER['REQUEST_URI'] : '';
$base_url  = (isset($_SERVER['PHP_SELF'])) ? $_SERVER['PHP_SELF'] : '';
	
// Get our url path and trim the / of the left and the right
if($request_url != $base_url) $url = trim(preg_replace('/'. str_replace('/', '\/', str_replace('index.php', '', $base_url)) .'/', '', $request_url, 1), '/');

// get language from request, if not, set
$lang_url = substr($url, 0, 4);
if ($lang_url == null){
  $lang_url = BASE_LANG;
  $content_dir = CONTENT_DIR.$lang_url;
}
else {
  if (strpos($lang_url,'/') !== false) {
    if (strlen($lang_url) == 3) {
      $content_dir = CONTENT_DIR.BASE_LANG;
    }
    else {
      $content_dir = CONTENT_DIR;
    }
  }
  elseif (strlen($lang_url) !== 2) {
    $content_dir = CONTENT_DIR.BASE_LANG;
  }
  else {
    $content_dir = CONTENT_DIR;
  }
} 


// Get the file path
if($url) {
  $file = strtolower($content_dir . $url);
}
else {
  $file = $content_dir .'index';
}

//oprava!
$file = str_replace(".php","", $file); //zobrazí i v případě php přípony (bylo v předchozí verzi, kvůli SEO)

// Load the file
if(is_dir($file)) $file = $content_dir . $url .'/index' . FILE_FORMAT;
else $file .=  FILE_FORMAT;

//Show 404 if file cannot be found
if(file_exists($file)) $content = file_get_contents($file);
else {
  $test = @file_get_contents($content_dir .'404' . FILE_FORMAT);
  if($test == false) {
    $test2 = @file_get_contents($content_dir.$lang_url.'404' . FILE_FORMAT);
    if($test2 == false) {
      $content = file_get_contents(CONTENT_DIR.BASE_LANG.'404' . FILE_FORMAT);
    }
    else {
      $content = file_get_contents($content_dir.$lang_url.'404' . FILE_FORMAT);
    }
  }
  else {
    $content = file_get_contents($content_dir .'404' . FILE_FORMAT);
  }
} 

$server_name = vars::server_name();

// content into html
$content = MarkdownExtra::defaultTransform($content);

// core content modifications
$settings = core::settings($content);
$content = $settings[1];
$settings = $settings[0];

$content = core::partials($content, $settings);

$content = core::url_img($content);
$content = core::url_base($content);
$content = core::url($content, $settings);

$header = core::header($content, $settings);
$content = $header[1];
$header = $header[0];

$content = core::corrections($content); //prettify html

$content = layout::layout($content);

$footer_left = layout::footer_left();
$footer_statement = layout::footer_statement($settings);
$footer_right = layout::footer_right($settings, $url);

require(ROOT_DIR . 'assets/php/template/main.php');
?>