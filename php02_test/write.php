<?php

$name = $_POST["name"];
$mail = $_POST["mail"];
$memo = $_POST["memo"];

?>

<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>
書き込みを行います。<br>
This is a Pen. とdata.txt に書き込みます。
</body>
<?php
//文字作成
$str = date("Y-m-d H:i:s").",".$name.",".$mail.",".$memo;
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\r\n"); //書き込みための関数 "\n"は改行
fclose($file);
?>
<ul>
<li><a href="post.php">post.php</a></li>
</ul>
</body>
</html>