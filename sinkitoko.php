<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>IMAGECRAFT</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   

<style>
img{
    margin:0 5px 5px 0;
    max-width:160px;
    vertical-align:bottom;
}
</style>
</head>
<body>
 <!-- header-->
 <header class="header trans_300">
{include file='./user_header.tmpl'}
    </header>

<script type="text/javascript">
$(function () {
        var num = 1;
        var view_count = document.querySelectorAll("div[id]").length;

        function imgView(n) {
            var reader = new FileReader();
            document.getElementById('file_' + n).onchange = function (e) {
                reader.addEventListener('load', function (e) {
                    $('#view_' + n).html('<img src="' + e.target.result + '" />');
                });
                reader.readAsDataURL(this.files[0]);
            }

        }
        

        imgView(num);

        $('button#add').click(function () {

          if(view_count ===19 ){
              $('#message').html('※ 追加フォームは最大' + view_count + '個までです。<br>');
            }else{

            num = num + 1;
            view_count = view_count + 1;

              var tr_form = '' +
                  '<tr>' +
                  '<td><textarea name="手順リスト" cols="50" rows="5"></textarea>' +
                  '<td><div  id="view_' + num + '"></div><input type="file" id="file_' + num + '" name="img[]" accept="image/*" /></td>' +
                  '</tr>';
              $(tr_form).appendTo($('table > tbody'));
              $('#reload').html('<input type="button" value="リロードする" onclick="window.location.reload();" /><br>');

              imgView(num);
          }
        });

});
</script>
   
        
</form>
<h1>新規投稿</h1>
<form  action="" enctype="multipart/form-data">
    タイトル：<input type="text" name="title"><br><br>
    画像：
    <div class="input_file">
            <div class="preview">
                <input accept="image/*" id="imgFile" type="file">
            </div>
            <p class="btn_upload">
               
            </p>
        </div>

    カテゴリ：<form method="post" action="example.cgi">     
            <select name="example2">
            <option value="サンプル1"selected>-------------</option>
            <option value="サンプル2">机</option>
            <option value="サンプル3">椅子</option>
            <option value="サンプル4" >棚</option>
            <option value="サンプル5">照明</option>
            <option value="サンプル6">雑貨</option>
            </select><br><br>
    <table>
        <thead>
        <tr>
       <th>作り方</th>
        <th>画像</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><textarea name="手順リスト" cols="50" rows="5"></textarea></td>
            <td>
                <div id="view_1"></div>
                <input type="file" id="file_1" name="img[]" accept="image/*">

            </td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td>
                <button id="add" type="button">追加</button><span id="reload"></span>
            </td>
        </tr>
        </tfoot>
    </table>
    <span id="message"></span>
    <input type="submit" name="send" value="送信">
</form>

   
    <!-- Footer -->

	<footer class="footer">
	{include file='./user_fooder.tmpl'}

	</footer>
</body>
</html>