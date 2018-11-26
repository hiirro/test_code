<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>じゃんけんアプリ</title>
</head>
<body>
<?php
$r = rand(1,2);

if($r==1){
    echo "あたり:".$r;
}else{
    echo"はずれ:".$r;
}



?>  
</body>
</html>