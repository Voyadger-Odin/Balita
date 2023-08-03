<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="navbar-nav mx-auto">

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</div></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?=$arItem["LINK"]?>" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$arItem["TEXT"]?></a>
            <div class="dropdown-menu" aria-labelledby="dropdown05">

	<?else:?>

        <?if ($arItem["DEPTH_LEVEL"] == 1):?>

            <? if ($arItem['PERMISSION'] != 'D'): ?>
            <li class="nav-item">
                <a class="nav-link <?if ($arItem["SELECTED"]):?>active<?endif?>" href="<?=$arItem["LINK"]?>">
                    <?=$arItem["TEXT"]?>
                </a>
            </li>
            <?endif;?>
        <?else:?>
        <?
            //var_dump($arItem);
            ?>
            <a class="dropdown-item" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
        <?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</div></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
<?endif?>