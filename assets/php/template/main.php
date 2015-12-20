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
  <?php
    if (!isset($settings['template'])) {
      echo '<link href="'.BASE_URL.'assets/css/bootstrap.min.css" rel="stylesheet">';
      echo '<link href="'.BASE_URL.'assets/css/bootstrap-theme.min.css" rel="stylesheet">';
    }
    if ($settings['template'] == 1) {
      echo '<link href="'.BASE_URL.'assets/css/bootstrap.min.css" rel="stylesheet">';
      echo '<link href="'.BASE_URL.'assets/css/bootstrap-theme.min.css" rel="stylesheet">';
    }
    if ($settings['template'] == 2) {
      echo '<link href="'.BASE_URL.'assets/css/bootstrap.min.css" rel="stylesheet">';
      echo '<link href="'.BASE_URL.'assets/css/bootstrap-theme2.min.css" rel="stylesheet">';
    }
    if ($settings['template'] == 3) {
      echo '<link href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css" rel="stylesheet">';
      echo '<link href="'.BASE_URL.'assets/css/bootstrap-theme3.min.css" rel="stylesheet">';
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

<?php
  if (!isset($settings['template'])) {
    echo '<div class="container" itemprop="review" itemscope itemtype="http://schema.org/Review">'.$content.'</div>';
  }
  if ($settings['template'] == 1) {
    echo '<div class="container" itemprop="review" itemscope itemtype="http://schema.org/Review">'.$content.'</div>';
  }
  if ($settings['template'] == 2) {
    echo '<div class="container" itemprop="review" itemscope itemtype="http://schema.org/Review">'.$content.'</div>';
  }
  if ($settings['template'] == 3) {
    echo '<div itemprop="review" itemscope itemtype="http://schema.org/Review">'.$content.'</div>';
  }
?>

<?php if ($settings['template'] == 3) { echo '
<footer class="text-muted">
  <div class="container">
    <div class="col-md-10">
      <div class="social-links"><a href="https://www.facebook.com/pages/Forexsrovnavaccz/1415896768627764" class="fa fa-facebook"></a><a href="https://plus.google.com/b/102399851706317478440/102399851706317478440/about" class="fa fa-google-plus"></a><a href="https://www.youtube.com/channel/UC7QDVYExySk78S41Gg0Pc6A/feed" class="fa fa-youtube"></a></div>
      <ul class="footer-links">
        <li><a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Upozornění</a></li>
        <li><a href="podminky">Podmínky používání webu</a></li>
        <li>© 2015</li>
        <li><a href="http://www.sablatura.info" title="Design navrhl Jan Šablatura" class="sablatura">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewbox="0 0 500 500" xml:space="preserve">
              <style type="text/css">.st0{display:none}.st1{display:inline;fill:#D5D8DC;width:1em}</style>
              <g class="st0">
                <rect x="0" y="0" width="500" height="500" class="st1"></rect>
              </g>
              <path d="M357.9 238.6c0 63.7-32.7 124.8-98.1 183.4l-36.2-35.2c56.5-44 84.7-93.4 84.7-148.2 0-36.8-12.4-64.9-37.1-84.1 -22.2-17.3-52.2-26-89.8-26 -38.1 0-68 8.5-89.8 25.4 -24.1 19-36.2 47.3-36.2 84.7 0 24.1 5 45.4 14.9 63.8 12.1 22.4 29.3 33.6 51.7 33.6 8.9 0 16.9-2.6 24.1-7.9 -12.9-6.3-19.4-18-19.4-34.9 0-11.8 4.3-22.1 12.9-30.6 8.6-8.6 18.8-12.9 30.6-12.9 15.4 0 27.9 5.4 37.5 16.2 9.1 10.4 13.6 22.9 13.6 37.5 0 22.6-11.1 41.6-33.3 56.8 -19.3 12.3-40.9 18.4-65.1 18.4 -36.2 0-65.4-14.7-87.6-44.1 -19.9-26.7-29.8-58.4-29.8-95.2 0-51.2 16.9-90.1 50.8-116.8C87.1 98.1 128.7 86 181.4 86c51.8 0 93.4 12.3 124.7 36.8C340.7 149.9 357.9 188.5 357.9 238.6zM186.8 293.2c0-4.4-1.6-8.3-4.9-11.6 -3.3-3.3-7.1-4.9-11.6-4.9 -11 0-16.5 5.5-16.5 16.5 0 10.6 5.5 15.9 16.5 15.9C181.3 309.1 186.8 303.8 186.8 293.2zM460.1 423.6c-9.7 0-18-3.5-24.9-10.5 -6.9-7-10.3-15.3-10.3-25.1 0-9.7 3.4-18.1 10.3-25.2 6.9-7.1 15.2-10.6 24.9-10.6 9.9 0 18.4 3.5 25.4 10.6 7 7.1 10.5 15.5 10.5 25.2 0 9.7-3.5 18.1-10.5 25.1S470 423.6 460.1 423.6z" style="fill:#D5D8DC"></path>
            </svg></a></li>
      </ul>
      <div id="collapseExample" class="collapse">
        <p class="small">'.$footer_statement.'</p>
      </div>
    </div>
    <div class="col-md-2">
      <div class="btn-group dropup btn-languages pull-right">
        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-secondary btn-sm dropdown-toggle"><img src="http://www.forexsrovnavac.cz/assets/img/flags/cs.png" class="flag">Česky</button>
        <ul role="menu" aria-labelledby="drop" class="dropdown-menu">
          <li role="presentation"><a role="menuitem" tabindex="-1" hreflang="en" href="http://www.forexsrovnavac.cz/en"><img src="http://www.forexsrovnavac.cz/assets/img/flags/en.png" class="flag"> English</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" hreflang="cs" href="http://www.forexsrovnavac.cz/"><img src="http://www.forexsrovnavac.cz/assets/img/flags/cs.png" class="flag"> Česky</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" hreflang="pl" href="http://www.forexsrovnavac.cz/pl"><img src="http://www.forexsrovnavac.cz/assets/img/flags/pl.png" class="flag"> Polski</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" hreflang="de" href="http://www.forexsrovnavac.cz/de"><img src="http://www.forexsrovnavac.cz/assets/img/flags/de.png" class="flag"> Deutsche</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" hreflang="sk" href="http://www.forexsrovnavac.cz/sk"><img src="http://www.forexsrovnavac.cz/assets/img/flags/sk.png" class="flag"> Slovensky</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" hreflang="nl" href="http://www.forexsrovnavac.cz/nl"><img src="http://www.forexsrovnavac.cz/assets/img/flags/nl.png" class="flag"> Nederlands</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" hreflang="fr" href="http://www.forexsrovnavac.cz/fr"><img src="http://www.forexsrovnavac.cz/assets/img/flags/fr.png" class="flag"> Français</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" hreflang="es" href="http://www.forexsrovnavac.cz/es"><img src="http://www.forexsrovnavac.cz/assets/img/flags/es.png" class="flag"> Spagnolo</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" hreflang="it" href="http://www.forexsrovnavac.cz/it"><img src="http://www.forexsrovnavac.cz/assets/img/flags/it.png" class="flag"> Italiano</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" hreflang="pt" href="http://www.forexsrovnavac.cz/pt"><img src="http://www.forexsrovnavac.cz/assets/img/flags/pt.png" class="flag"> Português</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" hreflang="hu" href="http://www.forexsrovnavac.cz/hu"><img src="http://www.forexsrovnavac.cz/assets/img/flags/hu.png" class="flag"> Magyarul</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
'; }
else {
 echo '
  <footer class="footer">
    <div class="container">
        '.$footer_statement.'
      <div class="pull-left">
        '.$footer_left.'
      </div>
      <div class="pull-right">
        '.$footer_right.'
      </div>
    </div>
  </footer>
 ';
}
?>

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
<?php
  if (!isset($settings['template'])) {
    echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" data-no-instant></script>';
  }
  if ($settings['template'] == 1) {
    echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" data-no-instant></script>';
  }
  if ($settings['template'] == 2) {
    echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" data-no-instant></script>';
  }
  if ($settings['template'] == 3) {
    echo '<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js" data-no-instant></script>';
  }
?>
<script src="http://www.forexsrovnavac.cz/assets/js/min/03-app.min.js" data-no-instant></script>
<script src="http://www.forexsrovnavac.cz/assets/js/min/04-table-brokeri.js" data-no-instant></script>
<script src="http://www.forexsrovnavac.cz/assets/js/min/04-user-scripts.min.js" data-no-instant></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/instantclick/3.0.1/instantclick.min.js" async></script>
</body>
</html>
