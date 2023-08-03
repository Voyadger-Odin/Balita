<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if($arResult["OK_MESSAGE"] <> '')
{
	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>

<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
    <?=bitrix_sessid_post()?>
    <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
    <div class="row">
        <div class="col-md-4 form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="user_name" class="form-control " value="<?=$arResult["AUTHOR_NAME"]?>">
        </div>
        <div class="col-md-4 form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="user_email" class="form-control " value="<?=$arResult["AUTHOR_EMAIL"]?>">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 form-group">
            <label for="message">Write Message</label>
            <textarea name="message" id="message" class="form-control " cols="30" rows="8">
                <?=$arResult["MESSAGE"]?>
            </textarea>
        </div>
    </div>

    <?if($arParams["USE_CAPTCHA"] == "Y"):?>
        <div class="mf-captcha">
            <div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
            <input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
            <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
            <div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
            <input type="text" name="captcha_word" size="30" maxlength="50" value="">
        </div>
    <br>
    <?endif;?>

    <div class="row">
        <div class="col-md-6 form-group">
            <input type="submit" name="submit" value="Send Message" class="btn btn-primary">
        </div>
    </div>
</form>