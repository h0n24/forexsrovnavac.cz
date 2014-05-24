<?php
/*$get = file_get_contents('http://marketools.plus500.com/Feeds/UpdateTable?jsonp=?&instsIds=2,4,28,58');*/

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://marketools.plus500.com/Feeds/UpdateTable?jsonp=?&instsIds=2,4,28,58');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$get = curl_exec($ch);
curl_close($ch);

$json = json_decode($get,true);
//var_dump($json["Feeds"]);
echo json_encode($json["Feeds"]);
?>