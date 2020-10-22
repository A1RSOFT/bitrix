<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?//
//    showDetailData($arResult);
//?>
<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" class="img-responsive" alt="">

<?=$arResult["DETAIL_TEXT"]?>

<div class="artical-links">
    <ul>
        <li><small> </small><span>june 14, 2013</span></li>
        <li><a href="#"><small class="admin"> </small><span><?=$arResult["PROPERTIES"]["AUTHOR"]["VALUE"]?></span></a></li>
        <li><a href="#"><small class="no"> </small><span>No comments</span></a></li>
        <li><a href="#"><small class="posts"> </small><span>View posts: <?=$arResult["SHOW_COUNTER"]?></span></a></li>
        <li><a href="<?=$arResult["DETAIL_PAGE_URL"]?>"><small class="link"> </small><span>permalink</span></a></li>
    </ul>
</div>