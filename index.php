<?php

define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
define('CONTENT_DIR', ROOT_DIR .'content/'); //change this to change which folder you want your content to be stored in

define('BASE_URL', 'http://'.$_SERVER['HTTP_HOST'].'/forexsrovnavac.cz'.'/');

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
	
// Get our url path and trim the / of the left and the right
if($request_url != $base_url) $url = trim(preg_replace('/'. str_replace('/', '\/', str_replace('index.php', '', $base_url)) .'/', '', $request_url, 1), '/');

// Get the file path
if($url) $file = strtolower(CONTENT_DIR . $url);
else $file = CONTENT_DIR .'index';

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
/*
if (strpos($content,'{{settings}}') !== false) {
  $settings_start = strpos($content, "{{settings}}") + strlen("{{settings}}");
  $settings_end = strpos($content, "{{/settings}}", $settings_start);
  $settings = substr($content, $settings_start, $settings_end - $settings_start);
  $settings = "{".$settings."}";
  $settings = json_decode($settings, true);

  $content = substr($content, $settings_end + strlen("{{/settings}}"));
}
*/

// partials
while (strpos($content,'{{partial: ') !== false) {
  $partial_start = strpos($content, "{{partial: ") + strlen("{{partial: ");
  $partial_end = strpos($content, "}}", $partial_start);
  $partial = substr($content, $partial_start, $partial_end - $partial_start);
  $partial_content = file_get_contents(CONTENT_DIR .'_partials/' . $partial . $file_format);
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

while (strpos($content,'{{url}}') !== false) {
  $content = str_replace("{{url}}",BASE_URL, $content);
}

while (strpos($content,'{{header}}') !== false) {
  $header_start = strpos($content, "{{header}}") + strlen("{{header}}");
  $header_end = strpos($content, "{{/header}}", $settings_start);
  $header = substr($content, $header_start, $header_end - $header_start);
  $content = str_replace("{{header}}" . $header . "{{/header}}","", $content);
}


?>
<!DOCTYPE html>
<html lang="<?= $settings['language'] ?>">
<head>
  <title><?= $settings['meta']['title'] ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="Forexsrovnávač.cz">
  <meta property="og:description" content="Forex srovnávač">
  <meta property="og:image" content="assets/ico/apple-touch-icon-144-precomposed.png">
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

<!--<pre>
<?php print_r($settings); ?>
</pre>-->

<?php echo $content; ?>

</div>

<footer class="footer">
  <div class="container">
    <p class="statement">
      <span class="badge">Upozornění</span>
      Všechny informace poskytované na serveru Forexsrovnávač.cz jsou určeny výhradně ke studijním účelům témat týkajících se obchodování na finančních trzích a neslouží v žádném případě coby konkrétní investiční či obchodní doporučení. Provozovatel serveru Forexsrovnávač.cz ani jednotliví autoři nejsou registrovanými brokery či investičním poradcem ani makléřem.
    </p>
    <div class="pull-left footer-color">
      © <script>document.write(new Date().getFullYear())</script> · forexsrovnávač.cz
    </div>
    <div class="pull-right" style="position:relative;">
      <a href="http://www.sablatura.info/" data-original-title="Design&nbsp;navrhl Jan&nbsp;Šablatura" class="created-by">¤</a>
    </div>
  </div>
</footer>


<script src="<?= BASE_URL ?>assets/js/jquery.min.js"></script>
<script src="<?= BASE_URL ?>assets/js/bootstrap.min.js"></script>
<script src="<?= BASE_URL ?>assets/js/jquery.smooth-scroll.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  $('.navbar a').smoothScroll();
  $('.created-by').tooltip();
  $('.carousel').carousel({interval: 0});
  $('.brokeri td').hover(function() {
    var u = parseInt($(this).index());
    var t = u + 1;
    $('.brokeri td:nth-child('+t+')').addClass('highlighted');
    $('.brokeri td:nth-child('+u+'), .brokeri th:nth-child('+u+')').addClass('highlighted-prev');
  },
  function() {
    var u = parseInt($(this).index());
    var t = u + 1;
    $('.brokeri td:nth-child('+t+')').removeClass('highlighted');
    $('.brokeri td:nth-child('+u+'), .brokeri th:nth-child('+u+')').removeClass('highlighted-prev');
  });

  var feedsInterval = setInterval(function(){
    $.getJSON('get.php', function(data) {
    var items = [];
      for (var i=0;i<Object.keys(data).length;i++) {
        $.each(data[i], function(key, val) {
          if (key == "P") { 
            var j = '#'+key+i;
            $(j).html(val + '%'); 
          }
          else {
            var j = '#'+key+i;
            $("body").find(j).html(val);
          }
        });
      }
    });
  },1000);

  $(window).scroll(function () { 

    if ($(window).scrollTop() > 700) {
      $('.navbar-sticky').addClass('navbar-fixed-top');
    }

    if ($(window).scrollTop() < 701) {
      $('.navbar-sticky').removeClass('navbar-fixed-top');
    }
  });

});
</script>

</body>
</html>