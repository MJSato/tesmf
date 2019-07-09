<?php
/* Smarty version 3.1.33, created on 2019-07-08 11:14:58
  from '/home/tmF2019/public_html/admin/Smarty/templates/admin/prefecture_list.tmpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d22a722043170_26966384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db309384d83951168424b539bb0a64fa066429d6' => 
    array (
      0 => '/home/tmF2019/public_html/admin/Smarty/templates/admin/prefecture_list.tmpl',
      1 => 1561955234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./gmenu.tmpl' => 1,
  ),
),false)) {
function content_5d22a722043170_26966384 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<link href="css/main.css" rel="stylesheet" type="text/css">
<title>【管理画面】都道府県一覧</title>

<?php echo '<script'; ?>
 type="text/javascript">
<!--
function set_func_form(fn,pm){
	document.form1.target = "_self";
	document.form1.func.value = fn;
	document.form1.param.value = pm;
	document.form1.submit();
}

function del_func_form(pm,mess){
	var message = "本当に\r\n";
	message += mess;
	message += "\r\nを削除しますか？";
	if(confirm(message)){
		document.form1.target = "_self";
		document.form1.func.value = 'del';
		document.form1.param.value = pm;
		document.form1.submit();
	}
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
<h2>都道府県一覧</h2>
</div>
<!-- コンテンツ　-->
<div id="inquiry">
<?php if ($_smarty_tpl->tpl_vars['ERR_STR']->value != '') {?>
<p><?php echo $_smarty_tpl->tpl_vars['ERR_STR']->value;?>
</p>
<?php }?>
ようこそ<?php echo $_SESSION['ZTeam_adm']['admin_name'];?>
さん<br />
<form name="form1" action="<?php echo $_smarty_tpl->tpl_vars['tgt_uri']->value;?>
" method="post" >
<p><a href="prefecture_detail.php">新規</a></p>
<p><?php echo $_smarty_tpl->tpl_vars['pager_arr']->value;?>
</p>
<table>
<tr>
<th>都道府県ID</th>
<th>都道府県名</th>
<th>操作</th>
</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'value', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
<tr>
<td width="20%" class="center">
<?php echo $_smarty_tpl->tpl_vars['value']->value['prefecture_id'];?>

</td>
<td width="65%" class="center">
<a href="prefecture_detail.php?pid=<?php echo $_smarty_tpl->tpl_vars['value']->value['prefecture_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['prefecture_name'];?>
</a>
</td>
<td width="15%" class="center">
<input type="button" value="削除確認" onClick="javascript:del_func_form(<?php echo $_smarty_tpl->tpl_vars['value']->value['prefecture_id'];?>
,'【<?php echo $_smarty_tpl->tpl_vars['value']->value['prefecture_name'];?>
】')" /></td>
</tr>
<?php
}
} else {
?>
<tr>
<tr><td colspan="3" class="nobottom">都道府県が見つかりません</td></tr>
</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<input type="hidden" name="func" value="" />
<input type="hidden" name="param" value="" />
</form>
<p>&nbsp;</p>

</div>
<!-- /コンテンツ　-->
</div>
<!-- /全体コンテナ　-->
</body>
</html>
<?php }
}
