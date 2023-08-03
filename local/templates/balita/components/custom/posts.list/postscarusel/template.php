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


<div class="owl-carousel owl-theme home-slider">

    <?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>

    <?
        $res = CIBlockSection::GetByID($arItem["IBLOCK_SECTION_ID"]);
        if($ar_res = $res->GetNext()):
    ?>

        <div>
            <a id="<?=$this->GetEditAreaId($arItem['ID']);?>"
               href="<?=$arItem["DETAIL_PAGE_URL"]?>"
               class="a-block d-flex align-items-center height-lg"
               style="background-image: url('<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>'); "
            >
                <div class="text half-to-full">
                    <div class="post-meta">
                        <span class="category"><?=$ar_res['NAME']?></span>
                        <span class="mr-2"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h3><?=$arItem["NAME"]?></h3>
                    <p><?=$arItem["PREVIEW_TEXT"]?></p>
                </div>
            </a>
        </div>


    <?endif;?>

    <?endforeach;?>
</div>