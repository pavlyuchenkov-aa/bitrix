<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новости");
?><?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	".default",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "1814400",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"NAME",1=>"price",2=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "estate_ads",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MEDIA_PROPERTY" => "",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"price",1=>"",),
		"SEARCH_PAGE" => "/search/",
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SLIDER_PROPERTY" => "",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_RATING" => "N",
		"USE_SHARE" => "N"
	)
);?><br>
<div class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/left_info.php"
	)
);?>
			</div>
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/center_info.php"
	)
);?>
			</div>
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/right_info.php"
	)
);?>
			</div>
		</div>
	</div>
</div>
<div class="site-section site-section-sm bg-light">
	<div class="container">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	".default",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "1814400",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_PICTURE",2=>"price",3=>"square",4=>"toilet_count",5=>"isgarage",6=>"floor_count",7=>"",),
		"IBLOCKS" => array(0=>"7",),
		"IBLOCK_TYPE" => "estate_ads",
		"NEWS_COUNT" => "9",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?><br>
	</div>
</div>
<div class="site-section">
	<div class="container">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "1814400",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array("NAME",""),
		"IBLOCKS" => array("8"),
		"IBLOCK_TYPE" => "services",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ID",
		"SORT_BY2" => "",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => ""
	)
);?><br>
	</div>
</div>
<div class="site-section bg-light">
	<div class="container">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "1814400",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array("NAME","PREVIEW_TEXT","PREVIEW_PICTURE",""),
		"IBLOCKS" => array("1"),
		"IBLOCK_TYPE" => "news",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>
	</div>
</div>
<div class="site-section">
	<div class="container">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "1814400",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array("ID","CODE","NAME","PREVIEW_TEXT","PREVIEW_PICTURE","DETAIL_TEXT","USER_NAME","agenticon_1","agenticon_2","agenticon_3","agentlink_1","agentlink_2","agentlink_3"),
		"IBLOCKS" => array("9"),
		"IBLOCK_TYPE" => "agents",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => ""
	)
);?>
	</div>
</div>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>