<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Loader;
use Bitrix\Main\Application;
use Bitrix\Main\Entity\Base;

Loc::loadMessages(__FILE__);
Class voyadger_seo extends CModule
{
    public $MODULE_ID = 'voyadger.seo'; // NOTE using "var" for bitrix rules

    public $MODULE_VERSION;

    public $MODULE_VERSION_DATE;

    public $MODULE_NAME;

    public $MODULE_DESCRIPTION;

    public $MODULE_GROUP_RIGHTS;

    public $PARTNER_NAME;

    public $PARTNER_URI;

    public function __construct()
    {
        $this->MODULE_ID = 'voyadger.seo'; // NOTE for showing module in /bitrix/admin/partner_modules.php?lang=ru

        $arModuleVersion = [];
        include __DIR__ . '/version.php';
        if (!empty($arModuleVersion['VERSION']))
        {
            $this->MODULE_VERSION = $arModuleVersion['VERSION'];
            $this->MODULE_VERSION_DATE = $arModuleVersion['VERSION_DATE'];
        }

        $this->MODULE_NAME = Loc::getMessage('VOYADGER_SEO_REDIRECT_MODULE_NAME');
        $this->MODULE_DESCRIPTION = Loc::getMessage('VOYADGER_SEO_REDIRECT_MODULE_DESCRIPTION');
        $this->MODULE_GROUP_RIGHTS = 'Y';

        $this->PARTNER_NAME = 'Voyadger';
        $this->PARTNER_URI = 'https://t.me/rosetomorrow';
    }

    public function GetPath($notDocumentRoot=false){
        if ($notDocumentRoot){
            return str_ireplace(Application::getDocumentRoot(), '', dirname(__DIR__));
        }
        return dirname(__DIR__);
    }

    public function isVersionD7(){
        return CheckVersion(\Bitrix\Main\ModuleManager::getVersion('main'), '14.00.00');
    }

    // DB

    protected function getDB(){
        return array('voyadger_seo_urls'=>'URLs');
    }

    public function InstallDB()
    {

        Loader::includeModule($this->MODULE_ID);
        if (!Application::getConnection(\Voyadger\Seo\urls::getConnectionName())->isTableExist(
            Base::getInstance('\Voyadger\Seo\urls')->getDBTableName()
        )){
            Base::getInstance('\Voyadger\Seo\urls')->createDBTableName();
        }

        /*
        global $DB, $DBType, $APPLICATION;
        $this->errors = false;

        $arDB = $this->getDB();

        foreach($arDB as $name => $path) {
            if (!$DB->Query("SELECT 'x' FROM " . $name, true)) {
                $this->errors = $DB->RunSQLBatch($this->getPath() . "/install/db/mysql/install" . $path . ".sql");
                if ($this->errors) {
                    $APPLICATION->ThrowException(implode("", $this->errors));
                    return false;
                }
            }
        }

        return true;
        */
    }

    function UnInstallDB($preserveOrders = false){
        global $DB, $DBType, $APPLICATION;
        $this->errors = false;

        $arDB = $this->getDB();

        foreach($arDB as $name => $path){
            if($name != 'voyadger_seo_urls' || !$preserveOrders){
                $this->errors = $DB->RunSQLBatch($this->getPath() . "/install/db/mysql/uninstall".$path.".sql");
                if(!empty($this->errors)){
                    $APPLICATION->ThrowException(implode("", $this->errors));
                    return false;
                }
            }
        }

        return true;
    }

    public function DoInstall()
    {

        global $APPLICATION;
        if (version_compare(PHP_VERSION, '8.0.0', '<'))
        {
            $APPLICATION->ThrowException(Loc::getMessage('VOYADGER_SEO_REQUIREMENTS_PHP_VERSION'));
            return false;
        }

        if (!$this->isVersionD7())
        {
            $APPLICATION->ThrowException(Loc::getMessage('VOYADGER_SEO_REQUIREMENTS_D7'));
            return false;
        }

        $not_errors = true;

        $not_errors = $this->InstallDB();

        if (!$not_errors){
            return $not_errors;
        }

        RegisterModule($this->MODULE_ID);
        RegisterModuleDependences('main', 'OnPageStart', $this->MODULE_ID);

        $APPLICATION->IncludeAdminFile(GetMessage("VOYADGER_SEO_INSTALL"), $this->getPath() . '/install/step1.php');
    }

    public function DoUninstall()
    {
        global $APPLICATION;


        if ($_REQUEST['step'] < 2){
            $APPLICATION->IncludeAdminFile(GetMessage("VOYADGER_SEO_DEL"), $this->GetPath() . '/install/unstep1.php');
        }
        elseif ($_REQUEST['step'] == 2){
            $this->UninstallFiles();

            if ($_REQUEST['savedata'] != 'Y'){
                $this->UninstallDB();
            }

            UnRegisterModuleDependences('main', 'OnPageStart', $this->MODULE_ID);
            UnRegisterModule($this->MODULE_ID);

            $APPLICATION->IncludeAdminFile(GetMessage("VOYADGER_SEO_DEL"), $this->GetPath() . '/install/unstep2.php');
        }
    }
}