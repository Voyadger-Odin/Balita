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


<?php

//print_r($arResult["ITEMS"]);

?>


<div class="col-md-12 col-lg-8 main-content">
    <div class="row">
        <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>

        <?
            $res = CIBlockSection::GetByID($arItem["IBLOCK_SECTION_ID"]);
            if($ar_res = $res->GetNext()):
        ?>

            <div class="col-md-6" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="blog-entry element-animate" data-animate-effect="fadeIn">
                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="Image placeholder">
                    <div class="blog-content-body">
                        <div class="post-meta">
                            <span class="category"><?=$ar_res['NAME']?></span>
                            <span class="mr-2"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></span> &bullet;
                            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                        </div>
                        <h2><?=$arItem["PREVIEW_TEXT"]?></h2>
                    </div>
                </a>
            </div>
        <?endif;?>

        <?endforeach;?>
    </div>

    <div class="row">
        <div class="col-md-12 text-center">
            <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
                <br /><?=$arResult["NAV_STRING"]?>
            <?endif;?>
        </div>
    </div>

</div>