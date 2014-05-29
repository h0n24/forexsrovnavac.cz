<?php
define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
define('CONTENT_DIR', ROOT_DIR .'content/'); //folder where content stored is

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

// Get the file path
if($url) $file = strtolower(CONTENT_DIR . $url);
else $file = CONTENT_DIR .'index';

//oprava!
$file = str_replace(".php","", $file); //zobrazí i v případě php přípony (bylo v předchozí verzi, kvůli SEO)

// Load the file
if(is_dir($file)) $file = CONTENT_DIR . $url .'/index' . FILE_FORMAT;
else $file .=  FILE_FORMAT;

//Show 404 if file cannot be found
if(file_exists($file)) $content = file_get_contents($file);
else $content = file_get_contents(CONTENT_DIR .'404' . FILE_FORMAT);

$server_name = vars::server_name();

// content into html
$content = MarkdownExtra::defaultTransform($content);

// core content modifications
$settings = core::settings($content)[0];
$content = core::settings($content)[1];
$content = core::partials($content, $settings);

$content = core::url_img($content);
$content = core::url_base($content);
$content = core::url($content, $settings);

$header = core::header($content, $settings)[0];
$content = core::header($content, $settings)[1];

$content = core::corrections($content); //prettify html

$content = layout::layout($content);

$footer_left = layout::footer_left();
$footer_statement = layout::footer_statement($settings);
$footer_right = layout::footer_right($settings);

require(ROOT_DIR . 'assets/php/template/main.php');
?>