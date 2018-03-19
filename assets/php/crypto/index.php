<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>

<style>

table.table.table-striped th, table.table.table-striped td {

text-align: left;vertical-align:middle;}

table.table.table-striped tr th:nth-child(n+4), table.table.table-striped tr td:nth-child(n+4) {text-align: right;}

table tr th.none, table tr td.none {display: none;}

.tacenter {text-align: center;}

table.table.table-striped  tr th {color:#ababab}

table.table.table-striped {max-width: 800px;margin:auto;}

table.table.table-striped a.btn {display: inline-block;padding: 10px;padding-left: 20px;padding-right:16px;color:#999999;height: 40px;line-height:20px;font-weight:bold;background: #dfdfdf;border-radius: 2px;text-transsform: uppercase;}

table.table.table-striped a.btn:hover {background: #446cb3;color:#fff;}

table.table.table-striped tr {border: 1px solid transparent;}

table.table.table-striped tr:nth-child(n+2):hover {border: 1px solid #446cb3;}

table.table.table-striped tr:hover a.btn {background: #446cb3;color:#fff;}

table.table.table-striped tr:hover td {border-top:1px solid  #446cb3;border-bottom: 1px solid  #446cb3;}

</style>



<?php

////////// Settings

if($settings['language'] == 'sk') {$c = "EUR";$cryptocurrency="Kryptoměna SK";$cryptosymbol="Symbol SK";$cryptorate="Kurz SK";$cryptograph="Graf";}

elseif($settings['language'] == 'pl') {$c = "PLN";$cryptocurrency="Kryptoměna PL";$cryptosymbol="Symbol PL";$cryptorate="Kurz PL";$cryptograph="Graf";}

elseif($settings['language'] == 'en') {$c = "GBP";$cryptocurrency="Kryptoměna EN";$cryptosymbol="Symbol EN";$cryptorate="Kurz EN";$cryptograph="Graf EN";}

elseif($settings['language'] == 'de') {$c = "EUR";$cryptocurrency="Kryptoměna DE";$cryptosymbol="Symbol DE";$cryptorate="Kurz DE";$cryptograph="Graf DE";}

elseif($settings['language'] == 'es') {$c = "EUR";$cryptocurrency="Kryptoměna ES";$cryptosymbol="Symbol ES";$cryptorate="Kurz ES";$cryptograph="Graf ES";}

elseif($settings['language'] == 'fr') {$c = "EUR";$cryptocurrency="Crypto-Monnaie";$cryptosymbol="Symbole boursier";$cryptorate="Cours USD/EUR";$cryptograph="Graphique";}

elseif($settings['language'] == 'hu') {$c = "HUF";$cryptocurrency="Kryptoměna HU";$cryptosymbol="Symbol HU";$cryptorate="Kurz HU";$cryptograph="Graf HU";}

elseif($settings['language'] == 'it') {$c = "EUR";$cryptocurrency="Kryptoměna IT";$cryptosymbol="Symbol IT";$cryptorate="Kurz IT";$cryptograph="Graf IT";}

elseif($settings['language'] == 'nl') {$c = "EUR";$cryptocurrency="Kryptoměna NL";$cryptosymbol="Symbol NL";$cryptorate="Kurz NL";$cryptograph="Graf NL";}

elseif($settings['language'] == 'pt') {$c = "EUR";$cryptocurrency="Kryptoměna PT";$cryptosymbol="Symbol PT";$cryptorate="Kurz PT";$cryptograph="Graf";}



else {$c="CZK";$cryptocurrency="Kryptoměna";$cryptosymbol="Symbol";$cryptorate="Kurz";$cryptograph="Graf";}





$updatehours="12";

$servername = "http://www.forexsrovnavac.cz";

///////////

?>



<div class="tacenter">

<table class="table table-striped">

<tr>

<th></th>

<th><?php echo $cryptocurrency;?></th>

<th><?php echo $cryptosymbol;?></th>

<th class="sort"><?php echo $cryptorate;?></th>

<th class="none"></th>

<th></th>

</tr>

<?php

$c = strtoupper($c);


$filehtml = @file_get_contents("assets/php/crypto/save_".$settings['language'].".php");

$filedate = strstr($filehtml, '#', true);

	if((date('Y-m-d H:i:s') < date('Y-m-d H:i:s', strtotime($filedate.'+'.$updatehours.' hours')))&&($filedate!="")) {

	echo trim(explode('#', $filehtml)[1]);

	}

else {

$crypto = Array('btc','eth','xrp','bch','ltc','dash','xem','neo','iot','xmr','etc','omg','qtum','lsk','zec','waves','strat','steem','gas','ark','eos','pay','bcn','kmd','rep','maid','gnt','xlm','dcr','ardr','mtl','bts','game','sc','dgd','fct','pivx','gno','fun','dgb','cvc','gbyte','doge','xvg','xzc','nmc');

$cryptonames = Array('BTC' => 'Bitcoin','ETH' => 'Ethereum','XRP' => 'Ripple','BCH' => 'Bitcoin Cash','LTC' => 'Litecoin','DASH' => 'Dash','XEM' => 'NEM','NEO' => 'NEO','IOT' => 'IOTA','XMR' => 'Monero','ETC' => 'Ethereum Classic','OMG' => 'OmiseGo','QTUM' => 'Qtum','LSK' => 'Lisk','ZEC' => 'Zcash','WAVES' => 'Waves','STRAT' => 'Stratis','STEEM' => 'Steem','GAS' => 'Gas','ARK' => 'Ark','EOS' => 'EOS','PAY' => 'TenX','BCN' => 'Bytecoin','KMD' => 'Komodo','REP' => 'Augur','MAID' => 'MaidSafeCoin','GNT' => 'Golem','XLM' => 'Stellar Lumens','DCR' => 'Decred','ARDR' => 'Ardor','MTL' => 'Metal','BTS' => 'BitShares','GAME' => 'GameCredits','SC' => 'Siancoin','DGD' => 'Digix DAO','FCT' => 'Factom','PIVX' => 'PIVX','GNO' => 'Gnosis','FUN' => 'FunFair','DGB' => 'DigiByte','CVC' => 'Civic','GBYTE' => 'Byteball','DOGE' => 'Dogecoin','XVG' => 'Verge','XZC' => 'ZCoin','NMC' => 'Namecoin');

function tono($string,$num,$cur){

	$newstring = '"0":"1","EUR":"1"';

	$xml=simplexml_load_file("http://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml");

	$xx=0;

	while($xx<=30) {

	$currency = $xml->Cube->Cube->Cube[$xx]->attributes()->currency;

	$rate = $xml->Cube->Cube->Cube[$xx]->attributes()->rate;

	$newstring = $newstring.', "'.$currency.'" : "'.$rate.'"';

	$xx++;

	}

	$newstring = '{'.$newstring.'}';

	$newstring = json_decode($newstring, true);	

	$rates = $newstring;

	$symbol = Array('0' => '','USD' => '$','CZK' => 'Kč','EUR' => '€');

	$string = number_format(($string * strtr($cur,$rates)),$num,',','.')."&nbsp;".strtr($cur,$symbol);

	return $string;

}

$myfile = fopen("assets/php/crypto/save_".$settings['language'].".php", "w+") or die("Unable to open file!");

$datenow = date('Y-m-d H:i')."#";

fwrite($myfile, $datenow);

foreach($crypto AS $crypto) { 

$feed = file_get_contents('https://api.cryptonator.com/api/ticker/'.$crypto.'-eur');

$feed = json_decode($feed, true);

$html = "<tr>

<td><img src=\"$servername/assets/php/crypto/img/".$crypto.".png\" alt=\"\" /></td>

<td>".strtr($feed[ticker][base],$cryptonames)."</td>

<td>".$feed[ticker][base]."</td>

<td class=\"none\">".$feed[ticker][price]."</td>

<td>".tono($feed[ticker][price],2,'USD')."<br />".tono($feed[ticker][price],2,$c)."</td>

<td><a class=\"btn\" href=\"".$servername."/".$settings['language']."/".str_replace(' ','-',strtolower(strtr($feed[ticker][base],$cryptonames)))."/\">".$cryptograph."</a></td>

</tr>";

echo $html;

fwrite($myfile, $html);

} 

fclose($myfile);

} ?>



</table>

</div>



<script>

$(document).ready(function() {



if (navigator.userAgent.match(/IEMobile\/10\.0/)) {

  var msViewportStyle = document.createElement("style");

  msViewportStyle.appendChild(

    document.createTextNode(

      "@-ms-viewport{width:auto!important}"

    )

  );

  document.getElementsByTagName("head")[0].

    appendChild(msViewportStyle);

}



  

$('th').click(function(){

    var table = $(this).parents('table').eq(0)

    var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()))

    this.asc = !this.asc

    if (!this.asc){rows = rows.reverse()}

    for (var i = 0; i < rows.length; i++){table.append(rows[i])}

})

function comparer(index) {

    return function(a, b) {

        var valA = getCellValue(a, index), valB = getCellValue(b, index)

        return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.localeCompare(valB)

    }

}

function getCellValue(row, index){ return $(row).children('td').eq(index).text() }



$('th.sort').click().click();



});



</script>