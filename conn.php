
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
$host ='localhost';
$user='root';
$pswd='';
$dbname='contoh_login';S

$conn=new mysqli($host,$user,$pswd,$dbname);
session_start(); 
    ?>
</body>
</html>
