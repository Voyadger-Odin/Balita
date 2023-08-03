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


<?
$res = CIBlockSection::GetByID($arParams['PARENT_SECTION']);
if($ar_res = $res->GetNext()){
    $APPLICATION->SetPageProperty("Category", $ar_res['NAME']);
}
?>


<div class="col-md-12 col-lg-8 main-content">
    <div class="row mb-5 mt-5">

        <div class="col-md-12">

            <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>

            <?
            $res = CIBlockSection::GetByID($arItem["IBLOCK_SECTION_ID"]);
            if($ar_res = $res->GetNext()):
            ?>


                <div class="post-entry-horzontal" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                        <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);"></div>
                        <span class="text">
                            <div class="post-meta">
                                <span class="category">
                                    <?
                                    $res = CIBlockSection::GetByID($arItem["IBLOCK_SECTION_ID"]);
                                    if($ar_res = $res->GetNext()):
                                    ?>
                                        <?=$ar_res['NAME']?>
                                    <?endif;?>
                                </span>
                                <span class="mr-2"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></span> &bullet;
                                <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                            </div>
                            <h2><?=$arItem["PREVIEW_TEXT"]?></h2>
                        </span>
                    </a>
                </div>


            <?endif;?>

            <?endforeach;?>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-center">
            <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
                <?=$arResult["NAV_STRING"]?>
            <?endif;?>
        </div>
    </div>
</div>