
<!DOCTYPE html>
<meta charset="utf-8" />

<title>profile</title>
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
<link rel="stylesheet" type="text/css" href="styles/profile.css">
</head>

<body>

<div class="super_container">
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
								<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i></a></li>
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
<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				<li class="menu_item has-children">
					<a href="#">
						usd
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">cad</a></li>
						<li><a href="#">aud</a></li>
						<li><a href="#">eur</a></li>
						<li><a href="#">gbp</a></li>
					</ul>
				</li>
				<li class="menu_item has-children">
					<a href="#">
						English
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">French</a></li>
						<li><a href="#">Italian</a></li>
						<li><a href="#">German</a></li>
						<li><a href="#">Spanish</a></li>
					</ul>
				</li>
				<li class="menu_item has-children">
					<a href="#">
						My Account
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
						<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="#">home</a></li>
				<li class="menu_item"><a href="#">shop</a></li>
				<li class="menu_item"><a href="#">promotion</a></li>
				<li class="menu_item"><a href="#">pages</a></li>
				<li class="menu_item"><a href="#">blog</a></li>
				<li class="menu_item"><a href="#">contact</a></li>
			</ul>
		</div>
	</div>



</div>
</body>
<br><br><br><br><br><br><br><br>
<div class="haiti">

 <p class="maru">
   <img  src="./images/0000-s.jpg" >
	<br>
   <div class="icon">
 <label  for="file_upload">アイコン変更
 <input type="file" id="file" onchange="$('#fake_text_box').val($(this).val())">
 <input type="text" id="file_upload" value="変更" onClick="$('#file').click();">
 </label>
 <div ><b> 名前：</b></div>
	<input type="text" name="name" size="30" maxlength="20">
 </div>
 <br>

 </p>
</div>
<div class="haiti" align="right">
  <b> 自己紹介：</b>
  <form action="cgi-bin/formmail.cgi" method="post">
  <br>
 <textarea name="kanso" rows="4" cols="40">ここに感想を記入してください。</textarea><br>
 <br>
</div>



<body>
<div class="icon">
<label  for="file_upload">アイコン変更
<input type="file" id="file" onchange="$('#fake_text_box').val($(this).val())">
<input type="text" id="file_upload" value="変更" onClick="$('#file').click();">
</label>
</div>
<div>
<input type="text" id="fake_text_box" value="" size="35" readonly onClick="$('#file').click();">
</div>
</body>
<?php
echo("プロフィール");

?>

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
	