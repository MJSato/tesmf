<?php
/* Smarty version 3.1.33, created on 2019-07-02 09:34:26
  from '/home/tmF2019/public_html/admin/Smarty/templates/admin/admin_detail_conf.tmpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1aa6924b4394_06588150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31aed8c92c495cc18fac61ab17db47d77ce8f8da' => 
    array (
      0 => '/home/tmF2019/public_html/admin/Smarty/templates/admin/admin_detail_conf.tmpl',
      1 => 1561955233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./gmenu.tmpl' => 1,
  ),
),false)) {
function content_5d1aa6924b4394_06588150 (Smarty_Internal_Template $_smarty_tpl) {
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
<td width="70%"><strong><?php echo htmlspecialchars($_POST['admin_login'], ENT_QUOTES, 'UTF-8', true);?>
</strong>
<input type="hidden"   name="admin_login" value="<?php echo htmlspecialchars($_POST['admin_login'], ENT_QUOTES, 'UTF-8', true);?>
">
</td>
</tr>
<tr>
<th class="nobottom">管理者名</th>
<td class="nobottom" width="70%"><strong><?php echo htmlspecialchars($_POST['admin_name'], ENT_QUOTES, 'UTF-8', true);?>
</strong>
<input type="hidden" name="admin_name" value="<?php echo htmlspecialchars($_POST['admin_name'], ENT_QUOTES, 'UTF-8', true);?>
" ></td>
</tr>
<input type="hidden"  name="enc_password" value="<?php echo htmlspecialchars($_POST['enc_password'], ENT_QUOTES, 'UTF-8', true);?>
" >
<input type="hidden"  name="enc_password_chk" value="<?php echo htmlspecialchars($_POST['enc_password_chk'], ENT_QUOTES, 'UTF-8', true);?>
" >
</table>
<input type="hidden" name="func" value="" />
<input type="hidden" name="param" value="" />
<input type="hidden" name="admin_master_id" value="<?php echo $_smarty_tpl->tpl_vars['admin_master_id']->value;?>
" />
<p class="center"><input type="button" value="戻る" onClick="set_func_form('edit','')" />&nbsp;<input type="button" value="<?php echo $_smarty_tpl->tpl_vars['button']->value;?>
" onClick="set_func_form('set','')" /></p>
</form>
</div>
<!-- /コンテンツ　-->
</div>
<!-- /全体コンテナ　-->
</body>
</html>
<?php }
}
