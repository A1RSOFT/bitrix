<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html>
<head>

  <?
  use \Bitrix\Main\Page\Asset;
  $APPLICATION->ShowHead();
  ?>

    <title><? $APPLICATION->ShowTitle(); ?></title>

  <?
  Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/bootstrap.css");
  Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/nav.css");
  Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/form.css");
  Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/style.css");


  Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/jquery.min.js");
  Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/jquery.easydropdown.js");
  Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/hover_pack.js");
  Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/scripts.js");


  Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
  Asset::getInstance()->addString("<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>");

  ?>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
            });
        });
    </script>

</head>

<body>
<?$APPLICATION->ShowPanel();?>
<!-- header-section-starts -->
<div class="c-header" id="home">
    <div class="top-header">
        <div class="container">
            <div class="logo">
                <a href="index.html"><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/logo.png" alt="" /></a>
            </div>
            <div class="header-top-right">
                <!-- start search-->
                <div class="search-box">
                    <div id="sb-search" class="sb-search">
                        <form>
                            <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
                            <input class="sb-search-submit" type="submit" value="">
                            <span class="sb-icon-search"> </span>
                        </form>
                    </div>
                </div>
                <!-- search-scripts -->
                <script src="<?=DEFAULT_TEMPLATE_PATH?>/js/classie.js"></script>
                <script src="<?=DEFAULT_TEMPLATE_PATH?>/js/uisearch.js"></script>
                <script>
                    new UISearch( document.getElementById( 'sb-search' ) );
                </script>
                <!-- //search-scripts -->

                <a href="cart.html"><i class="cart"></i></a>
            </div>
          <?$APPLICATION->IncludeComponent(
              "bitrix:menu",
              "horizontal_multilevel",
              array(
                  "ALLOW_MULTI_SELECT" => "N",
                  "CHILD_MENU_TYPE" => "additional",
                  "DELAY" => "N",
                  "MAX_LEVEL" => "2",
                  "MENU_CACHE_GET_VARS" => array(
                  ),
                  "MENU_CACHE_TIME" => "3600",
                  "MENU_CACHE_TYPE" => "N",
                  "MENU_CACHE_USE_GROUPS" => "Y",
                  "ROOT_MENU_TYPE" => "main",
                  "USE_EXT" => "Y",
                  "COMPONENT_TEMPLATE" => "horizontal_multilevel"
              ),
              false
          );?>
        </div>
    </div>
</div>
<!-- start Dresses-page -->
<!-- content-section-starts -->
<div class="container">