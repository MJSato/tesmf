
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
<header class="header trans_300">
<?php include ('./admin/Smarty/templates/user_header.tmpl')?>
</header>

</body>
<body><center>
<div style=" margin-top:300px;">
 <p class="maru">
   <img src="./images/icon.jpeg">
	 </p><br>
   <div class="icon">
    <label  for="file_upload">アイコン変更
    <input type="file" id="file" onchange="$('#fake_text_box').val($(this).val())">
     </label>
   </div>
     <div><b> 名前：</b>
	     <input type="text" name="name" size="30" maxlength="20"></div>
      </div>
 <br>
 <div>
  <label for="jiko"> 自己紹介：</label><br>
 <textarea id="jiko" rows="5" cols="60" name="jiko" maxlength="200" placeholder="こちらに記入してください。"></textarea>
 </div>
 </center></body>



<br><br>
<p><center><input type="submit" value="完了"><center></p>





<footer class="footer">
<?php include ('./admin/Smarty/templates/user_fooder.tmpl')?>
	</footer>
	