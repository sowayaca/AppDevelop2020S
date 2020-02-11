<?php

// smartyの設定ファイル読み込み
require_once("./libs/Smarty.class.php");


$smarty = new Smarty();

//pathの変更をする場合ここを変更する。
$smarty->template_dir = "./templates/";
$smarty->compile_dir = "./templates_c/";

$name = 'ヤマグチ';

$obj = new StdClass();
$obj->hello = 'こんにちは！';

$smarty->assign('name', $name);
$smarty->assign('obj', $obj);
$smarty->display('index.tpl');