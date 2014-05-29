<?php

define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
define('CONTENT_DIR', ROOT_DIR .'content/'); //change this to change which folder you want your content to be stored in

$localhost = array('127.0.0.1', '::1');
$localhost_inurl = "";
if(in_array($_SERVER['REMOTE_ADDR'], $localhost)){
  $localhost_inurl = "/".basename(__DIR__);
}
define('BASE_URL', 'http://'.$_SERVER['HTTP_HOST'].$localhost_inurl.'/');

# Install PSR-0-compatible class autoloader
set_include_path(ROOT_DIR . 'assets/php/');

spl_autoload_register(function($class){
  require preg_replace('{\\\\|_(?!.*\\\\)}', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php';
});

# Get Markdown class
use \Michelf\MarkdownExtra;

$file_format = ".md"; //change this to choose a file type, be sure to include the period

// Get request url and script url
$url = '';
$request_url = (isset($_SERVER['REQUEST_URI'])) ? $_SERVER['REQUEST_URI'] : '';
$base_url  = (isset($_SERVER['PHP_SELF'])) ? $_SERVER['PHP_SELF'] : '';

// uživatelská nastavení
$server_name = "ForexSrovnávač.cz";
	
// Get our url path and trim the / of the left and the right
if($request_url != $base_url) $url = trim(preg_replace('/'. str_replace('/', '\/', str_replace('index.php', '', $base_url)) .'/', '', $request_url, 1), '/');

// Get the file path
if($url) $file = strtolower(CONTENT_DIR . $url);
else $file = CONTENT_DIR .'index';

$file = str_replace(".php","", $file); //zobrazí i v případě php přípony (bylo v předchozí verzi, kvůli SEO)

// Load the file
if(is_dir($file)) $file = CONTENT_DIR . $url .'/index' . $file_format;
else $file .=  $file_format;

//Show 404 if file cannot be found
if(file_exists($file)) $content = file_get_contents($file);
else $content = file_get_contents(CONTENT_DIR .'404' . $file_format);

// content into html
$content = MarkdownExtra::defaultTransform($content);

// content variables
$settings = null;
while (strpos($content,'{{settings}}') !== false) {
  $settings_start = strpos($content, "{{settings}}") + strlen("{{settings}}");
  $settings_end = strpos($content, "{{/settings}}", $settings_start);
  $settings = substr($content, $settings_start, $settings_end - $settings_start);
  $content = str_replace("{{settings}}" . $settings . "{{/settings}}","", $content);

  $settings = "{".$settings."}";
  $settings = json_decode($settings, true);

}

// partials
while (strpos($content,'{{partial: ') !== false) {
  $partial_start = strpos($content, "{{partial: ") + strlen("{{partial: ");
  $partial_end = strpos($content, "}}", $partial_start);
  $partial = substr($content, $partial_start, $partial_end - $partial_start);
  $partial_content = file_get_contents(CONTENT_DIR .'_partials/' . $settings['language']."/". $partial . $file_format);
  $partial_content = MarkdownExtra::defaultTransform($partial_content);
  $content = str_replace("{{partial: " . $partial . "}}",$partial_content, $content);
}

while (strpos($content,'{{layout}}') !== false) {
  $layout_start = strpos($content, "{{layout}}") + strlen("{{layout}}");
  $layout_end = strpos($content, "{{/layout}}", $layout_start);
  $layout = substr($content, $layout_start, $layout_end - $layout_start);

  $old_layout = $layout;

  $layout = "{".$layout."}";
  $layout = json_decode($layout, true); 

  $new_layout = "";
  $new_layout .= '<div class="row brokeri-prehled">';
  $new_layout .= '<div class="col-md-9">';
  $i = 0;
  foreach ($layout['items'] as $key => $value) {
    if ($i == 0) { $new_layout.= '<div class="row">'; };
    if ($i == 3) { $new_layout.= '<div class="row">'; };
    if ($i == 6) { $new_layout.= '<div class="row">'; };

    if (strpos($value,'{{@ecn}}') !== false) {
      $value = str_replace('{{@ecn}}','<abbr title="Electronic Communications Network. Takový broker je místem, kde se setkává nabídka i poptávka různých market makerů, bankovních i jiných nebankovních institucí a soukromých obchodníků.">ECN</abbr>', $value);
    }
    if (strpos($value,'{{@stp}}') !== false) {
      $value = str_replace('{{@stp}}','<abbr title="Brokeři posílají příkazy klientů dalším stranám, tzv. poskytovatelům likvidity. Ti potom tvoří druhou stranu obchodů. Broker je pouze prostředníkem.">STP</abbr>', $value);
    }
    if (strpos($value,'{{@mt4}}') !== false) {
      $value = str_replace('{{@mt4}}','<abbr title="Nejrozšířenější obchodní software pro obchodování Forexu. Umožňuje analyzovat trhy i zadávat obchodní příkazy.">MT4</abbr>', $value);
    }
    if (strpos($value,'{{@dd}}') !== false) {
      $value = str_replace('{{@dd}}','<abbr title="Dealing Desk broker je tvůrce trhu, protože obrazně řečeno vytváří trh pro své klienty (obchodníky). Tvoří druhou stranu obchodů.">DD</abbr>', $value);
    }

    if (strpos($value,'{{@mt5}}') !== false) {
      $value = str_replace('{{@mt5}}','<abbr title="Nová verze nejrozšířenějšího obchodního software pro obchodování Forexu. Vychází z MT4.">MT5</abbr>', $value);
    }
    
    if($key == '{{@spread}}') { $key = '<abbr title="Jedná se o rozdíl mezi nákupní (ask cena) a prodejní cenou (bid cena) daného finančního aktiva.">Spread</abbr>';}

    $new_layout.= '<div class="col-md-4"><h4>'.$key."</h4>".$value."</div>";
    if ($i == 2) { $new_layout.= '</div>'; };
    if ($i == 5) { $new_layout.= '</div>'; };
    if ($i == 8) { $new_layout.= '</div>'; };
    $i++;
  }
  if (isset($layout['ostatni'])) {
    $new_layout.= '<div class="row"><div class="col-md-12"><h3>Ostatní</h3>'.$layout['ostatni'].'</div></div>';
  }
  $new_layout.= '</div>';

  $new_layout.= '<div class="col-md-3">';
  if (isset($layout['demo'])) {
    $new_layout.= '<a class="btn btn-warning btn-lg" href="'.$layout['demo']['url'].'">'.$layout['demo']['popisek'].'</a>';
  }
  if (isset($layout['blok'])) {
    $new_layout.= '<blockquote><h3>'.$layout['blok']['popisek'].'</h3>'.$layout['blok']['obsah'].'</blockquote>';
  }
  $new_layout.= '</div>';

  $new_layout.= '</div>';

  $content = str_replace("{{layout}}" . $old_layout . "{{/layout}}",$new_layout, $content);

}

while (strpos($content,'{{img-url}}') !== false) {
  $content = str_replace("{{img-url}}",BASE_URL.'assets/img/', $content);
}

while (strpos($content,'{{base-url}}') !== false) {
  $content = str_replace("{{base-url}}",BASE_URL, $content);
}

$lang_nocs = "";
if ($settings['language'] != "cs") {
  $lang_nocs = $settings['language'] . '/';
}

while (strpos($content,'{{url}}') !== false) {
  $content = str_replace("{{url}}",BASE_URL . $lang_nocs, $content);
}

if (isset($settings['header'])) {
  $header = file_get_contents(CONTENT_DIR .'_partials/' . $settings['language']. "/" . "header/". $settings['header'] . $file_format);
  $header = MarkdownExtra::defaultTransform($header);

  while (strpos($header,'{{img-url}}') !== false) {
    $header = str_replace("{{img-url}}",BASE_URL.'assets/img/', $header);
  }

  while (strpos($header,'{{url}}') !== false) {
    $header = str_replace("{{url}}",BASE_URL . $lang_nocs, $header);
  }

  while (strpos($header,'{{base-url}}') !== false) {
    $header = str_replace("{{base-url}}",BASE_URL, $header);
  }
}
else {
  while (strpos($content,'{{header}}') !== false) {
    $header_start = strpos($content, "{{header}}") + strlen("{{header}}");
    $header_end = strpos($content, "{{/header}}", $settings_start);
    $header = substr($content, $header_start, $header_end - $header_start);
    $content = str_replace("{{header}}" . $header . "{{/header}}","", $content);
  }
}

//opravy
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

$footer_statement_url = CONTENT_DIR .'_partials/' . $settings['language']. "/" . "footer/". "statement" . $file_format;
$footer_statement_test = @file_get_contents($footer_statement_url);

if ($footer_statement_test !== false){
  $footer_statement = file_get_contents($footer_statement_url);
  $footer_statement = str_replace("{{url}}",BASE_URL, $footer_statement);
  $footer_statement = "<p class='statement'>".$footer_statement."</p>";
}else{
  $footer_statement = "<script>console.log( 'footer_statement not loaded' );</script>";
}

$footer_right_url = CONTENT_DIR .'_partials/' . $settings['language']. "/" . "footer/". "pull-right" . $file_format;
$footer_right_test = @file_get_contents($footer_right_url);

if ($footer_right_test !== false){
  $footer_right = file_get_contents($footer_right_url);

  $footer_right = str_replace("{{url}}",BASE_URL.$lang_nocs, $footer_right);
  $footer_right = str_replace("{{base-url}}",BASE_URL, $footer_right);
}else{
  $footer_right = "<script>console.log( 'footer_right not loaded' );</script>";
}

?>
<!DOCTYPE html>
<html lang="<?= $settings['language'] ?>">
<head>
  <title><?= $settings['meta']['title'].($settings['meta']['title'] ? " - ":""). $server_name ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="<?= $settings['meta']['title'].($settings['meta']['title'] ? " - ":""). $server_name ?>">
  <meta property="og:description" content="<?= $settings['meta']['description'] ?>">
  <meta property="og:image" content="<?= BASE_URL ?>assets/img/apple-touch-icon-144-precomposed.png">
  <meta property="og:type" content="website">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?= $settings['meta']['description'] ?>">
  <meta name="keywords" content="<?= $settings['meta']['keywords'] ?>">
  <meta name="author" content="Jan Šablatura">
  <meta http-equiv="Access-Control-Allow-Origin" content="*">
  <!--<meta name="google-site-verification" content="l89qOWzX86DJpmFJuEyAAdrpNqhMePOFMZ-WYdHUYjw">-->
  
  <link href="<?= BASE_URL ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <?php
    if (!isset($settings['template'])) {
      echo '<link href="'.BASE_URL.'assets/css/bootstrap-theme.min.css" rel="stylesheet">';
    }
    if ($settings['template'] == 1) {
      echo '<link href="'.BASE_URL.'assets/css/bootstrap-theme.min.css" rel="stylesheet">';
    }
    if ($settings['template'] == 2) {
      echo '<link href="'.BASE_URL.'assets/css/bootstrap-theme2.min.css" rel="stylesheet">';
    }
  ?>
  <link href="<?= BASE_URL ?>assets/css/font-awesome.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- favicons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= BASE_URL ?>assets/img/apple-touch-icon-144-precomposed.png">
  <link rel="shortcut icon" href="<?= BASE_URL ?>assets/img/favicon.png">
</head>
<body data-spy="scroll" data-offset="100" data-target="#scrollpsy" id="top">
<?php if(isset($header)){echo $header;}; ?>

<div class="container">
<?php echo $content; ?>
</div>

<footer class="footer">
  <div class="container">
    <?= $footer_statement ?>
    <div class="pull-left">
      © <?= date("Y") ?> · <?= $server_name ?> · <a href="http://www.sablatura.info/" data-original-title="Design&nbsp;navrhl Jan&nbsp;Šablatura" class="created-by">¤</a>
    </div>
    <div class="pull-right">
      <?= $footer_right ?>
    </div>
  </div>
</footer>

<?php //automatically adds all scripts
$files = glob('assets/js/min/*min.js', GLOB_BRACE);
foreach($files as $file) {
  echo '<script src="'.BASE_URL.$file.'"></script>'."\n";
}
?>
</body>
</html>