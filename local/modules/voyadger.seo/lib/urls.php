<?php

use \Bitrix\Main\Entity;
use \Bitrix\Main\Type;

class urls extends Entity\DataManager
{
    public static function getTableName(){
        return 'voyadger_seo_urls';
    }

    public static function getConnectionName(){
        return 'default';
    }

    public static function getMap(){
        return array(
            // ID
            new Entity\IntegerField('ID', array(
                    'primary' => true,
                    'autocomplete' => true
                )
            ),
        );
    }

}