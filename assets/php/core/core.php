<?php
namespace core;
use \Michelf\MarkdownExtra;
use \core\vars;

class core {

  public static function base_url($basename){

    $localhost = array('127.0.0.1', '::1');
    $url = 'http://'.$_SERVER['HTTP_HOST'];

    if(in_array($_SERVER['REMOTE_ADDR'], $localhost)){
      $url = $url."/".$basename;
    }

    return $url."/";
  }

  public static function settings($content){
    

    $settings = null;
    while (strpos($content,'{{settings}}') !== false) {
      $settings_start = strpos($content, "{{settings}}") + strlen("{{settings}}");
      $settings_end = strpos($content, "{{/settings}}", $settings_start);
      $settings = substr($content, $settings_start, $settings_end - $settings_start);
      $content = str_replace("{{settings}}" . $settings . "{{/settings}}","", $content);

      $settings = "{".$settings."}";
      $settings = json_decode($settings, true);
    }

    return array($settings, $content);
  }

  public static function partials($content, $settings){

    while (strpos($content,'{{partial: ') !== false) {
      $partial_start = strpos($content, "{{partial: ") + strlen("{{partial: ");
      $partial_end = strpos($content, "}}", $partial_start);
      $partial = substr($content, $partial_start, $partial_end - $partial_start);
      $partial_content = file_get_contents(CONTENT_DIR .'_partials/' . $settings['language']."/". $partial . FILE_FORMAT);
      $partial_content = \Michelf\MarkdownExtra::defaultTransform($partial_content);
      $content = str_replace("{{partial: " . $partial . "}}",$partial_content, $content);
    }

    return $content;
  }

  public static function header($content, $settings){
    $header = "";
    if (isset($settings['header'])) {
      $header = file_get_contents(CONTENT_DIR .'_partials/' . $settings['language']. "/" . "header/". $settings['header'] . FILE_FORMAT);
      $header = MarkdownExtra::defaultTransform($header);
      $header = core::url_img($header);
      $header = core::url_base($header);
      $header = core::url($header, $settings);
    }
    else {
      while (strpos($content,'{{header}}') !== false) {
        $header_start = strpos($content, "{{header}}") + strlen("{{header}}");
        $header_end = strpos($content, "{{/header}}", $settings_start);
        $header = substr($content, $header_start, $header_end - $header_start);
        $content = str_replace("{{header}}" . $header . "{{/header}}","", $content);
      }
    }

    return array($header, $content);
  }

  public static function url_img($content){

    while (strpos($content,'{{img-url}}') !== false) {
      $content = str_replace("{{img-url}}",BASE_URL.'assets/img/', $content);
    }

    return $content;
  }

  public static function url_base($content){

    while (strpos($content,'{{base-url}}') !== false) {
      $content = str_replace("{{base-url}}",BASE_URL, $content);
    }

    return $content;
  }

  public static function url($content, $settings){

  $lang_nocs = "";
  if ($settings['language'] != "cs") {
    $lang_nocs = $settings['language'] . '/';
  }

  while (strpos($content,'{{url}}') !== false) {
    $content = str_replace("{{url}}",BASE_URL . $lang_nocs, $content);
  }

    return $content;
  }

  public static function corrections($content){

    $content = str_replace("<p></p>","", $content);

    $content = str_replace("<p>{{section}}</p>","{{section}}", $content);

    $count = substr_count($content, "{{section}}");
    for ($i=0; $i < $count; $i++) {
      $section = $i + 1;
      $content = preg_replace('/{{section}}/', '<section id="section-'.$section.'">', $content, 1);
    }

    $content = str_replace("<p>{{/section}}</p>","</section>", $content);
    $content = str_replace("{{/section}}","</section>", $content);

    $content = str_replace('<p>{{start}}</p>','<div class="start">', $content);
    $content = str_replace('{{start}}','<div class="start">', $content);

    $content = str_replace('<p>{{/start}}</p>','</div>', $content);
    $content = str_replace('{{/start}}','</div>', $content);

    return $content;
  }

  public static function console($message){

    return "<script>console.log( '".$message."' );</script>";
  }

}
?>