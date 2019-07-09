<?php
/* Smarty version 3.1.33, created on 2019-07-02 11:54:27
  from '/home/tmF2019/public_html/admin/Smarty/templates/admin/index.tmpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1ac763951175_12391578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4008bb0546e4299b74c4342dd23733d0e4e58972' => 
    array (
      0 => '/home/tmF2019/public_html/admin/Smarty/templates/admin/index.tmpl',
      1 => 1562036045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./gmenu.tmpl' => 1,
  ),
),false)) {
function content_5d1ac763951175_12391578 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<link href="css/main.css" rel="stylesheet" type="text/css">
<title>メインメニュー</title>
<?php echo '<script'; ?>
 type="text/javascript">
<!--


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
<h2>メインメニュー</h2>
</div>
<!-- コンテンツ　-->
<div id="inquiry">
<br />
ようこそ<?php echo $_SESSION['ZTeam_adm']['admin_name'];?>
さん<br />
<table >
<tr>
<td><a href="member_list_smarty.php">メンバー管理</a></td>
</tr>
<tr>
<td><a href="admin_list.php">管理者管理</a></td>
</tr>
<tr>
<td class="nobottom"><a href="prefecture_list.php">都道府県管理</a></td>
</tr>
<tr>
<td><a href="user_list_smarty.php">ユーザー登録</a></td>
</tr>
</table>
<p>&nbsp;</p>
</div>
<!-- /コンテンツ　-->
</div>
<!-- /全体コンテナ　-->
</body>
</html>

<?php }
}
