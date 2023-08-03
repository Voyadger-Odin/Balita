<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>


<!doctype html>
<html lang="en">
<head>
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700" rel="stylesheet">

    <?

    /* CSS */
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/bootstrap.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/animate.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/owl.carousel.min.css');

    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/fonts/ionicons/css/ionicons.min.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/fonts/fontawesome/css/font-awesome.min.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/fonts/flaticon/font/flaticon.css');

    /* Theme Style */
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/style.css');

    $APPLICATION->ShowHead();
    ?>
</head>
<body>
<?$APPLICATION->ShowPanel()?>

<?if($USER->IsAdmin()):?><?endif?>

<header role="banner">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-9 social">
                    <a href="#"><span class="fa fa-twitter"></span></a>
                    <a href="#"><span class="fa fa-facebook"></span></a>
                    <a href="#"><span class="fa fa-instagram"></span></a>
                    <a href="#"><span class="fa fa-youtube-play"></span></a>
                    <a href="#"><span class="fa fa-vimeo"></span></a>
                    <a href="#"><span class="fa fa-snapchat"></span></a>
                </div>
                <div class="col-3 search-icon">
                    <a href="#"><span class="fa fa-search"></span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container logo-wrap">
        <div class="row pt-5">
            <div class="col-12 text-center">
                <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
                <h1 class="site-logo"><a href="/">Balita</a></h1>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-md  navbar-light bg-light">
        <div class="container">


            <div class="collapse navbar-collapse" id="navbarMenu">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "topmenu",
                    array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "subtop",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "2",
                        "MENU_CACHE_GET_VARS" => array(
                        ),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "Y",
                        "COMPONENT_TEMPLATE" => "topmenu"
                    ),
                    false
                );?>

            </div>
        </div
    </nav>
</header>
