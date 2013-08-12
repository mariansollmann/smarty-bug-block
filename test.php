<?php

require_once 'vendor/autoload.php';

function foo($params, $content, $template, &$repeat) {
	if ($repeat) {
		return '<foo>' . PHP_EOL;
	} else {
		return var_export($params, true) . PHP_EOL . var_export($content, true) . PHP_EOL . '</foo>';
	}
}

$smarty = new Smarty();
$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('tmp/');
$smarty->caching = false;
$smarty->registerPlugin('block', 'foo', 'foo');

$template = $smarty->createTemplate('child.tpl');
echo $template->fetch();
