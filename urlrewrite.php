<?php
$arUrlRewrite=array (
    4 => array (
        'CONDITION' => '#^/category/([a-z-0-9_]+)([?/]*)([a-zA-Z-0-9_=]*)#',
        'RULE' => 'SECTION_CODE=$1',
        'ID' => '',
        'PATH' => '/category/index.php',
        'SORT' => 100,
    ),
    3 => array (
        'CONDITION' => '#^/post/([a-z-0-9_]+)([?/]*)([a-zA-Z-0-9_=]*)#',
        'RULE' => 'ELEMENT_CODE=$1',
        'ID' => '',
        'PATH' => '/index.php',
        'SORT' => 100,
    ),
    0 => array (
        'CONDITION' => '#^/services/#',
        'RULE' => '',
        'ID' => 'bitrix:catalog',
        'PATH' => '/services/index.php',
        'SORT' => 100,
    ),
    1 => array (
        'CONDITION' => '#^/products/#',
        'RULE' => '',
        'ID' => 'bitrix:catalog',
        'PATH' => '/products/index.php',
        'SORT' => 100,
    ),
    2 => array (
        'CONDITION' => '#^/news/#',
        'RULE' => '',
        'ID' => 'bitrix:news',
        'PATH' => '/news/index.php',
        'SORT' => 100,
    ),
);
