<?php
//Smartyの読み込み
require_once('admin/Smarty/libs/Smarty.class.php');
//Smartyを構築
$smarty = new Smarty();
//Smartyの各ディレクトリを設定
$smarty->template_dir = 'admin/Smarty/templates/';
$smarty->compile_dir = 'admin/Smarty/templates_c/';
$smarty->config_dir = 'admin/Smarty/config/';
$smarty->cache_dir = 'admin/Smarty/cache/';
?>