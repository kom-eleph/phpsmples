<!--
//wysiwygエディタを設置するページ
//(参考)https://hijiriworld.com/web/wysiwyg-ckfinder/
-->
<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>wysiwyg sample</title>
</head>
<body>
     
    <form action="edit.php" method="post">
        <textarea id="editor1" name="editor1" rows="10" cols="80"></textarea>
        <p><input type="submit" value="Submit"></p>
    </form>
     
    <script type="text/javascript" src="./ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="./ckfinder/ckfinder.js"></script>
    <script type="text/javascript">
        if ( typeof CKEDITOR == 'undefined' )
        {
        }
        else
        {
            var editor = CKEDITOR.replace( 'editor1' );
            editor.setData( '' );
            CKFinder.setupCKEditor( editor, './ckfinder/' ) ;
        }
    </script>
     
</body>
</html>

<?php
$url = "localhost";
$user = "root";
$pass = "root";
$db = "wysiwyg";
 
if (!empty($_POST))
{
    $value = htmlspecialchars( $_POST["editor1"] );
 
    $link = mysql_connect( $url, $user, $pass ) or die("MySQLへの接続に失敗しました。");
    $sdb = mysql_select_db( $db, $link ) or die("データベースの選択に失敗しました。");
    $sql = "INSERT INTO `wysiwyg`.`posts` (`editor`) VALUES ('".$value."')";
    $result = mysql_query( $sql, $link ) or die("クエリの送信に失敗しました。");
    mysql_close($link) or die("MySQL切断に失敗しました。");
}
?>