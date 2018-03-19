<?php ob_start(); ?>
<div class="row topBoxes">
    <div class="col-md-4">
        <div class="box"> 
              
           <table>
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
            </table> 
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
<?php require_once __DIR__.'/kurzyLayout.php'; ?>