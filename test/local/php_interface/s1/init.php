<?php
define("DEFAULT_TEMPLATE_PATH", '/local/templates/.default');

function showDetailData($data) {
  echo '<pre>' .  print_r($data, 1) . '</pre>';
}


function cutText($text, $limit =  6) {
  if (str_word_count($text, 0) > $limit) {
    $words = str_word_count($text, 2);
    $pos   = array_keys($words);
    $text  = substr($text, 0, $pos[$limit]) . '...';
  }
  return $text;
}

?>
