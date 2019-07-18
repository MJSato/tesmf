<?php
/*!
@file login.php
@brief  メインメニュー(ユーザ画面)
@copyright Copyright (c) 2017 Yamanoi Yasushi.
*/

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");

$ERR_STR = "";
$user_id = "";
$user_name = "";

session_start();
if(isset($_SESSION['tmY2019_adm']['err']) && $_SESSION['tmY2019_adm']['err'] != ""){
    $ERR_STR = $_SESSION['tmY2019_adm']['err'];
}

session_unset();
session_destroy();

if(isset($_POST['login_id']) && isset($_POST['login_pw'])){
    if(chk_user_login(
        strip_tags($_POST['login_id']),
        strip_tags($_POST['login_pw']))){
        session_start();
        $_SESSION['tmY2019_adm']['login_id'] = strip_tags($_POST['login_id']);
        $_SESSION['tmY2019_adm']['user_id'] = $user_id;
        $_SESSION['tmY2019_adm']['user_name'] = $user_name;
        cutil::redirect_exit("frontindex.php");
    }
}

function chk_user_login($login_id,$login_pw){
    global $ERR_STR;
    global $user_id;
    global $user_name;
    $user = new cUSERS();
    $row = $user->get_tgt(false,$login_id);
    if($row === false || !isset($row['user_id'])){
        $ERR_STR .= "ログイン名が不定です。\n";
        return false;
    }
    //暗号化によるパスワード認証
    if(!cutil::pw_check($login_pw,$row['login_pw'])){
        $ERR_STR .= "パスワードが違っています。\n";
        return false;
    }
    $user_id = $row['user_id'];
    $user_name = $row['user_name'];
    return true;
}

if(isset($_POST['login_id'])){
$test =  (string)$_POST['login_id'];
echo $test;
}


//Smartyを使用した表示(テンプレートファイルの指定)
$smarty->display('admin/login.tmpl');


?>
