<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? $this->setFrameMode(true); ?>

<div class="row mb-5 justify-content-center">
    <div class="col-md-7">
        <div class="site-section-title text-center">
            <h2><?= GetMessage("TITLE_AGENT"); ?></h2>
        </div>
    </div>
</div>
<div class="row block-13">
    <div class="nonloop-block-13 owl-carousel">
    <? foreach($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="slide-item" id="id="<?= $this->GetEditAreaId($arItem['ID']); ?>"">
            <div class="team-member text-center">
                <img alt="<?= $arItem["PREVIEW_PICTURE"]["ORIGINAL_NAME"]; ?>" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"]; ?>" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                <div class="text p-3">
                    <h2 class="mb-2 font-weight-light text-black h4"><?= $arItem["NAME"]; ?></h2>
                    <span class="d-block mb-3 text-white-opacity-05"><?= $arItem["PROPERTY_QUALIFICATION_VALUE"];?></span>
                    <span class="d-block mb-3 text-white-opacity-05"><?= $arItem["PREVIEW_TEXT"]; ?></span>
                    <p class="mb-5"><?= $arItem["DETAIL_TEXT"]; ?></p>
                    <p><a href="<?= $arItem["PROPERTY_LINK1_VALUE"];?>" class="text-black p-2"><span class="icon-<?= $arItem["PROPERTY_ICON1_VALUE"];?>"></span></a>
                        <a href="<?= $arItem["PROPERTY_LINK2_VALUE"];?>" class="text-black p-2"><span class="icon-<?= $arItem["PROPERTY_ICON2_VALUE"];?>"></span></a>
                        <a href="<?= $arItem["PROPERTY_LINK3_VALUE"];?>" class="text-black p-2"><span class="icon-<?= $arItem["PROPERTY_ICON3_VALUE"];?>"></span></a>
                    </p>
                </div>
            </div>
        </div>
    <? endforeach; ?>
    </div>
</div>


       
