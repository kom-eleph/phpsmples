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
<div id="editor1" contenteditable="true">
    <h1>Inline Editing in Action!</h1>
    <p>The "div" element that contains this text is now editable.</p>
</div>
<script>
    // Turn off automatic editor creation first.
    CKEDITOR.disableAutoInline = true;
    CKEDITOR.inline( 'editor1' );
</script>
</body>
</html>