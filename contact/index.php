<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("contact");
?>

    <section class="site-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-6">
                    <h1>Contact</h1>
                </div>
            </div>
            <div class="row blog-entries">
                <div class="col-md-12 col-lg-8 main-content">

                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.feedback",
                        "contact",
                        array(
                            "COMPONENT_TEMPLATE" => "contact",
                            "USE_CAPTCHA" => "Y",
                            "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                            "EMAIL_TO" => "voyadgerodin@yandex.ru",
                            "REQUIRED_FIELDS" => array(
                                0 => "NAME",
                                1 => "EMAIL",
                                2 => "MESSAGE",
                            ),
                            "EVENT_MESSAGE_ID" => array(
                            )
                        ),
                        false
                    );?>
                </div>

                <!-- END main-content -->



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>