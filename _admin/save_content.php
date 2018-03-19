<?php
// Open the file to get existing content
//$text = file_get_contents($file);

$file = "../content" . $_POST['header'];
$text = $_POST['data'];

$folder = dirname($file);

// to tady technicky nemusí být
if (!is_dir($folder)) {
  // dir doesn't exist, make it
  mkdir($folder, 0777, true);
}


// Write the contents back to the file
file_put_contents($file, $text);
?>