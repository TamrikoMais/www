<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?$APPLICATION->ShowTitle();?></title>
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />

		<?$APPLICATION->ShowHead();
		
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/bootstrap.min.css');
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/normalize.min.css');
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/font-awesome.min.css');
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/animate.css');
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/templatemo_misc.css');
		$APPLICATION->SetAdditionalCSS('http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
		
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/bitrix/templates/empty/js/vendor/modernizr-2.6.2.min.js");
		?>
	</head>
	<body>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
	
						
