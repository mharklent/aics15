<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
session_start();
if(!isset($_SESSION['user'])){
    header("location:login.php");
}
else{
    echo "This is INDEx,welcome {$_SESSION['nickname']} <br/>";
    echo "<a href=\"adduser.php\">Add New User</a> | ";
    echo "<a href=\"logout.php\">LOG-OUT</a>";
}

?>
</body>
</html>