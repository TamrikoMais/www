<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle(GetMessage("DEMO_IBLOCK_CONTENT_ARTICLES_TITLE"));
?><?$APPLICATION->IncludeComponent("bitrix:news", ".default", Array(
	"IBLOCK_TYPE" => "articles",
	"IBLOCK_ID" => "#IBLOCK.ID(XML_ID=content-articles)#",
	"NEWS_COUNT" => "10",
	"USE_SEARCH" => "Y",
	"USE_RSS" => "Y",
	"NUM_NEWS" => "20",
	"NUM_DAYS" => "360",
	"YANDEX" => "N",
	"USE_RATING" => "Y",
	"MAX_VOTE" => "5",
	"VOTE_NAMES" => array(
		0 => "1",
		1 => "2",
		2 => "3",
		3 => "4",
		4 => "5",
		5 => "",
	),
	"USE_CATEGORIES" => "Y",
	"CATEGORY_IBLOCK" => array(
		0 => "#IBLOCK.ID(XML_ID=content-news)#",
		1 => "#IBLOCK.ID(XML_ID=content-articles)#",
	),
	"CATEGORY_CODE" => "THEMES",
	"CATEGORY_ITEMS_COUNT" => "5",
	"CATEGORY_THEME_#IBLOCK.ID(XML_ID=content-news)#" => "list",
	"CATEGORY_THEME_#IBLOCK.ID(XML_ID=content-articles)#" => "list",
	"USE_REVIEW" => "#MODULE.INSTALLED(ID=forum)#",
	"MESSAGES_PER_PAGE" => "25",
	"USE_CAPTCHA" => "Y",
	"PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
	"FORUM_ID" => "#FORUM.ID(NAME=content-articles)#",
	"URL_TEMPLATES_READ" => "/communication/forum/forum#FORUM_ID#/topic#TOPIC_ID#/",
	"SHOW_LINK_TO_FORUM" => "N",
	"POST_FIRST_MESSAGE" => "N",
	"USE_FILTER" => "N",
	"SORT_BY1" => "ACTIVE_FROM",
	"SORT_ORDER1" => "DESC",
	"SORT_BY2" => "SORT",
	"SORT_ORDER2" => "ASC",
	"CHECK_DATES" => "Y",
	"SEF_MODE" => "Y",
	"SEF_FOLDER" => "/content/articles/",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_SHADOW" => "Y",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600",
	"CACHE_FILTER" => "N",
	"DISPLAY_PANEL" => "N",
	"SET_TITLE" => "Y",
	"SET_STATUS_404" => "Y",
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
	"ADD_SECTIONS_CHAIN" => "Y",
	"USE_PERMISSIONS" => "N",
	"PREVIEW_TRUNCATE_LEN" => "0",
	"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
	"LIST_FIELD_CODE" => array(
		0 => "",
		1 => "",
	),
	"LIST_PROPERTY_CODE" => array(
		0 => "",
		1 => "",
	),
	"HIDE_LINK_WHEN_NO_DETAIL" => "N",
	"DISPLAY_NAME" => "N",
	"META_KEYWORDS" => "KEYWORDS",
	"META_DESCRIPTION" => "-",
	"BROWSER_TITLE" => "BROWSER_TITLE",
	"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
	"DETAIL_FIELD_CODE" => array(
		0 => "SHOW_COUNTER",
		1 => "",
	),
	"DETAIL_PROPERTY_CODE" => array(
		0 => "AUTHOR",
		1 => "rating",
		2 => "",
	),
	"DETAIL_DISPLAY_TOP_PAGER" => "N",
	"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
	"DETAIL_PAGER_TITLE" => GetMessage("DEMO_IBLOCK_CONTENT_ARTICLES_DETAIL_PAGER_TITLE"),
	"DETAIL_PAGER_TEMPLATE" => "",
	"DETAIL_PAGER_SHOW_ALL" => "N",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "Y",
	"PAGER_TITLE" => GetMessage("DEMO_IBLOCK_CONTENT_ARTICLES_PAGER_TITLE"),
	"PAGER_SHOW_ALWAYS" => "N",
	"PAGER_TEMPLATE" => "",
	"PAGER_DESC_NUMBERING" => "Y",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	"PAGER_SHOW_ALL" => "N",
	"DISPLAY_DATE" => "Y",
	"DISPLAY_PICTURE" => "Y",
	"DISPLAY_PREVIEW_TEXT" => "Y",
	"AJAX_OPTION_ADDITIONAL" => "",
	"SEF_URL_TEMPLATES" => array(
		"news" => "",
		"section" => "",
		"detail" => "#ELEMENT_ID#/",
		"search" => "search/",
		"rss" => "rss/",
		"rss_section" => "#SECTION_ID#/rss/",
	)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>