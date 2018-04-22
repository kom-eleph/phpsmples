<?php

if ($_POST['submit']) {
	
    if (is_uploaded_file($_FILES["up_img"]["tmp_name"])) {
    	
	    $file1 = $_FILES["up_img"]["tmp_name"]; // 元画像ファイル
        $file2 = "images/test.jpg"; // 画像保存先のパス(ファイル保存をするときに使う)
        $in = ImageCreateFromJPEG($file1); // 元画像ファイル読み込み
        $width = ImageSx($in); // 画像の幅を取得
        $height = ImageSy($in); // 画像の高さを取得
        $min_width = 180; // 幅の最低サイズ
        $min_height = 180; // 高さの最低サイズ
        $image_type = exif_imagetype($file1); // 画像タイプ判定用


        if ($image_type == IMAGETYPE_JPEG){ // JPGかどうか判定
	        if($width >= $min_width|$height >= $min_height){
                if($width == $height) {
                    $new_width = $min_width;
                    $new_height = $min_height;
                } else if($width > $height) {//横長の場合
                    $new_width = $min_width;
                    $new_height = $height*($min_width/$width);
                } else if($width < $height) {//縦長の場合
                    $new_width = $width*($min_height/$height);
                    $new_height = $min_height;
                }
            }
            //　画像生成
            $out = ImageCreateTrueColor($min_width , $min_height);
            imagefill($out , 0 , 0 , 0xFFFFFF);
            ImageCopyResampled($out, $in,0,0,0,0, $new_width, $new_height, $width, $height);
            //ImageJPEG($out, $file2); //(ファイル保存をするときに使う)

			header('Content-Type: image/jpeg');
			ImageJPEG($out);            
    	} else {
                echo "サイズが幅".$min_width."×高さ".$min_height."以上の画像をご用意ください";
        }
    } else {
            echo "JPG画像をご用意ください";
    }
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
 
<form action="lena_gd.php" method="post" name="FormName" enctype="multipart/form-data">
<input type="file" name="up_img" value="参照" class="example">
<input type="submit" name="submit" value="送信">
</form>
 
</body>
</html>
