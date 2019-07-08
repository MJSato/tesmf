<?php
session_start();

header("Content-type: text/html; charset=utf-8");

//クロスサイトリクエストフォージェリ（CSRF）対策のトークン判定
if ($_POST['token'] != $_SESSION['token']){
	echo "不正アクセスの可能性あり";
	exit();
}


//クリックジャッキング対策
header('X-FRAME-OPTIONS: SAMEORIGIN');

//データベース接続
require_once("db.php");
$dbh = db_connect();

//エラーメッセージの初期化
$errors = array();

if(empty($_POST)) {
	header("Location: registration_mail_form.php");
	exit();
}else{
	//POSTされたデータを変数に入れる
	$mail = isset($_POST['mail']) ? $_POST['mail'] : NULL;
	
	//メール入力判定
	if ($mail == ''){
		$errors['mail'] = "メールが入力されていません。";
	}else{
		if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $mail)){
			$errors['mail_check'] = "メールアドレスの形式が正しくありません。";
		}else{
		//ここで本登録用のmemberテーブルにすでに登録されているmailかどうかをチェックする。
			$statement = $dbh->prepare("SELECT id FROM member WHERE mail=(:mail)");
			$statement->bindValue(':mail', $mail, PDO::PARAM_STR);
			$statement->execute();
			if($row = $statement->fetch()){
			$errors['member_check'] = "このメールアドレスはすでに利用されております。";
			}
		}
	}
}

if (count($errors) === 0){
	
	$urltoken = hash('sha256',uniqid(rand(),1));
	$url = "http://◯◯◯.co.jp/pass_form.php"."?urltoken=".$urltoken;
	
	//ここでデータベースに登録する
	try{
		//例外処理を投げる（スロー）ようにする
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$statement = $dbh->prepare("INSERT INTO pre_member (urltoken,mail,date) VALUES (:urltoken,:mail,now() )");
		
		//プレースホルダへ実際の値を設定する
		$statement->bindValue(':urltoken', $urltoken, PDO::PARAM_STR);
		$statement->bindValue(':mail', $mail, PDO::PARAM_STR);
		$statement->execute();
			
		//データベース接続切断
		$dbh = null;	
		
	}catch (PDOException $e){
		print('Error:'.$e->getMessage());
		die();
	}
	
	
}

?>

<!DOCTYPE html>
<html>
<head>
<title>メール確認画面</title>
<meta charset="utf-8">
</head>
<body>
<h1>メール確認画面</h1>

<?php if (count($errors) === 0): ?>

<p><?=$message?></p>

<p>↓このURLが記載されたメールが届きます。</p>
<a href="<?=$url?>"><?=$url?></a>

<?php elseif(count($errors) > 0): ?>

<?php
foreach($errors as $value){
	echo "<p>".$value."</p>";
}
?>

<input type="button" value="戻る" onClick="history.back()">

<?php endif; ?>
 
</body>
</html>