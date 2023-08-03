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


<div class="col-md-12 col-lg-8 main-content">
    <h1 class="mb-4">There’s a Cool New Way for Men to Wear Socks and Sandals</h1>
    <div class="post-meta">
        <?
        $res = CIBlockSection::GetByID($arResult["IBLOCK_SECTION_ID"]);
        if($ar_res = $res->GetNext()):
        ?>
            <span class="category"><?=$ar_res['NAME']?></span>
        <?endif;?>
        <span class="mr-2"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span> &bullet;
        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
    </div>
    <div class="post-content-body">
        <?if($arResult["DETAIL_TEXT"] <> ''):?>
        <?echo $arResult["DETAIL_TEXT"];?>
        <?else:?>
        <?echo $arResult["PREVIEW_TEXT"];?>
        <?endif?>


    </div>


    <div class="pt-5">
        <?
        $res = CIBlockSection::GetByID($arResult["IBLOCK_SECTION_ID"]);
        if($ar_res = $res->GetNext()):
        ?>
            <p>Categories:  <a href="#"><?=$ar_res['NAME']?></a>
        <?endif;?>
    </div>

</div>