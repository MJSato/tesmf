<?php
/*!
@file user_detail_smarty.php
@brief メンバー詳細(Smarty版)
@copyright Copyright (c) 2017 Yamanoi Yasushi.
*/

/////////////////////////////////////////////////////////////////
/// 実行ブロック
/////////////////////////////////////////////////////////////////

//ライブラリをインクルード
require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");
//以下はセッション管理用のインクルード
require_once($CMS_COMMON_INCLUDE_DIR . "auth_adm.php");


$user_id = 0;
$err_array = array();
$err_flag = 0;

$page = 0;
if(isset($_GET['page']) 
    && cutil::is_number($_GET['page'])
    && $_GET['page'] > 0){
    $page = $_GET['page'];
}

if(isset($_GET['mid']) 
//cutilクラスのメンバ関数をスタティック呼出
    && cutil::is_number($_GET['mid'])
    && $_GET['mid'] > 0){
    $user_id = $_GET['mid'];
}
//$_POST優先
if(isset($_POST['user_id']) 
//cutilクラスのメンバ関数をスタティック呼出
    && cutil::is_number($_POST['user_id'])
    && $_POST['user_id'] > 0){
    $user_id = $_POST['user_id'];
}
//メンバークラスを構築
$user_obj = new cUSERS();
//配列にメンバーを$_POSTに取り出す
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
    if($user_id > 0){
        if(($_POST = $user_obj->get_tgt(false,$user_id)) === false){
            $_POST['func'] = 'new';
        }
    }
    else{
        //新規の入力フォーム
        $_POST['func'] = 'new';
    }
}

/////////////////////////////////////////////////////////////////
/// 関数ブロック
/////////////////////////////////////////////////////////////////


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

<p class="red">入力エラーがあります。各項目のエラーを確認してください。</p>
END_BLOCK;
        break;
        case 2:
        $str =<<<END_BLOCK

<p class="red">更新に失敗しました。サポートを確認下さい。</p>
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
    $retflg = true;
    /// メンバー名の存在と空白チェック
    if(ccontentsutil::chkset_err_field($err_array,'user_name','メンバー名','isset_nl')){
        $retflg = false;
    }
    /// メンバーの都道府県チェック
    //if(ccontentsutil::chkset_err_field($err_array,'prefecture_id','都道府県','isset_num_range',1,47)){
    //    $retflg = false;
    //}
    /// メンバー住所の存在と空白チェック
    //if(ccontentsutil::chkset_err_field($err_array,'user_address','市区郡町村以下','isset_nl')){
    //    $retflg = false;
    //}
    /// メンバーの性別チェック
    //if(ccontentsutil::chkset_err_field($err_array,'user_gender','性別','isset_num_range',1,2)){
    //    $retflg = false;
    //}

    return $retflg;
}

//--------------------------------------------------------------------------------------
/*!
@brief  フルーツデータの追加／更新
@return なし
*/
//--------------------------------------------------------------------------------------


//--------------------------------------------------------------------------------------
/*!
@brief  メンバーデータの追加／更新。保存後自分自身を再読み込みする。
@return なし
*/
//--------------------------------------------------------------------------------------
function regist(){
    global $user_id;
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
    if($user_id > 0){
        $chenge->update('USERS',$dataarr,'user_id=' . $user_id);
        cutil::redirect_exit($_SERVER['PHP_SELF'] . '?mid=' . $user_id);
    }
    else{
        $mid = $chenge->insert('USERS',$dataarr);
        cutil::redirect_exit($_SERVER['PHP_SELF'] . '?mid=' . $mid);
    }
}
//--------------------------------------------------------------------------------------
/*!
@brief  ページの出力(一覧に戻るリンク用)
@return なし
*/
//--------------------------------------------------------------------------------------
function assign_page(){
    //$smartyをグローバル宣言（必須）
    global $smarty;
    global $page;
    $pagestr = '';
    if($page > 0){
        $pagestr =  '?page=' . $page;
    }
    $smarty->assign('page',$pagestr);
}

//--------------------------------------------------------------------------------------
/*!
@brief  メンバーIDのアサイン
@return なし
*/
//--------------------------------------------------------------------------------------
function assign_user_id(){
    //$smartyをグローバル宣言（必須）
    global $smarty;
    global $user_id;
    $smarty->assign('user_id',$user_id);
}

//--------------------------------------------------------------------------------------
/*!
@brief  メンバーIDのアサイン(新規の場合は「新規」)
@return なし
*/
//--------------------------------------------------------------------------------------
function assign_user_id_txt(){
    //$smartyをグローバル宣言（必須）
    global $smarty;
    global $user_id;
    if($user_id <= 0){
        $smarty->assign('user_id_txt','新規');
    }
    else{
        $smarty->assign('user_id_txt',$user_id);
    }
}

//--------------------------------------------------------------------------------------
/*!
@brief  都道府県プルダウンのアサイン
@return なし
*/
//--------------------------------------------------------------------------------------
function assign_prefecture_rows(){
    //$smartyをグローバル宣言（必須）
    global $smarty;
    //都道府県の一覧を取得
    $prefecture_obj = new cprefecture();
    $allcount = $prefecture_obj->get_all_count(false);
    $prefecture_rows = $prefecture_obj->get_all(false,0,$allcount);
    $smarty->assign('prefecture_rows',$prefecture_rows);
}
//--------------------------------------------------------------------------------------
/*!
@brief  好きな果物のアサイン
@return なし
*/
//--------------------------------------------------------------------------------------



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
assign_page();
assign_user_id();
assign_user_id_txt();
//assign_prefecture_rows();
$smarty->assign('err_array',$err_array);

//Smartyを使用した表示(テンプレートファイルの指定)
if(isset($_POST['func']) && $_POST['func'] == 'conf'){
    $button = '更新';
    if($user_id <= 0){
        $button = '追加';
    }
    $smarty->assign('button',$button);
    $smarty->display('admin/user_detail_smarty_conf.tmpl');
}
else{
    $smarty->display('admin/table_detail.tmpl');
}
?>
