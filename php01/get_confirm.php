<?php
include("include/funcs.php");
$name = $_GET["name"];
$mail = $_GET["mail"];


?>
<html>
<head>
<meta charset="utf-8">
<title>GET練習（受信）</title>
</head>
<body>
お名前：<?php echo h($name); ?><br>
Mail：<?=h($mail)?> 
<!-- htmlに埋め込むときに見やすい。 -->
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>