<?php
$url = "";
$url = $_GET['url'];

if ($url === "..") {
  $url = "";
}

$dir = '../content/';
$dir = $dir . $url;

if (substr($url, -3) == '.md') {

  $file = file_get_contents($dir, true);
  echo json_encode($file);

}
else {

  $files = array();

  $files = glob("../content/".$url."/*");
  usort($files, function ($a, $b) {
      $aIsDir = is_dir($a);
      $bIsDir = is_dir($b);
      if ($aIsDir === $bIsDir)
          return strnatcasecmp($a, $b); // both are dirs or files
      elseif ($aIsDir && !$bIsDir)
          return -1; // if $a is dir - it should be before $b
      elseif (!$aIsDir && $bIsDir)
          return 1; // $b is dir, should be before $a
  });

  foreach ($files as $key => $value) {
    $value = str_replace("../content/","",$value);
    $files[$key] = $value;
  }

  $lastdir = dirname($dir); 
  $lastdir = str_replace("../content/","",$lastdir);
  $lastdir = str_replace("../content","",$lastdir);

  array_unshift($files, $lastdir);
  echo json_encode(array_values($files));

}
?>