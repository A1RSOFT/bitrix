<?php

define("DEFAULT_TEMPLATE_PATH", "/local/templates/.default");

function showDetailData($data)
{
  echo '<pre>' . print_r($data) . '</pre>';
}