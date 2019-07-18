<?php

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");
//以下はセッション管理用のインクルード
require_once($CMS_COMMON_INCLUDE_DIR . "auth_adm.php");


$admin_master_id = 0;
$err_array = array();
$err_flag = 0;


if(isset($_GET['aid']) 
//cutilクラスのメンバ関数をスタティック呼出
	&& cutil::is_number($_GET['aid'])
	&& $_GET['aid'] > 0){
	$admin_master_id = $_GET['aid'];
}
//$_POST優先
if(isset($_POST['user_id']) 
//cutilクラスのメンバ関数をスタティック呼出
	&& cutil::is_number($_POST['user_id'])
	&& $_POST['user_id'] > 0){
	$admin_master_id = $_POST['user_id'];
}

//管理者クラスを構築
$admin_master_obj = new cUSERS();
//配列に管理者を$_POSTに取り出す
//すでにPOSTされていたら、DBからは取り出さない

if(isset($_POST['func'])){
	switch($_POST['func']){
		case 'set':
		    if(!paramchk()){
		        $_POST['func'] = 'edit';
		        $err_flag = 1;
		    }
		    else{
		        regist();
		        //regist()内でリダイレクトするので
		        //ここまで実行されればリダイレクト失敗
		        $_POST['func'] = 'edit';
		        //システムに問題のあるエラー
		        $err_flag = 2;
		    }
		case 'conf':
			if(!paramchk()){
				$_POST['func'] = 'edit';
				$err_flag = 1;
			}
		break;
		case 'edit':
			//戻るボタン。
		break;
		default:
			//通常はありえない
			echo '原因不明のエラーです。';
			exit;
		break;
	}
}
else{
    if($admin_master_id > 0){
		if(($_POST = $admin_master_obj->get_tgt_id(false,$admin_master_id)) === false){
			$admin_master_id = 0;
			$_POST['func'] = 'new';
		}
		else{
			$_POST['enc_password_chk'] = $_POST['enc_password'];
			$_POST['func'] = 'edit';
		}
    }
    else{
		//新規の入力フォーム
		$_POST['func'] = 'new';
    }
}

//▲▲▲▲▲▲実行ブロック▲▲▲▲▲▲
//▼▼▼▼▼▼関数ブロック▼▼▼▼▼▼

//--------------------------------------------------------------------------------------
/*!
@brief  エラー存在のアサイン
@return なし
*/
//--------------------------------------------------------------------------------------
function assign_err_flag(){
	//$smartyをグローバル宣言（必須）
	global $smarty;
	global $err_flag;
	$str = '';
	switch($err_flag){
		case 1:
		$str =<<<END_BLOCK

入力エラーがあります。各項目のエラーを確認してください。
END_BLOCK;
		break;
		case 2:
		$str =<<<END_BLOCK

更新に失敗しました。サポートを確認下さい。
END_BLOCK;
		break;
	}
	$smarty->assign('err_flag',$str);
}

//--------------------------------------------------------------------------------------
/*!
@brief  パラメータのチェック
@return エラーの場合はfalseを返す
*/
//--------------------------------------------------------------------------------------
function paramchk(){
	global $err_array;
	global $admin_master_id;
	$retflg = true;
////////////////////////////////////////////////////////////
	if(ccontentsutil::chkset_err_field($err_array,'login_id','ログインID','isset_nl')){
		$retflg = false;
	}
////////////////////////////////////////////////////////////
	if(ccontentsutil::chkset_err_field($err_array,'admin_login','ログインID','isset_pass')){
		$retflg = false;
	}
////////////////////////////////////////////////////////////
	if(ccontentsutil::chkset_err_field($err_array,'enc_password','パスワード','isset_pass')){
		$retflg = false;
	}
	if(ccontentsutil::chkset_err_field($err_array,'enc_password_chk','パスワード確認','isset_pass')){
		$retflg = false;
	}
	else if($_POST['enc_password'] != $_POST['enc_password_chk']){
		$err_array['enc_password_chk'] = "「パスワード確認」が「パスワード」と違っています。";
		$retflg = false;
	}
	return $retflg;
}

//--------------------------------------------------------------------------------------
/*!
@brief  管理者データの追加／更新。保存後自分自身を再読み込みする。
@return なし
*/
//--------------------------------------------------------------------------------------
function regist(){
    global $admin_master_id;
    //パスワードが変更さえているかを確認する
    if($admin_master_id > 0){
        $obj = new cUSERS();
        $arr = $obj->get_tgt_id(false,$admin_master_id);
        if($arr['enc_password'] != $_POST['enc_password']){
            //変更された
            $_POST['enc_password'] = cutil::pw_encode($_POST['enc_password']);
        }
    }
    else{
        //新規
        $_POST['enc_password'] = cutil::pw_encode($_POST['enc_password']);
    }
    $dataarr = array();
    $dataarr['login_id'] = (string)$_POST['login_id'];
    $dataarr['login_pw'] = (string)$_POST['login_pw'];
    $dataarr['user_name'] = (string)$_POST['user_name'];
    $dataarr['name'] = (string)$_POST['name'];
    $dataarr['kana'] = (string)$_POST['kana'];
    $dataarr['postal_code'] = (string)$_POST['postal_code'];
    $dataarr['address'] = (string)$_POST['address'];
    $dataarr['birth'] = (string)$_POST['birth'];
    $dataarr['tel'] = (string)$_POST['tel'];
    $dataarr['email'] = (string)$_POST['email'];

    $chenge = new cchange_ex();
    if($admin_master_id > 0){
        $chenge->update('USERS',$dataarr,'user_id=' . $admin_master_id);
        cutil::redirect_exit($_SERVER['PHP_SELF'] . '?aid=' . $admin_master_id);
    }
    else{
        $aid = $chenge->insert('USERS',$dataarr);
        cutil::redirect_exit($_SERVER['PHP_SELF'] . '?aid=' . $aid);
    }
}

//--------------------------------------------------------------------------------------
/*!
@brief  管理者IDのアサイン
@return なし
*/
//--------------------------------------------------------------------------------------
function assign_admin_master_id(){
    //$smartyをグローバル宣言（必須）
    global $smarty;
    global $admin_master_id;
    $smarty->assign('user_id',$admin_master_id);
}

//--------------------------------------------------------------------------------------
/*!
@brief  管理者IDのアサイン(新規の場合は「新規」)
@return なし
*/
//--------------------------------------------------------------------------------------
function assign_admin_master_id_txt(){
    //$smartyをグローバル宣言（必須）
    global $smarty;
    global $admin_master_id;
    if($admin_master_id <= 0){
        $smarty->assign('user_id_txt','新規');
    }
    else{
        $smarty->assign('user_id_txt',$admin_master_id);
    }
}



/////////////////////////////////////////////////////////////////
/// 関数呼び出しブロック
/////////////////////////////////////////////////////////////////
if(!isset($_POST['login_id']))$_POST['login_id'] = '';
if(!isset($_POST['login_pw']))$_POST['login_pw'] = '';
if(!isset($_POST['user_name']))$_POST['user_name'] = '';
if(!isset($_POST['name']))$_POST['name'] = '';
if(!isset($_POST['kana']))$_POST['kana'] = '';
if(!isset($_POST['postal_code']))$_POST['postal_code'] = '';
if(!isset($_POST['address']))$_POST['address'] = '';
if(!isset($_POST['birth']))$_POST['birth'] = '';
if(!isset($_POST['tel']))$_POST['tel'] = '';
if(!isset($_POST['email']))$_POST['email'] = '';

assign_err_flag();
assign_admin_master_id();
assign_admin_master_id_txt();
$smarty->assign('err_array',$err_array);

//Smartyを使用した表示(テンプレートファイルの指定)
if(isset($_POST['func']) && $_POST['func'] == 'conf'){
    $button = '更新';
    if($admin_master_id <= 0){
        $button = '追加';
    }
    $smarty->assign('button',$button);
    $smarty->display('admin/adminindex_detail_conf.tmpl');
}
else{
    $smarty->display('admin/table_detail.tmpl');
}


?>
