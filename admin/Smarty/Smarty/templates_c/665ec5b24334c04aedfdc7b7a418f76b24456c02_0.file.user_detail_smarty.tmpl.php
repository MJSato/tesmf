<?php
/* Smarty version 3.1.33, created on 2019-07-02 13:02:33
  from '/home/tmF2019/public_html/admin/Smarty/templates/admin/user_detail_smarty.tmpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1ad75971d230_55195514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '665ec5b24334c04aedfdc7b7a418f76b24456c02' => 
    array (
      0 => '/home/tmF2019/public_html/admin/Smarty/templates/admin/user_detail_smarty.tmpl',
      1 => 1562040134,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./gmenu.tmpl' => 1,
  ),
),false)) {
function content_5d1ad75971d230_55195514 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<link href="css/main.css" rel="stylesheet" type="text/css">
<title>ユーザー詳細</title>

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
<h2>ユーザー詳細</h2>
</div>
<!-- コンテンツ　-->
<div id="inquiry">
<?php if ($_smarty_tpl->tpl_vars['err_flag']->value != '') {?>
<p><?php echo $_smarty_tpl->tpl_vars['err_flag']->value;?>
</p>
<?php }?>
ようこそ<?php echo $_SESSION['ZTeam_adm']['admin_name'];?>
さん<br />
<form name="form1" action="<?php echo $_SERVER['PHP_SELF'];?>
" method="post" >
<a href="user_list_smarty.php<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">一覧に戻る</a><br />
<span class="red">＊</span>は必須項目
<table>
<tr>
<th>ID</th>
<td width="70%"><?php echo $_smarty_tpl->tpl_vars['user_id_txt']->value;?>
</td>
</tr>
<tr>
<th>ログインID<span class="red">＊</span></th>
<td width="70%"><input type="text" name="login_id" size="50" value="<?php echo htmlspecialchars($_POST['login_id'], ENT_QUOTES, 'UTF-8', true);?>
" />
<?php if (isset($_smarty_tpl->tpl_vars['err_array']->value['login_id'])) {?><br /><span class="red"><?php echo $_smarty_tpl->tpl_vars['err_array']->value['login_id'];?>
</span><?php }?>
</td>
</tr>
<tr>
<th>パスワード<span class="red">＊</span></th>
<td width="70%"><input type="text" name="login_pw" size="50" value="<?php echo htmlspecialchars($_POST['login_pw'], ENT_QUOTES, 'UTF-8', true);?>
" />
<?php if (isset($_smarty_tpl->tpl_vars['err_array']->value['login_pw'])) {?><br /><span class="red"><?php echo $_smarty_tpl->tpl_vars['err_array']->value['login_pw'];?>
</span><?php }?>
</td>
</tr>
<tr>
<th>ユーザー名<span class="red">＊</span></th>
<td width="70%"><input type="text" name="user_name" size="50" value="<?php echo htmlspecialchars($_POST['user_name'], ENT_QUOTES, 'UTF-8', true);?>
" />
<?php if (isset($_smarty_tpl->tpl_vars['err_array']->value['user_name'])) {?><br /><span class="red"><?php echo $_smarty_tpl->tpl_vars['err_array']->value['user_name'];?>
</span><?php }?>
</td>
</tr>
<tr>
<th>氏名<span class="red">＊</span></th>
<td width="70%"><input type="text" name="name" size="50" value="<?php echo htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8', true);?>
" />
<?php if (isset($_smarty_tpl->tpl_vars['err_array']->value['name'])) {?><br /><span class="red"><?php echo $_smarty_tpl->tpl_vars['err_array']->value['name'];?>
</span><?php }?>
</td>
</tr>
<tr>
<th>読み仮名<span class="red">＊</span></th>
<td width="70%"><input type="text" name="kana" size="50" value="<?php echo htmlspecialchars($_POST['kana'], ENT_QUOTES, 'UTF-8', true);?>
" />
<?php if (isset($_smarty_tpl->tpl_vars['err_array']->value['kana'])) {?><br /><span class="red"><?php echo $_smarty_tpl->tpl_vars['err_array']->value['kana'];?>
</span><?php }?>
</td>
</tr>
<tr>
<th>郵便番号<span class="red">＊</span></th>
<td width="70%"><input type="text" name="postal_code" size="50" value="<?php echo htmlspecialchars($_POST['postal_code'], ENT_QUOTES, 'UTF-8', true);?>
" />
<?php if (isset($_smarty_tpl->tpl_vars['err_array']->value['postal_code'])) {?><br /><span class="red"><?php echo $_smarty_tpl->tpl_vars['err_array']->value['postal_code'];?>
</span><?php }?>
</td>
</tr>
<tr>
<th>住所<span class="red">＊</span></th>
<td width="70%"><input type="text" name="address" size="50" value="<?php echo htmlspecialchars($_POST['address'], ENT_QUOTES, 'UTF-8', true);?>
" />
<?php if (isset($_smarty_tpl->tpl_vars['err_array']->value['address'])) {?><br /><span class="red"><?php echo $_smarty_tpl->tpl_vars['err_array']->value['address'];?>
</span><?php }?>
</td>
</tr>
<tr>
<th>誕生日<span class="red">＊</span></th>
<td width="70%"><input type="text" name="birth" size="50" value="<?php echo htmlspecialchars($_POST['birth'], ENT_QUOTES, 'UTF-8', true);?>
" />
<?php if (isset($_smarty_tpl->tpl_vars['err_array']->value['birth'])) {?><br /><span class="red"><?php echo $_smarty_tpl->tpl_vars['err_array']->value['birth'];?>
</span><?php }?>
</td>
</tr>
<tr>
<th>電話番号<span class="red">＊</span></th>
<td width="70%"><input type="text" name="tel" size="50" value="<?php echo htmlspecialchars($_POST['tel'], ENT_QUOTES, 'UTF-8', true);?>
" />
<?php if (isset($_smarty_tpl->tpl_vars['err_array']->value['tel'])) {?><br /><span class="red"><?php echo $_smarty_tpl->tpl_vars['err_array']->value['tel'];?>
</span><?php }?>
</td>
</tr>
<tr>
<th>自己紹介<span class="red">＊</span></th>
<td width="70%"><input type="text" name="bio" size="50" value="<?php echo htmlspecialchars($_POST['bio'], ENT_QUOTES, 'UTF-8', true);?>
" />
<?php if (isset($_smarty_tpl->tpl_vars['err_array']->value['bio'])) {?><br /><span class="red"><?php echo $_smarty_tpl->tpl_vars['err_array']->value['bio'];?>
</span><?php }?>
</td>
</tr>
</table>
<input type="hidden" name="func" value="" />
<input type="hidden" name="param" value="" />
<input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
" />
<p class="center">
<input type="button"  value="確認" onClick="javascript:set_func_form('conf','')"/>
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
