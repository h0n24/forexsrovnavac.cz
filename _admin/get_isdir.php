<?php

$folder = "../content/" . $_POST['directory'] . "/";

// existuje složka?
if (!file_exists($folder)) {
  echo "false";
} else {
  echo "true";
}
?>