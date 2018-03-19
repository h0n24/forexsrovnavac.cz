<?php
header('Content-Type: text/html; charset=utf-8');

// constants
define("BASEURL", "data/");

// log time
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;

function test_array_count($tested_array) {
  // testing purposes - count how many coins
  echo(count($tested_array)."\n\n<br><br>");
}

function test_array($tested_array) {
  // testing purposes - vardump of all coins
  highlight_string("<?php\n\$data =\n" . var_export($tested_array, true) . ";\n?>");
}

function download_crypto_all() {

  // downloading coins
  $crypto_all_coins_url = 'https://min-api.cryptocompare.com/data/all/coinlist'; // coinlist that cryptocompare has

  $temp_data = file_get_contents($crypto_all_coins_url);
  $crypto_all_coins_data = json_decode($temp_data, true);
  $crypto_all_coins_data = $crypto_all_coins_data["Data"];

  // testing purposes
  //$crypto_all_coins_data = array_slice($crypto_all_coins_data, 0, 100, true); // preserve values!
  //$crypto_all_coins_data = array_slice($crypto_all_coins_data, 0, 1000, true); // preserve values!

  // cleaning
  foreach ($crypto_all_coins_data as $key => $coin) {

    // cleaning cryptocompare stuff
    unset($crypto_all_coins_data[$key]["Id"]);
    unset($crypto_all_coins_data[$key]["Url"]);
    unset($crypto_all_coins_data[$key]["Algorithm"]);
    unset($crypto_all_coins_data[$key]["ProofType"]);
    unset($crypto_all_coins_data[$key]["FullyPremined"]);
    unset($crypto_all_coins_data[$key]["PreMinedValue"]);
    unset($crypto_all_coins_data[$key]["TotalCoinsFreeFloat"]);
    unset($crypto_all_coins_data[$key]["Sponsored"]);
    unset($crypto_all_coins_data[$key]["IsTrading"]);

    // possibly handy
    unset($crypto_all_coins_data[$key]["ImageUrl"]);
    unset($crypto_all_coins_data[$key]["TotalCoinSupply"]);
    unset($crypto_all_coins_data[$key]["FullName"]);
    unset($crypto_all_coins_data[$key]["Name"]); // same as symbol

    // sort order
    unset($crypto_all_coins_data[$key]["SortOrder"]);

    // symbol -> same as key
    unset($crypto_all_coins_data[$key]["Symbol"]); // same as symbol
  }

  return $crypto_all_coins_data;
}

function save_local($array, $filename) {
  $reencoded_data = json_encode($array);
  $file_all = BASEURL . $filename;
  file_put_contents($file_all, $reencoded_data);
}

function download_local_all() {
  // downloading coins
  $local_all_coins_url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'].BASEURL.'all.json';

  $temp_data = file_get_contents($local_all_coins_url, true);
  $data = get_magic_quotes_gpc() ? stripslashes($temp_data) : $temp_data;

  $local_all_coins_data = json_decode($data, true);
  return $local_all_coins_data;
}

$all_coins_data = download_crypto_all();
save_local($all_coins_data, "all.json");

$all_coins_data = download_local_all();


// ----------

// generate long url call
$temp_coin_request = "";
$long_url_call_array = array();

foreach ($all_coins_data as $key => $value) {
  $temp_coin_request .= $key;
  if (strlen($temp_coin_request) > (300 - 9)) {
    $long_url_call_array[] = $temp_coin_request;
    $temp_coin_request = "";
  }
  else {
    $temp_coin_request .= ",";
  }
}

foreach ($long_url_call_array as $value) {
  $crypto_full_coins_url = "https://min-api.cryptocompare.com/data/pricemultifull?fsyms=".$value."&tsyms=USD";

  $temp_data = file_get_contents($crypto_full_coins_url);
  $temp_data = json_decode($temp_data, true);

  // saving data
  foreach ($temp_data["RAW"] as $keyAggregated => $valueAggregated) {

    $temp_data = $valueAggregated["USD"];

    if (is_string($temp_data["PRICE"])) {
      $temp_data["PRICE"] = floatval($temp_data["PRICE"]);
    } 

    if (empty($temp_data["PRICE"])) {

      //LAB*, LGD* and similar "shitcoins" without price
      continue;

    } else {

      // CoinName
      $temp_data["NAME"] = $all_coins_data[$keyAggregated]["CoinName"];

      // cleaning cryptocompare stuff
      unset($temp_data["MARKET"]);
      unset($temp_data["FROMSYMBOL"]);
      unset($temp_data["TYPE"]);
      unset($temp_data["FLAGS"]);

      unset($temp_data["LASTUPDATE"]);
      unset($temp_data["LASTVOLUME"]);
      unset($temp_data["LASTVOLUMETO"]);
      unset($temp_data["LASTTRADEID"]);

      unset($temp_data["VOLUMEDAY"]);
      unset($temp_data["VOLUMEDAYTO"]);
      unset($temp_data["VOLUME24HOUR"]);
      unset($temp_data["VOLUME24HOURTO"]);

      unset($temp_data["OPENDAY"]);
      unset($temp_data["HIGHDAY"]);
      unset($temp_data["LOWDAY"]);

      unset($temp_data["OPEN24HOUR"]);
      unset($temp_data["HIGH24HOUR"]);
      unset($temp_data["LOW24HOUR"]);

      // possibly handy
      unset($temp_data["LASTMARKET"]);
      unset($temp_data["CHANGE24HOUR"]);
      unset($temp_data["CHANGEDAY"]);

      // removed due json space optimization
      unset($temp_data["Symbol"]); // its in array name
      unset($temp_data["TOSYMBOL"]); // its repetitive -> in filename

      // remove all zeros (unnecessary for newly generated json)
      if ($temp_data["CHANGEPCT24HOUR"] == 0) {
        unset($temp_data["CHANGEPCT24HOUR"]);
      }

      if ($temp_data["CHANGEPCTDAY"] == 0) {
        unset($temp_data["CHANGEPCTDAY"]);
      }    

      if ($temp_data["SUPPLY"] == 0) {
        unset($temp_data["SUPPLY"]);
      }   

      if ($temp_data["MKTCAP"] == 0) {
        unset($temp_data["MKTCAP"]);
      }   

      if ($temp_data["TOTALVOLUME24H"] == 0) {
        unset($temp_data["TOTALVOLUME24H"]);
      }  

      if ($temp_data["TOTALVOLUME24HTO"] == 0) {
        unset($temp_data["TOTALVOLUME24HTO"]);
      }

      $full_coins_data[$keyAggregated] = $temp_data;
    }
    
  }
}

// full data
save_local($full_coins_data, "full-usd.json");

// echo log time
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$finish = $time;
$total_time = round(($finish - $start), 4);
if ($total_time > 60) {
  $total_time_min = (int) ($total_time / 60); 
  $total_time_sec = $total_time % 60;
  echo 'Stránka generována '.$total_time_min.' minut a '.$total_time_sec.' sekund.';
} else {
  echo 'Stránka generována '.$total_time.' sekund.';
};


//testing purposes
echo "<h1>Hodinové limity pro IP</h1>";

$limits = 'https://min-api.cryptocompare.com/stats/rate/hour/limit';

$limit_data = file_get_contents($limits, true);
$limit_data = json_decode($limit_data, true);
test_array($limit_data);


echo "<br><hr><br>";

echo "<h1>Aggregovaná data</h1>";
echo "Celkový počet coinů: "; 
test_array_count($full_coins_data);

test_array($full_coins_data);

?>