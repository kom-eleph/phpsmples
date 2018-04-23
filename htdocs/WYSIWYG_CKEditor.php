<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="//cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
<!--
  <script src="//cdn.ckeditor.com/4.7.3/basic/ckeditor.js"></script>
  <script src="//cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
  <script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
-->
</head>
<body>
<form action="" method="POST">
<textarea name="message" id="editor"></textarea>
</form>
<script>
  CKEDITOR.replace('editor', {
//    uiColor: '#EEEEEE',
//    width:800,
//    height: 200,
  });
</script>
</body>
</html>