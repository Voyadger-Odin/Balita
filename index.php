<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Colorlib Balita &mdash; Minimal Blog Template");
?>    <section class="site-section pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="owl-carousel owl-theme home-slider">
                        <div>
                            <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/images/img_1.jpg'); ">
                                <div class="text half-to-full">
                                    <div class="post-meta">
                                        <span class="category">Lifestyle</span>
                                        <span class="mr-2">March 15, 2018 </span> &bullet;
                                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                    </div>
                                    <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/images/img_2.jpg'); ">
                                <div class="text half-to-full">
                                    <div class="post-meta">
                                        <span class="category">Lifestyle</span>
                                        <span class="mr-2">March 15, 2018 </span> &bullet;
                                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                    </div>
                                    <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/images/img_3.jpg'); ">
                                <div class="text half-to-full">
                                    <div class="post-meta">
                                        <span class="category">Lifestyle</span>
                                        <span class="mr-2">March 15, 2018 </span> &bullet;
                                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                    </div>
                                    <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </section>
    <!-- END section -->


    <section class="site-section py-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mb-4"><?$APPLICATION->ShowProperty("Category")?> Category</h2>
                </div>
            </div>
            <div class="row blog-entries">
                <?$APPLICATION->IncludeComponent(
	"custom:posts.list", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "posts",
		"IBLOCK_ID" => "6",
		"NEWS_COUNT" => "2",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
			1 => "PREVIEW_PICTURE",
			2 => "IBLOCK_TYPE_ID",
			3 => "IBLOCK_ID",
			4 => "IBLOCK_CODE",
			5 => "IBLOCK_NAME",
			6 => "IBLOCK_EXTERNAL_ID",
			7 => "DATE_CREATE",
			8 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "f j, Y",
		"SET_TITLE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "travel",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => "posts",
		"DISPLAY_TOP_PAGER" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?>

                <!-- END main-content -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>