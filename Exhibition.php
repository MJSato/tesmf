<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="utf-8"> 
  <title></title>
</head>
<body style='text-align:center;'>

<form method="post" action="CGIのURI">

<p>商品名：<input type="text" name="product" size="30"></p>
<div id='boxImage'>ここに画像が入ります</div>

<input type='file' value='' id='selectImage'>

<script>
var elm = document.getElementById("selectImage");
elm.onchange = function(evt){
  var selectFiles = evt.target.files;
  if(selectFiles.length != 0) {
    var fr = new FileReader();
    fr.readAsDataURL(selectFiles[0]);
    fr.onload = function(evt) {
      document.getElementById('boxImage').innerHTML = '<img src="' + fr.result + '" alt="" style="min-width:250px;min-height:250px;max-width:250px;max-height:250px;border:1px solid #666;">'; //readAsDataURLで得た結果を、srcに入れたimg要素を生成して挿入
    }
  }
}
</script>

<p>カテゴリー：<select name="category">
<option value="chair">chair</option>
<option value="table">table</option>
<option value="shelf">shelf</option>
<option value="desk">desk</option>
<option value="accessory">accessory</option>
</select>
</p>
<p>説明</p>
<textarea name="freeans" rows="10" cols="40"> </textarea>


<p>サイズ

<table align="center">

	<tr>
		<th>縦</th><td><input type="text" name="length" size="15"> cm</td>
	</tr>

	<tr>
		<th>横</th><td><input type="text" name="width" size="15"> cm</td>
	</tr>

	<tr>
		<th>高さ</th><td><input type="text" name="height" size="15"> cm</td>
	</tr>

</table></p>

<p>送料負担<br>
<input type="radio" name="syuppinsyas" value=""> 送料込み (出品者負担)<br />
<input type="radio" name="kounyusya" value=""> 着払い (購入者負担)
</p>

<p>値段　<input type="text" name="height" size="15"> 円</p>

</form>
</body>
</html>