<?php
namespace core;
use \core\core;
use \core\vars;
use \Michelf\MarkdownExtra;

class layout extends core {

  public static function layout($content){

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
        if ($i == 0) { $new_layout.= '<div class="row">'."\n"; };
        if ($i == 3) { $new_layout.= '<div class="row">'."\n"; };
        if ($i == 6) { $new_layout.= '<div class="row">'."\n"; };

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
        if ($i == 2) { $new_layout.= '</div>'."\n"; };
        if ($i == 5) { $new_layout.= '</div>'."\n"; };
        if ($i == 8) { $new_layout.= '</div>'."\n"; };
        $i++;
      }
      if (isset($layout['ostatni'])) {
        $new_layout.= '<div class="row"><div class="col-md-12"><h3>Ostatní</h3>'.$layout['ostatni'].'</div></div>';
      }
      $new_layout.= "</div>\n";

      $new_layout.= '<div class="col-md-3">'."\n";
      if (isset($layout['demo'])) {
        $new_layout.= '<a class="btn btn-warning btn-lg" href="'.$layout['demo']['url'].'">'.$layout['demo']['popisek'].'</a>'."\n";
      }
      if (isset($layout['blok'])) {
        $new_layout.= '<blockquote><h3>'.$layout['blok']['popisek'].'</h3>'.$layout['blok']['obsah'].'</blockquote>'."\n";
      }
      $new_layout.= "</div>\n";

      $new_layout.= "</div>\n";

      $content = str_replace("{{layout}}" . $old_layout . "{{/layout}}",$new_layout, $content);

    }

    while (strpos($content,'{{@timestamp}}') !== false) {

      $content = str_replace("{{@timestamp}}", date("YmdHis"), $content);

    }

    return $content;
  }

  public static function footer_left(){
    return "© ".date("Y")." · ".vars::server_name().' · '.vars::legal()."\n";
  }

  public static function footer_statement($settings){

    $footer_statement = "";
    $footer_statement_url = CONTENT_DIR . $settings['language']. "/" . '_partials/'  . "footer/". "statement" . FILE_FORMAT;
    $footer_statement_test = @file_get_contents($footer_statement_url);

    if ($footer_statement_test !== false) {
      $footer_statement = file_get_contents($footer_statement_url);
      $footer_statement = str_replace("{{url}}",BASE_URL, $footer_statement);
      $footer_statement = "<p class='statement'>".$footer_statement."</p>\n";
    } else {
      $footer_statement = core::console("footer_statement not loaded");
    }

    return $footer_statement;
  }

  public static function footer_right($settings, $url){

    if (strpos($url,'bitcoin') !== false) {
      $footer_right_url = CONTENT_DIR . $settings['language'] . "/" .'_partials/' . "footer/". "bitcoin" . FILE_FORMAT;
    }
    else if(strpos($url,'litecoin') !== false) {
      $footer_right_url = CONTENT_DIR . $settings['language'] . "/" .'_partials/' . "footer/". "litecoin" . FILE_FORMAT;
    }
    else {
      $footer_right_url = CONTENT_DIR . $settings['language'] . "/" .'_partials/' . "footer/". "main" . FILE_FORMAT;
    }

    $footer_right_test = @file_get_contents($footer_right_url);

    if ($footer_right_test !== false){
      $footer_right = file_get_contents($footer_right_url);
      $footer_right = core::url($footer_right, $settings);
      $footer_right = core::url_base($footer_right);
      $footer_right = $footer_right."\n";
    }else{
      $footer_right = core::console("footer_right not loaded");
    }
    
    return $footer_right;
  }

}
?>