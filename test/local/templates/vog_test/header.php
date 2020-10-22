<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<!--
https://w3layouts.com/voguish-a-blogging-category-flat-bootstrap-responsive-web-template/
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>

  <?
  use \Bitrix\Main\Page\Asset;
  $APPLICATION->ShowHead();
  ?>
  <title><? $APPLICATION->ShowTitle(); ?></title>

  <?
  Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/bootstrap.css");
  Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/style.css");
  CJSCore::Init(['jquery']);
  Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/responsiveslides.min.js");
  Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
  Asset::getInstance()->addString("<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>");
  Asset::getInstance()->addString("<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>");
  ?>
  <!--    <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>-->
  <link rel="icon" type="image/x-icon" href="<?=DEFAULT_TEMPLATE_PATH?>/favicon.ico?v=3">
  <!--  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">-->
  <!--  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />-->
  <!--  <meta name="viewport" content="width=device-width, initial-scale=1">-->
  <!--  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
  <!--  <meta name="keywords" content="Voguish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,-->
  <!--Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />-->

  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!--  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>-->
  <!--  <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>-->
  <!--  <script src="js/jquery.min.js"></script>-->
  <!--  <script src="js/responsiveslides.min.js"></script>-->
  <script>
      $(function () {
          $("#slider").responsiveSlides({
              auto: true,
              nav: true,
              speed: 500,
              namespace: "callbacks",
              pager: true,
          });
      });

  </script>

</head>
<body>

<?$APPLICATION->ShowPanel();?>
