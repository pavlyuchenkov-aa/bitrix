<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
global $APPLICATION;
if (empty($arResult)) {
    return "";
}

$itemSize = count($arResult);
$resultLayout = '
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(' . SITE_TEMPLATE_PATH . '/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-10">
                    <h1 class="mb-2">' . $APPLICATION->GetTitle() . '</h1>
                        <div>
';

for ($index = 0; $index < $itemSize; $index++) {
    
    $pageTitle = htmlspecialcharsex($arResult[$index]["TITLE"]);

    if ($arResult[$index]["LINK"] == $arResult[$index - 1]["LINK"]) {
        continue;
    }

    if ($arResult[$index]["LINK"] <> "" && $index != $itemSize - 1) {
        $resultLayout .= '
            
            <a href="' . $arResult[$index]["LINK"] . '">' . $pageTitle . '</a>
            <span class="mx-2 text-white">&bullet;</span>
        ';
    } else {
        $resultLayout .= '<strong class="text-white">' . $pageTitle . '</strong>';
    }
    
}

$resultLayout .= '</div></div></div></div></div>';
return $resultLayout;
