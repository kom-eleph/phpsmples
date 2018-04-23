<?php

//投稿されたデータを表示するページ
//(参考)https://hijiriworld.com/web/wysiwyg-ckfinder/

$url = "localhost";
$user = "root";
$pass = "root";
$db = "wysiwyg";
 
$link = mysql_connect( $url, $user, $pass ) or die("MySQLへの接続に失敗しました。");
$sdb = mysql_select_db( $db, $link ) or die("データベースの選択に失敗しました。");
$sql = "SELECT * FROM wysiwyg.posts";
$result = mysql_query( $sql, $link ) or die("クエリの送信に失敗しました。");
$rows = mysql_num_rows($result);
mysql_close($link) or die("MySQL切断に失敗しました。");
 
if($rows){
    while($row = mysql_fetch_array($result)) {
        $value = htmlspecialchars_decode($row['editor']);
        echo $value;
    }
}
?>