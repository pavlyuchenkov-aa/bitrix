<? if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
<?php IncludeTemplateLangFile(__FILE__); ?>
<!DOCTYPE html>

  <head>
    <?
    $APPLICATION->SetAdditionalCSS("https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH ."/fonts/icomoon/style.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH ."/css/bootstrap.min.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH ."/css/magnific-popup.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH ."/css/jquery-ui.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH ."/css/owl.carousel.min.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH ."/css/owl.theme.default.min.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH ."/css/bootstrap-datepicker.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH ."/css/mediaelementplayer.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH ."/css/animate.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH ."/fonts/flaticon/font/flaticon.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH ."/css/fl-bigmug-line.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH ."/css/aos.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH ."/css/style.css");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH .'/js/jquery-3.3.1.min.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH .'/js/jquery-migrate-3.0.1.min.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery-ui.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/popper.min.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/bootstrap.min.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/owl.carousel.min.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/mediaelement-and-player.min.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.stellar.min.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.countdown.min.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.magnific-popup.min.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/bootstrap-datepicker.min.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/aos.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/main.js');
    ?>

    <html lang="<?= LANGUAGE_ID; ?>">
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  </head>

  <body>
    <?$APPLICATION->ShowPanel();?>
    <div class="site-loader"></div>
    
    <div class="site-wrap">

        <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->
        
        <div class="border-bottom bg-white top-bar">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-6 col-md-6">
                <p class="mb-0">
                <a href="#" class="mr-3"><span class="text-black fl-bigmug-line-phone351"></span> 
                    <span class="d-none d-md-inline-block ml-2">
                        <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/phone.php"
                                )
                        );
                        ?>
                    </span>
                </a>
                <a href="#"><span class="text-black fl-bigmug-line-email64"></span> 
                    <span class="d-none d-md-inline-block ml-2">
                        <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/email.php"
                                    )
                            );
                        ?>
                    </span>
                </a>
                </p>  
            </div>
            <div class="col-6 col-md-6 text-right">
                        <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/social.php"
                                    )
                            );
                        ?>
            </div>
            </div>
        </div>
        
        </div>
        <div class="site-navbar">
            <div class="container py-1">
            <div class="row align-items-center">
                <div class="col-8 col-md-8 col-lg-4">
                <h1 class=""><a href="index.html" class="h5 text-uppercase text-black">
                    <strong>
                        <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/logo.php"
                                    )
                            );
                        ?>
                    <span class="text-danger">.</span>
                    </strong></a></h1>
                </div>
                <div class="col-4 col-md-4 col-lg-8">
                    <nav class="site-navigation text-right text-md-right" role="navigation">

                        <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                        <li class="active">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="has-children">
                            <a href="properties.html">Properties</a>
                            <ul class="dropdown">
                            <li><a href="#">Buy</a></li>
                            <li><a href="#">Rent</a></li>
                            <li><a href="#">Lease</a></li>
                            <li class="has-children">
                                <a href="#">Menu</a>
                                <ul class="dropdown">
                                <li><a href="#">Menu One</a></li>
                                <li><a href="#">Menu Two</a></li>
                                <li><a href="#">Menu Three</a></li>
                                </ul>
                            </li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>


            </div>
            </div>
        </div>
        </div>


