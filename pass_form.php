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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

<div class="super_container">

	<!-- Header -->
	<!--共通-->

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
								
								<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
										<li><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
										<li><a href="Signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i></a></li>
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


<?php
session_start();
 
header("Content-type: text/html; charset=utf-8");
 
//クロスサイトリクエストフォージェリ（CSRF）対策
$_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
$token = $_SESSION['token'];
 
//クリックジャッキング対策
header('X-FRAME-OPTIONS: SAMEORIGIN');
 
//データベース接続
require_once("db.php");
$dbh = db_connect();
 
//エラーメッセージの初期化
$errors = array();
 
if(empty($_GET)) {
	header("Location: mail_form.php");
	exit();
}else{
	//GETデータを変数に入れる
	$urltoken = isset($_GET['urltoken']) ? $_GET['urltoken'] : NULL;
	//メール入力判定
	if ($urltoken == ''){
		$errors['urltoken'] = "もう一度登録をやりなおして下さい。";
	}else{
		try{
			//例外処理を投げる（スロー）ようにする
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			//flagが0の未登録者・仮登録日から24時間以内
			$statement = $dbh->prepare("SELECT mail FROM pre_member WHERE urltoken=(:urltoken) AND flag =0 AND date > now() - interval 24 hour");
			$statement->bindValue(':urltoken', $urltoken, PDO::PARAM_STR);
			$statement->execute();
			
			
			//レコード件数取得
			$row_count = $statement->rowCount();
			
			//24時間以内に仮登録され、本登録されていないトークンの場合
			if( $row_count ==1){
				$mail_array = $statement->fetch();
				$mail = $mail_array['mail'];
				$_SESSION['mail'] = $mail;
			}else{
				$errors['urltoken_timeover'] = "このURLはご利用できません。有効期限が過ぎた等の問題があります。もう一度登録をやりなおして下さい。";
			}
			
			
			//データベース接続切断
			$dbh = null;
			
		}catch (PDOException $e){
			print('Error:'.$e->getMessage());
			die();
		}
	}
}
 
?>

<center><h3 class ="title">パスワード変更画面</h3>
 
<?php if (count($errors) === 0): ?>
 
<form action="pass_check.php" method="post">
 
<p>パスワード：<input type="text" name="password"></p>
 
<input type="hidden" name="token" value="<?=$token?>">
<input id="button" type="submit" value="確認">
 
</form>
 </center>
<?php elseif(count($errors) > 0): ?>
 
<?php
foreach($errors as $value){
	echo "<p>".$value."</p>";
}
?>
 
<?php endif; ?>
 

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