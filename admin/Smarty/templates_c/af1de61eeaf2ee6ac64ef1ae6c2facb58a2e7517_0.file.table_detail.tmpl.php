<?php
/* Smarty version 3.1.33, created on 2019-07-11 10:12:50
  from '/home/tmF2019/public_html/Lamp2019F/admin/Smarty/templates/admin/table_detail.tmpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d268d121ccd98_99716393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af1de61eeaf2ee6ac64ef1ae6c2facb58a2e7517' => 
    array (
      0 => '/home/tmF2019/public_html/Lamp2019F/admin/Smarty/templates/admin/table_detail.tmpl',
      1 => 1562807557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d268d121ccd98_99716393 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>imagecraft admin</title>

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

    
    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">
    
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="public/assets/img/metis-tile.png" />
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="public/assets/lib/bootstrap/css/bootstrap.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="public/assets/lib/font-awesome/css/font-awesome.css">
    
    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="public/assets/css/main.css">
    
    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="public/assets/lib/metismenu/metisMenu.css">
    
    <!-- onoffcanvas stylesheet -->
    <link rel="stylesheet" href="public/assets/lib/onoffcanvas/onoffcanvas.css">
    
    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="public/assets/lib/animate.css/animate.css">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap.min.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
<![endif]-->

    <!--For Development Only. Not required -->
    <?php echo '<script'; ?>
>
        less = {
            env: "development",
            relativeUrls: false,
            rootpath: "/assets/"
        };
    <?php echo '</script'; ?>
>
    <link rel="stylesheet" href="public/assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="public/assets/less/theme.less">
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"><?php echo '</script'; ?>
>

  </head>

        <body class="  ">
            <div class="bg-dark dk" id="wrap">
                <div id="top">
                    <!-- .navbar -->
                    <nav class="navbar navbar-inverse navbar-static-top">
                        <div class="container-fluid">
                    
                    
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <header class="navbar-header">
                                        
                            </header>
                    
                            <div class="collapse navbar-collapse navbar-ex1-collapse">
                    
                                <!-- /.nav -->
                            </div>
                        </div>
                        <!-- /.container-fluid -->
                    </nav>
                    <!-- /.navbar -->
                        <header class="head">
                            <div class="main-bar">
                                <h3>
              <i class="fa fa-table"></i>&nbsp;
            ユーザーテーブル
          </h3>
                            </div>
                            <!-- /.main-bar -->
                        </header>
                        <!-- /.head -->
                </div>

                <!-- /#top -->
                    <div id="left">
                        <div class="media user-media bg-dark dker">
                            <div class="user-media-toggleHover">
                                <span class="fa fa-user"></span>
                            </div>
                            <div class="user-wrapper bg-dark">
                                <a class="user-link" href="">
                                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="public/assets/img/user.gif">
                                </a>
                        
                                <div class="media-body">
                                    <h5 class="media-heading">admin</h5>
                                    <ul class="list-unstyled user-info">
                                        <li>管理者</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- #menu -->
                        <ul id="menu" class="bg-blue dker">
                                  <li class="nav-header">Menu</li>
                                  <li class="nav-divider"></li>
                                  
                                  <li>
                                    <a href="index.php">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">ユーザーテーブル</span>
                                    </a>
                                  </li>

                                  <li>
                                    <a href="adminindex.php">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">管理者テーブル</span>
                                    </a>
                                  </li>

                                  <li>
                                    <a href="admin_contact.php">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">お問い合わせ</span>
                                    </a>
                                  </li>

                                  <li class="nav-divider"></li>
                                  <li>
                                    <a href="adminlogin.php">
                                      <i class="fa fa-sign-in"></i>
                                      <span class="link-title">
                            ログアウト
                            </span>
                                    </a>
                                  </li>
                        <!-- /#menu -->
                    </div>
                    <!-- /#left -->
                <div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
                            <!--Begin Datatables-->

<div class="row">
  <div class="col-lg-12">
        <div class="box">
            <header>
                <div class="icons"><i class="fa fa-table"></i></div>
                <h5>ユーザーテーブル</h5>
            </header>
            <div id="collapse4" class="body">
<form name="form1" action="<?php echo $_SERVER['PHP_SELF'];?>
" method="post" >
<table>
<tr>
<th>ユーザーID</th>
<td width="70%"><?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
</td>
</tr>
<tr>
<th>ログインID</th>
<td width="70%"><?php echo $_smarty_tpl->tpl_vars['login_id']->value;?>
</td>
</tr>
<tr>
<th>パスワード</th>
<td width="70%"><?php echo $_smarty_tpl->tpl_vars['login_pw']->value;?>
</td>
</tr>
<tr>
<th>ユーザー名前</th>
<td width="70%"><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</td>
</tr>
<tr>
<th>氏名</th>
<td width="70%"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
</tr>
<tr>
<th>フリガナ</th>
<td width="70%"><?php echo $_smarty_tpl->tpl_vars['kana']->value;?>
</td>
</tr>
<tr>
<th>郵便番号</th>
<td width="70%"><?php echo $_smarty_tpl->tpl_vars['postal_code']->value;?>
</td>
</tr>
<tr>
<th>アドレス</th>
<td width="70%"><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</td>
</tr>
<tr>
<th>誕生日</th>
<td width="70%"><?php echo $_smarty_tpl->tpl_vars['birth']->value;?>
</td>
</tr>
<tr>
<th>電話番号</th>
<td width="70%"><?php echo $_smarty_tpl->tpl_vars['tel']->value;?>
</td>
</tr>
<tr>
<th>メールアドレス</th>
<td width="70%"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</td>
</tr>
</table>
<input type="hidden" name="func" value="" />
<input type="hidden" name="param" value="" />
<input type="hidden" name="admin_master_id" value="<?php echo $_smarty_tpl->tpl_vars['admin_master_id']->value;?>
" />
<p class="center"><input type="button" value="戻る" onClick="set_func_form('edit','')" />&nbsp;<input type="button" value="<?php echo $_smarty_tpl->tpl_vars['button']->value;?>
" onClick="set_func_form('set','')" /></p>
</form>

            </div>
        </div>
    </div>
</div>
<!-- /.row -->
<!--End Datatables-->




                        </div>
                        <!-- /.inner -->
                    </div>
                    <!-- /.outer -->
                </div>
                <!-- /#content -->

                    <div id="right" class="onoffcanvas is-right is-fixed bg-light" aria-expanded=false>
                        <a class="onoffcanvas-toggler" href="#right" data-toggle=onoffcanvas aria-expanded=false></a>
                        <br>
                        <br>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Warning!</strong> Best check yo self, you're not looking too good.
                        </div>
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <ul class="list-unstyled">
                                <li>Visitor <span class="inlinesparkline pull-right">1,4,4,7,5,9,10</span></li>
                                <li>Online Visitor <span class="dynamicsparkline pull-right">Loading..</span></li>
                                <li>Popularity <span class="dynamicbar pull-right">Loading..</span></li>
                                <li>New Users <span class="inlinebar pull-right">1,3,4,5,3,5</span></li>
                            </ul>
                        </div>
                        <!-- /.well well-small -->
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <button class="btn btn-block">Default</button>
                            <button class="btn btn-primary btn-block">Primary</button>
                            <button class="btn btn-info btn-block">Info</button>
                            <button class="btn btn-success btn-block">Success</button>
                            <button class="btn btn-danger btn-block">Danger</button>
                            <button class="btn btn-warning btn-block">Warning</button>
                            <button class="btn btn-inverse btn-block">Inverse</button>
                            <button class="btn btn-metis-1 btn-block">btn-metis-1</button>
                            <button class="btn btn-metis-2 btn-block">btn-metis-2</button>
                            <button class="btn btn-metis-3 btn-block">btn-metis-3</button>
                            <button class="btn btn-metis-4 btn-block">btn-metis-4</button>
                            <button class="btn btn-metis-5 btn-block">btn-metis-5</button>
                            <button class="btn btn-metis-6 btn-block">btn-metis-6</button>
                        </div>
                        <!-- /.well well-small -->
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <span>Default</span><span class="pull-right"><small>20%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-info" style="width: 20%"></div>
                            </div>
                            <span>Success</span><span class="pull-right"><small>40%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-success" style="width: 40%"></div>
                            </div>
                            <span>warning</span><span class="pull-right"><small>60%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
                            </div>
                            <span>Danger</span><span class="pull-right"><small>80%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /#right -->
            </div>
            <!-- /#wrap -->
            <footer class="Footer bg-dark dker">
            </footer>
            <!-- /#footer -->
            <!-- #helpModal -->
            <div id="helpModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- /#helpModal -->
            <!--jQuery -->
            <?php echo '<script'; ?>
 src="assets/lib/jquery/jquery.js"><?php echo '</script'; ?>
>

                    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"><?php echo '</script'; ?>
>
                    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
                    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
                    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.26.6/js/jquery.tablesorter.min.js"><?php echo '</script'; ?>
>
                    <?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"><?php echo '</script'; ?>
>

            <!--Bootstrap -->
            <?php echo '<script'; ?>
 src="assets/lib/bootstrap/js/bootstrap.js"><?php echo '</script'; ?>
>
            <!-- MetisMenu -->
            <?php echo '<script'; ?>
 src="assets/lib/metismenu/metisMenu.js"><?php echo '</script'; ?>
>
            <!-- onoffcanvas -->
            <?php echo '<script'; ?>
 src="assets/lib/onoffcanvas/onoffcanvas.js"><?php echo '</script'; ?>
>
            <!-- Screenfull -->
            <?php echo '<script'; ?>
 src="assets/lib/screenfull/screenfull.js"><?php echo '</script'; ?>
>


            <!-- Metis core scripts -->
            <?php echo '<script'; ?>
 src="assets/js/core.js"><?php echo '</script'; ?>
>
            <!-- Metis demo scripts -->
            <?php echo '<script'; ?>
 src="assets/js/app.js"><?php echo '</script'; ?>
>

                <?php echo '<script'; ?>
>
                    $(function() {
                      Metis.MetisTable();
                      Metis.metisSortable();
                    });
                <?php echo '</script'; ?>
>

            <?php echo '<script'; ?>
 src="assets/js/style-switcher.js"><?php echo '</script'; ?>
>
        </body>

</html>
<?php }
}
