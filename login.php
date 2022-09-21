<?php 
$host="localhost";
$user="root";
$password="";
$db="demo";


mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['username'])) {
    $uname=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from loginform where user='".$uname."'AND Pass='".$password."'limit 1";

    $result=mysql_query($sql);

    if(mysql_num_rows($result)==1){
        echo " YOU HAVE SUCCESSFULLY LOGGED IN";
        exit();
    }
    else{
        echo "YOU HAVE ENTERED INCORRECT PASSWORD";
        exit();
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <img src="" alt="">
        <form action="#" method="POST">
            <div class="form-input">
                <input type="text" name="username" placeholder="Enter username">
            </div>
            <div class="form-input">
                <input type="text" name="password" placeholder="Enter password">
            </div>
            <input type="text" name="submit" value="LOGIN" class="btn-login"/>
        </form>
    </div>
</body>
</html>