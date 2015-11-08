<!DOCTYPE html>
<html lang="<?= $settings['language'] ?>">
<head>
  <title><?= $settings['meta']['title'].($settings['meta']['title'] ? "":""); ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="<?= $settings['meta']['title'].($settings['meta']['title'] ? " · ":""). $server_name ?>">
  <meta property="og:description" content="<?= $settings['meta']['description'] ?>">
  <meta property="og:image" content="<?= BASE_URL ?>assets/img/apple-touch-icon-144-precomposed.png">
  <meta property="og:type" content="website">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?= $settings['meta']['description'] ?>">
  <meta name="keywords" content="<?= $settings['meta']['keywords'] ?>">
  <meta name="author" content="Jan Šablatura">
  <meta http-equiv="Access-Control-Allow-Origin" content="*">
  <meta name="google-site-verification" content="l89qOWzX86DJpmFJuEyAAdrpNqhMePOFMZ-WYdHUYjw">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700&subset=latin,latin-ext" rel="stylesheet">
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
    
    $url_za_jazykem = substr($_SERVER["REQUEST_URI"],1);
    $url_za_jazykem_zacatek = substr($url_za_jazykem,0,2);
    $jazyky = array("en","cs","pl","de","sk","nl","fr","es","it","pt","hu");
    if(in_array($url_za_jazykem_zacatek,$jazyky)==true) $url_za_jazykem = substr($url_za_jazykem,3);
  ?>

  <?php
  if($url_za_jazykem=="bitcoin" || $url_za_jazykem=="bitcoin/" || $url_za_jazykem=="litecoin" || $url_za_jazykem=="litecoin/" || $url_za_jazykem=="" || $url_za_jazykem=="/")
  {
		foreach($jazyky as $j)
		{
			$url_link = BASE_URL.$j.'/'.$url_za_jazykem;
			echo '<link rel="alternate" hreflang="'.$j.'" href="'.$url_link.'" />'."\n";
		}
  }
  ?>
  
  <!--<link href="<?= BASE_URL ?>assets/css/font-awesome.min.css" rel="stylesheet">-->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <link href="<?= BASE_URL ?>assets/css/table-brokeri.min.css" rel="stylesheet">

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
<?= $header; ?>

<div class="container" itemprop="review" itemscope itemtype="http://schema.org/Review"><?= $content; ?></div>

<footer class="footer">
  <div class="container">
    <?= $footer_statement ?>
    <div class="pull-left">
      <?= $footer_left ?>
    </div>
    <div class="pull-right">
      <?= $footer_right ?>
    </div>
  </div>
</footer>

<?php //automatically adds all scripts
/* solution before
$files = glob('assets/js/min/*min.js', GLOB_BRACE);
foreach($files as $file) {
  echo '<script src="'.BASE_URL.$file.'" async></script>'."\n";
}
*/
// manually added scripts
?>
<script src="http://code.jquery.com/jquery-2.1.4.min.js" data-no-instant></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-smooth-scroll/1.5.5/jquery.smooth-scroll.min.js" data-no-instant></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" data-no-instant></script>
<script src="http://www.forexsrovnavac.cz/assets/js/min/03-app.min.js" data-no-instant></script>
<script src="http://www.forexsrovnavac.cz/assets/js/min/04-table-brokeri.js" data-no-instant></script>
<script src="http://www.forexsrovnavac.cz/assets/js/min/04-user-scripts.min.js" data-no-instant></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/instantclick/3.0.1/instantclick.min.js" async></script>
</body>
</html>
