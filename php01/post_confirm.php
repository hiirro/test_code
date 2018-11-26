<?php
include("include/funcs.php"); //includeのファイルをここに持ってくることができる


$name = $_POST["name"];
$mail = $_POST["mail"];

?>
<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
お名前：<?php echo h($name); ?><br>
EMAIL：<?=h($mail)?>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>