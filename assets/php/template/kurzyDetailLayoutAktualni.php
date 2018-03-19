<?php ob_start(); ?>
<div class="row topBoxes">
    <div class="col-md-4">
        <div class="box"> 
        
         <div class="smw smw-single smw-header smw-ct-blue smw-refreshable" data-symbol="<?php echo $settings['widget']['symbol'] ?>" data-refresh-frequency="0">
  
  <div class="smw-content">
    <span class="smw-market-data-field" data-field="n"></span>

    <div class="smw-market-data-field" data-field="s"></div>

    <div class="smw-quote-container">
      <div class="smw-rate">
        <span class="smw-change-indicator">
          <i class="fa fa-arrow-down smw-arrow-icon smw-arrow-drop"></i>
          <i class="fa fa-arrow-up smw-arrow-icon smw-arrow-rise"></i>
        </span>
        <span class="smw-market-data-field" data-field="l1"></span>
        <span class="smw-market-data-field" data-field="c4"></span>
      </div>

      <div class="smw-change-indicator smw-change">
        <div class="smw-market-data-field" data-field="c1"></div>
        <div class="smw-market-data-field" data-field="p2"></div>
      </div>
    </div>
  </div>
</div>
            
    <!--        <table>
                <tr>
                    <th>Ticker:</th>
                    <td><?php echo $settings['detail']['ticker'] ?></td>
                </tr>
                <tr>
                    <th>Burza:</th>
                    <td><?php echo $settings['detail']['burza'] ?></td>
                </tr>
                <tr>
                    <th>Odvětví:</th>
                    <td><?php echo $settings['detail']['odvetvi'] ?></td>
                </tr>
            </table>  !-->
        </div>
    </div>  
      
    <div class="col-md-4">
        <div class="box reklama">
            {{partial: kurzy/detail-reklama}}
        </div>
    </div>
    <div class="col-md-4">
        {{partial: kurzy/ceske-akcie-odkazy}}
    </div>
</div>
<?php
    $output = ob_get_contents();  // obsah bufferu uloží do proměnné
    ob_end_clean();
    $output = Michelf\MarkdownExtra::defaultTransform($output);
    $output = \core\core::partials($output, $settings);
    $content = $output . $content;
?>
<?php 
new Jirkae\GoogleFinancialFeed('https://www.google.com/finance/company_news?q=FRA:ADS&ei=k7zNV5H9GoqqsQGyvoPgCw&output=rss');
    if (strpos($content, '{{discussion}}') !== FALSE) {        
        $discussion = new Jirkae\Discussion();        
        $content = str_replace("{{discussion}}", $discussion->render(), $content);
    }
    if (strpos($content, '{{historical}}') !== FALSE) {        
        $historical = new Jirkae\Historical();        
        $content = str_replace("{{historical}}", $historical->render(), $content);
    } 
    if (strpos($content, '{{googleFeed') !== FALSE) {      
        preg_match('/{{googleFeed url=>"(.*)"}}/', $content, $matches);          
        if (strlen($matches[1]) > 5) {
            $googleFeed = new Jirkae\GoogleFinancialFeed($matches[1]);        
            $content = preg_replace("/{{googleFeed.*}}/", $googleFeed->render(), $content);
        } else {
            $content = preg_replace("/{{googleFeed.*}}/", '', $content);
        }
    }
    
?>
<?php require_once __DIR__.'/kurzyLayoutAktualni.php'; ?>