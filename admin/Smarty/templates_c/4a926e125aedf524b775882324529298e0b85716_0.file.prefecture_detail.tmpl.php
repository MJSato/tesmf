<?php
/* Smarty version 3.1.33, created on 2019-07-08 21:10:45
  from '/home/tmF2019/public_html/admin/Smarty/templates/admin/prefecture_detail.tmpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2332c5c03997_33181800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a926e125aedf524b775882324529298e0b85716' => 
    array (
      0 => '/home/tmF2019/public_html/admin/Smarty/templates/admin/prefecture_detail.tmpl',
      1 => 1561955234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./gmenu.tmpl' => 1,
  ),
),false)) {
function content_5d2332c5c03997_33181800 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<link href="css/main.css" rel="stylesheet" type="text/css">
<title>【管理画面】都道府県詳細</title>

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
<h2>都道府県詳細</h2>
</div>
<!-- コンテンツ　-->
<div id="inquiry">
<?php if ($_smarty_tpl->tpl_vars['err_flag']->value != '') {?>
<p ><?php echo $_smarty_tpl->tpl_vars['err_flag']->value;?>
</p>
<?php }?>
ようこそ<?php echo $_SESSION['ZTeam_adm']['admin_name'];?>
さん<br />
<form name="form1" action="prefecture_detail.php" method="post" >
<a href="prefecture_list.php">一覧に戻る</a>
<table>
<tr>
<th>ID</th>
<td width="70%"><?php echo $_smarty_tpl->tpl_vars['prefecture_id_txt']->value;?>
</td>
</tr>
<tr>
<th>都道府県名</th>
<td width="70%"><input type="text" name="prefecture_name" value="<?php echo $_smarty_tpl->tpl_vars['prefecture_name']->value;?>
" /></td>
</tr>
</table>
<input type="hidden" name="func" value="conf" />
<input type="hidden" name="param" value="" />
<input type="hidden" name="prefecture_id" value="<?php echo $_smarty_tpl->tpl_vars['prefecture_id']->value;?>
" />
<p class="center">
<input type="submit"  value="確認" />
</p>
</form>
</div>
<!-- /コンテンツ　-->
</div>
<!-- /全体コンテナ　-->
</body>
</html>
<?php }
}
