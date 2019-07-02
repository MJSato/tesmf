<!DOCTYPE html>
<html lang="en">
<head>
<title>IMAGE CRAFT</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
</head>

<body>

<header class="header trans_300">

<div class="top_nav">
</div>

<!-- Main Navigation -->

<div class="main_nav_container">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-right">
				<div class="logo_container">
					<a href="index.php"><img src="images/logo1.jpg" alt="" width="100" height="100"></a>
				</div>
				<nav class="navbar">
					<ul class="navbar_menu">
						<li><a href="categories.php">product</a></li>
						<li><a href="#">post</a></li>
						<li><a href="#">new post</a></li>
						<li><a href="contact.php">contact</a></li>
					</ul>

					<ul class="navbar_user">
						<li><a href="#"><i class="fa fa-bell" aria-hidden="true"></i></a></li>
						
						<?php if( is_user_logged_in() ) : ?>
						<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
						 <?php else : ?>
								<li><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i></a></li>
								<?php endif; ?>
					</li>
						<li class="checkout">
							<a href="#">
								<i class="fa fa-shopping-cart" aria-hidden="true"></i>
							</a>
						</li>
					</ul>

					<div class="hamburger_container">
						<i class="fa fa-bars" aria-hidden="true"></i>
					</div>
				</nav>
			</div>
		</div>
	</div>
</div>
</header>


<div class="super_container">

	<!-- Header -->


	<!--共通-->
	
	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						
					</div>
				</div>
			
			</div>
		</div>
	</div>


<!--h-->

    <center><h3>登録情報編集</h3>
    <br />

    <p>　　ユーザー名：<input type="text" name="user" size="30"></p><br />
	<p>　　パスワード：<input type="password" name="pass" size="30"></p><br />
	<p>　　　　　氏名：<input type="text" name="sei" size="13">　<input type="text" name="mei" size="13"></p><br />
	<p>　　　ふりがな：<input type="text" name="sei" size="13">　<input type="text" name="mei" size="13"></p><br />

	<p>生年月日：
	<select name="year">
	<?php optionLoop('1950', date('Y'));?>
	</select>
	年　　
	<select name="year">
	<?php optionLoop('1', '12');?>
	</select>
	月　　
	<select name="day">
	<?php optionLoop('1', '31');?>
	</select>
	日</p><br />
	<?php
	//セレクトオプションのループ設定
	function optionLoop($start, $end){	
		for($i = $start; $i <= $end; $i++){
			echo "<option value=\"{$i}\">{$i}</option>";
		}
	}
	?>

    <p>　　　郵便番号：<input type="text" name="zip31" size="12" maxlength="3"> － <input type="text" name="zip32" size="13" maxlength="4" onKeyUp="AjaxZip3.zip2addr('zip31','zip32','pref31','addr31','addr31');"></p><br />
    <p>　　　都道府県：<input type="text" name="pref31" size="30"></p><br />
    <p>　　以降の住所：<input type="text" name="addr31" size="30"></p><br />
    <p>　　　電話番号：<input type="text" name="number" size="30"></p><br />
    <p>メールアドレス：<input type="text" name="mail" size="30"></p><br />

    
    <input id="button" type="submit" value="登録"></center>
 
<!-- Footer -->

<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">

					<ul class="footer_nav">
						<li><a href="contact.html">お問い合わせ</a></li>
						<li><a href="privacy.html">プライバシーポリシー</a></li>
						<li><a href="kiyaku.html">利用規約</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
					<ul>
						<li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="https://instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="footer_nav_container">
					<div class="cr">©2019 TeamF imagecraft</div>
					</div>
				</div>
			</div>
		</div>
</footer>
</div>



<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>

</html>