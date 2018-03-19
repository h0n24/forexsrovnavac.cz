<?php 
use \Michelf\MarkdownExtra;
require_once __DIR__.'/../Jirkae/Router.php';
new Jirkae\Router();                   
if (strpos($_SERVER['REQUEST_URI'], 'kurzy/komentare') !== FALSE && $_GET[\Jirkae\Discussion::SECRET_KEY] == \Jirkae\Discussion::SECRET) {
    $discussion = new Jirkae\Discussion();       
}               
?>

<!DOCTYPE html>
<html lang="<?= $settings['language'] ?>">
    <head>        
        <title><?= $settings['meta']['title'] . ($settings['meta']['title'] ? "" : ""); ?></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="og:title" content="<?= $settings['meta']['title'] . ($settings['meta']['title'] ? "" : $server_name) ?>">
        <meta property="og:description" content="<?= $settings['meta']['description'] ?>">
        <meta property="og:image" content="<?= BASE_URL ?>assets/img/apple-touch-icon-144-precomposed.png">
        <meta property="og:type" content="website">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?= $settings['meta']['description'] ?>">
        <meta name="keywords" content="<?= $settings['meta']['keywords'] ?>">
        <meta name="author" content="Jiří Endršt">
        <meta http-equiv="Access-Control-Allow-Origin" content="*">
        <meta name="google-site-verification" content="l89qOWzX86DJpmFJuEyAAdrpNqhMePOFMZ-WYdHUYjw">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700&subset=latin,latin-ext" rel="stylesheet">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= BASE_URL ?>assets/img/apple-touch-icon-144-precomposed.png">
        <link rel="shortcut icon" href="<?= BASE_URL ?>assets/img/favicon.png">
        <!-- Bootstrap -->
        <link href="<?= BASE_URL ?>assets/bootstrap-3-3-6/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= BASE_URL ?>assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?= BASE_URL ?>assets/css/kurzy.css?123" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>assets/css/sm-style.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body data-spy="scroll" data-offset="100" data-target="#scrollpsy" id="top">
        <?php echo $header; ?>
        
        <?php if(isset($settings['pageTitle'])): ?>
            <header class="page-subheader">
                <div class="container">
                    <h1><?php echo $settings['pageTitle']; ?></h1>
                </div>
            </header>
        <?php endif; ?>

        <div class="page-content">
            <div class="container">
                <?php echo $content; ?> 
                <?php                         
                    if (strpos($_SERVER['REQUEST_URI'], 'kurzy/komentare') !== FALSE && $_GET[\Jirkae\Discussion::SECRET_KEY] == \Jirkae\Discussion::SECRET) {                        
                        echo $discussion->renderAllComments();
                    }
                ?>
            </div>
        </div>

        <?php echo MarkdownExtra::defaultTransform(file_get_contents(__DIR__.'/../../../content/cs/_partials/footer/kurzy.md')); ?>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        
           <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.6/highlight.min.js"></script>
    <script src="<?= BASE_URL ?>assets/js/sm_widgets.js"></script> 
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?= BASE_URL ?>assets/bootstrap-3-3-6/js/bootstrap.min.js"></script>
        <script>
            $(function(){
                var hash = window.location.hash;
                hash && $('ul.nav a[href="' + hash + '"]').tab('show');

                $('.nav-tabs a').click(function (e) {
                  $(this).tab('show');
                  var scrollmem = $('body').scrollTop() || $('html').scrollTop();
                  window.location.hash = this.hash;
                  $('html,body').scrollTop(scrollmem);
                });
              });
              
              setTimeout(function(){
                $('[name=secure_q]').each(function(){
                    var number1 = $(this).val().substring(2, 5);
                    var number2 = $(this).val().substring(8, 11);
                    $(this).parent().find('[name=secure_a]').val(parseInt(number1)+parseInt(number2));
                });
              }, 1000);              
        </script>
    </body>
</html>