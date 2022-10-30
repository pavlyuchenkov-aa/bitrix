<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="site-blocks-cover overlay" style="background-image: url(<?= $arResult["DETAIL_PICTURE"]["SRC"]; ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
                <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded"><?= GetMessage("PROPERTY_DETAILS"); ?></span>
                <h1 class="mb-2"><?= $arResult["NAME"] ?></h1>
                <p class="mb-5"><strong class="h2 text-success font-weight-bold">$<?= number_format($arResult["DISPLAY_PROPERTIES"]["price"]["VALUE"]); ?></strong></p>
            </div>
        </div>
    </div>
</div>
<div class="site-section site-section-sm">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" style="margin-top: -150px;">
                <div class="mb-5">
            

                    <div class="slide-one-item home-slider owl-carousel">
                        <? if ($arResult["DISPLAY_PROPERTIES"]["imgallery"]['FILE_VALUE']['ID']) : ?>
                            <div>
                                <img
                                    src="<?= $arResult["DISPLAY_PROPERTIES"]["imgallery"]["FILE_VALUE"]["SRC"]; ?>"
                                    alt="<?= $arResult["DISPLAY_PROPERTIES"]["imgallery"]["FILE_VALUE"]["ORIGINAL_NAME"]; ?>"
                                    class="img-fluid"
                                >
                            </div>
                        <? elseif (count($arResult["DISPLAY_PROPERTIES"]["imgallery"]["VALUE"]) > 1) : ?>
                            <? foreach ($arResult["DISPLAY_PROPERTIES"]["imgallery"]["VALUE"] as $index => $value ) : ?>
                                <div>
                                    <img
                                        src="<?= $arResult["DISPLAY_PROPERTIES"]["imgallery"]["FILE_VALUE"][$index]["SRC"]; ?>"
                                        alt="<?= $arResult["DISPLAY_PROPERTIES"]["imgallery"]["FILE_VALUE"][$index]["ORIGINAL_NAME"]; ?>"
                                        class="img-fluid">
                                </div>
                            <? endforeach; ?>
                                <? else : ?>
                                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4"><?= GetMessage("NO_IMAGES"); ?></div>
                        <? endif; ?>
                    </div>
                </div>
                <div class="bg-white">
                    <div class="row mb-5">
                    <? if(!empty($arResult["DISPLAY_PROPERTIES"]["price"]["VALUE"])): ?>
                        <div class="col-md-6">
                            <strong class="text-success h1 mb-3">$<?= number_format($arResult["DISPLAY_PROPERTIES"]["price"]["VALUE"]); ?></strong>
                        </div>
                        <? endif ?>
                        <div class="col-md-6">
                            <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                                <li>
                                    <span class="property-specs"><?= GetMessage("UPDATE_DATE"); ?></span>
                                    <span class="property-specs-number"><?= date("d.m.y", strtotime($arResult["TIMESTAMP_X"])); ?></span>
                                </li>
                                <? if (!empty($arResult["DISPLAY_PROPERTIES"]["floor_count"])) : ?>
                                    <li>
                                        <span class="property-specs"><?= GetMessage("FLOORS"); ?></span>
                                        <span class="property-specs-number"><?= $arResult["DISPLAY_PROPERTIES"]["floor_count"]["VALUE"]; ?></span>
                                    </li>
                                <? endif ?>
                                <? if(!empty($arResult["DISPLAY_PROPERTIES"]["square"])) :?>
                                    <li>
                                        <span class="property-specs"><?= GetMessage("SQUARE_UNIT"); ?></span>
                                        <span class="property-specs-number"><?= $arResult["DISPLAY_PROPERTIES"]["square"]["VALUE"]; ?></span>
                                    </li>
                                <? endif ?>

                            </ul>
                        </div>
                    </div>
                    <div class="row mb-5">
                    <? if(!empty($arResult["DISPLAY_PROPERTIES"]["toilet_count"])) :?>
                        <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text"><?= GetMessage("TOILETS"); ?></span>
                            <strong class="d-block"><?= $arResult["DISPLAY_PROPERTIES"]["toilet_count"]["VALUE"]; ?></strong>
                        </div>
                        <? endif ?>

                        <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text"><?= GetMessage("GARAGES"); ?></span>
                            <strong class="d-block">
                                <? if ($arResult["DISPLAY_PROPERTIES"]["isgarage"]["VALUE"]) : ?>
                                    <?= GetMessage("GARAGES_YES"); ?>
                                <? else : ?>
                                    <?= GetMessage("NO_GARAGES"); ?>
                                <? endif; ?>
                            </strong>
                        </div>
                    </div>
                    <h2 class="h4 text-black"><?= GetMessage("MORE_INFO"); ?></h2>
                    <p><?= $arResult["DETAIL_TEXT"]; ?></p>
                    <? if (!empty($arResult["DISPLAY_PROPERTIES"]["imgallery"])) : ?>
                    <div class="row mt-5">
                        <div class="col-12">
                            <h2 class="h4 text-black mb-3"><?= GetMessage("PROPERTY_GALLERY"); ?></h2>
                        </div> 
                      
                            <? if ($arResult["DISPLAY_PROPERTIES"]["imgallery"]['FILE_VALUE']['ID']) : ?>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <a href="<?= $arResult["DISPLAY_PROPERTIES"]["imgallery"]["FILE_VALUE"]["SRC"]; ?>" class="image-popup gal-item">
                                        <img
                                            src="<?= $arResult["DISPLAY_PROPERTIES"]["imgallery"]["FILE_VALUE"]["SRC"]; ?>"
                                            alt="<?= $arResult["DISPLAY_PROPERTIES"]["imgallery"]["FILE_VALUE"]["ORIGINAL_NAME"]; ?>"
                                            class="img-fluid"
                                        >
                                    </a>
                                </div>
                            <? elseif (count($arResult["DISPLAY_PROPERTIES"]["imgallery"]['VALUE']) > 1) : ?>
                                <? foreach ($arResult["DISPLAY_PROPERTIES"]["imgallery"]["VALUE"] as $index => $value ) : ?>
                                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                        <a href="<?= $arResult["DISPLAY_PROPERTIES"]["imgallery"]["FILE_VALUE"][$index]["SRC"]; ?>" class="image-popup gal-item">
                                            <img
                                                src="<?= $arResult["DISPLAY_PROPERTIES"]["imgallery"]["FILE_VALUE"][$index]["SRC"]; ?>"
                                                alt="<?= $arResult["DISPLAY_PROPERTIES"]["imgallery"]["FILE_VALUE"][$index]["ORIGINAL_NAME"]; ?>"
                                                class="img-fluid"
                                            >
                                        </a>
                                    </div>

                                <? endforeach; ?>
                               
                                <? endif; ?>

                    </div>
                    <? endif; ?>
                    <div class="mt-5">
                        <h2 class="h4 text-black mb-3"><?= GetMessage("EXTRA_SOURCE"); ?></h2>
                        <? if ($arResult["DISPLAY_PROPERTIES"]["extrasrc"]["FILE_VALUE"]["ID"]) : ?>
                            <div>
                                <a href="<?= $arResult["DISPLAY_PROPERTIES"]["extrasrc"]["FILE_VALUE"]["SRC"]; ?>"><?= GetMessage("EXTRA_SOURCE"); ?></a>
                            </div>
                        <? elseif ($arResult["DISPLAY_PROPERTIES"]["extrasrc"]["VALUE"] > 1) : ?>
                            <? foreach ($arResult["DISPLAY_PROPERTIES"]["extrasrc"]["VALUE"] as $index => $value) : ?>
                                <div>
                                    <a href="<?= $arResult["DISPLAY_PROPERTIES"]["extrasrc"]["FILE_VALUE"][$index]["SRC"]; ?>"><?= GetMessage("IMAG"); ?></a>
                                </div>
                            <? endforeach; ?>
                            <? else : ?>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4"><?= GetMessage("NO_EXTRA_SOURCE"); ?></div>
                        <? endif; ?>

                    </div>
                    <? if (!empty($arResult["DISPLAY_PROPERTIES"]["extlinks"])) : ?>

                    <div class="mt-5">
                        <h2 class="h4 text-black mb-3"><?= GetMessage("EXTRA_LINKS"); ?></h2>
                        <? foreach ($arResult["DISPLAY_PROPERTIES"]["extlinks"]["VALUE"] as $index => $value) : ?>
                            <div>
                                <a href="<?= $arResult["DISPLAY_PROPERTIES"]["extlinks"]["VALUE"][$index]; ?>"><?= GetMessage("LINKK"); ?></a>
                            </div>
                        <? endforeach; ?>
                    </div>
                    <? endif; ?>

                </div>
            </div>
            <div class="col-lg-4 pl-md-5">
                <div class="bg-white widget border rounded">
                    <h3 class="h4 text-black widget-title mb-3"><?= GetMessage("CONTACT_AGENT"); ?></h3>
                    <form action="" class="form-contact-agent">
                        <div class="form-group">
                            <label for="name"><?= GetMessage("NAME"); ?></label>
                            <input type="text" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email"><?= GetMessage("EMAIL"); ?></label>
                            <input type="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone"><?= GetMessage("PHONE"); ?></label>
                            <input type="text" id="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" id="phone" class="btn btn-primary" value="<?= GetMessage("SEND_MESSAGE"); ?>">
                        </div>
                    </form>
                </div>
                <div class="bg-white widget border rounded">
                    <h3 class="h4 text-black widget-title mb-3"><?= GetMessage("PARAGRAPH"); ?></h3>
                    <p><?= $arResult["PREVIEW_TEXT"]; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
