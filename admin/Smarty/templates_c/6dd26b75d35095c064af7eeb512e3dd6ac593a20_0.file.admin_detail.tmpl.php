<?php
/* Smarty version 3.1.33, created on 2019-07-02 09:33:59
  from '/home/tmF2019/public_html/admin/Smarty/templates/admin/admin_detail.tmpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1aa677a7a1e6_72083038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dd26b75d35095c064af7eeb512e3dd6ac593a20' => 
    array (
      0 => '/home/tmF2019/public_html/admin/Smarty/templates/admin/admin_detail.tmpl',
      1 => 1561955233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./gmenu.tmpl' => 1,
  ),
),false)) {
function content_5d1aa677a7a1e6_72083038 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<link href="css/main.css" rel="stylesheet" type="text/css">
<title>【管理画面】管理者詳細</title>
<?php echo '<script'; ?>
 type="text/javascript">
<!--
function set_func_form(fn,pm){
    document.form1.target = "_self";
    document.form1.func.value = fn;
    document.form1.param.value = pm;
    document.form1.submit();
}


// -->
<?php echo '</script'; ?>
>
</head>
<body>
<!-- 全体コンテナ　-->
<div id="container">
<?php $_smarty_tpl->_subTemplateRender('file:./gmenu.tmpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div id="headTitle">
<h2>管理者詳細</h2>
</div>
<!-- コンテンツ　-->
<div id="inquiry">
<?php if ($_smarty_tpl->tpl_vars['err_flag']->value != '') {?>
<p ><?php echo $_smarty_tpl->tpl_vars['err_flag']->value;?>
</p>
<?php }?>
ようこそ<?php echo $_SESSION['ZTeam_adm']['admin_name'];?>
さん<br />
<form name="form1" action="<?php echo $_SERVER['PHP_SELF'];?>
" method="post" >
<a href="admin_list.php">一覧に戻る</a><br />
<table>
<tr>
<th>ID</th>
<td width="70%"><?php echo $_smarty_tpl->tpl_vars['admin_master_id_txt']->value;?>
</td>
</tr>
<tr>
<th>ログイン</th>
<td width="70%"><input type="text"   name="admin_login" value="<?php echo htmlspecialchars($_POST['admin_login'], ENT_QUOTES, 'UTF-8', true);?>
"></td>
</tr>
<tr>
<th class="nobottom">管理者名</th>
<td class="nobottom" width="70%"><input type="text" name="admin_name" value="<?php echo htmlspecialchars($_POST['admin_name'], ENT_QUOTES, 'UTF-8', true);?>
" ></td>
</tr>
<tr>
<th>パスワード</th>
<td width="70%"><input type="password"  name="enc_password" value="<?php echo htmlspecialchars($_POST['enc_password'], ENT_QUOTES, 'UTF-8', true);?>
" ></td>
</tr>
<tr>
<th>パスワード確認</th>
<td width="70%"><input type="password"  name="enc_password_chk" value="<?php echo htmlspecialchars($_POST['enc_password_chk'], ENT_QUOTES, 'UTF-8', true);?>
" ></td>
</tr>
</table>
<input type="hidden" name="func" value="conf" />
<input type="hidden" name="param" value="" />
<input type="hidden" name="admin_master_id" value="<?php echo $_smarty_tpl->tpl_vars['admin_master_id']->value;?>
" />
<p class="center"><input type="submit" value="確認" /></p>
</form>
</div>
<!-- /コンテンツ　-->
</div>
<!-- /全体コンテナ　-->
</body>
</html>
<?php }
}
