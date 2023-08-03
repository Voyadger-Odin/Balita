<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>


<div class="col-md-12 col-lg-4 sidebar">
    <div class="sidebar-box search-form-wrap">
        <form action="#" class="search-form">
            <div class="form-group">
                <span class="icon fa fa-search"></span>
                <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
            </div>
        </form>
    </div>
    <!-- END sidebar-box -->
    <div class="sidebar-box">
        <div class="bio text-center">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/person_1.jpg" alt="Image Placeholder" class="img-fluid">
            <div class="bio-body">
                <h2>Meagan Smith</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.</p>
                <p><a href="#" class="btn btn-primary btn-sm">Read my bio</a></p>
                <p class="social">
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                </p>
            </div>
        </div>
    </div>
    <!-- END sidebar-box -->
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        ".default",
        array(
            "COMPONENT_TEMPLATE" => ".default",
            "AREA_FILE_SHOW" => "file",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/include/popular_posts.php"
        ),
        false
    );?>
    <!-- END sidebar-box -->

    <div class="sidebar-box">
        <h3 class="heading">Categories</h3>
        <ul class="categories">
            <li><a href="#">Courses <span>(12)</span></a></li>
            <li><a href="#">News <span>(22)</span></a></li>
            <li><a href="#">Design <span>(37)</span></a></li>
            <li><a href="#">HTML <span>(42)</span></a></li>
            <li><a href="#">Web Development <span>(14)</span></a></li>
        </ul>
    </div>
    <!-- END sidebar-box -->

</div>
<!-- END sidebar -->

</div>
</div>
</section>


<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </div>
    </div>
</footer>
<!-- END footer -->

<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-3.2.1.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-migrate-3.0.0.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/popper.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/owl.carousel.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.waypoints.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.stellar.min.js"></script>


<script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>
</body>
</html>