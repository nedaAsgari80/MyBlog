<?php
include ("includes/header.php");
if (isset($_POST['username']) && !empty($_POST['username']) &&
    isset($_POST['email']) && !empty($_POST['email'])&&   
	isset($_POST['password']) && !empty($_POST['password']) &&
    isset($_POST['repassword']) && !empty($_POST['repassword']) &&
    isset($_POST['blogname']) && !empty($_POST['blogname']) &&
    isset($_POST['description']) && !empty($_POST['description'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $blogname = $_POST['blogname'];
    $description = $_POST['description'];
} else
    exit("برخی از فیلد ها مقدار دهی نشده است");


if ($password != $repassword)
    exit("كلمه عبور و تكرار آن مشابه نيست");


if (filter_var($email, FILTER_VALIDATE_EMAIL) === false)
    exit("پست اكترونيك وارد شده صحيح نیست");

$link = mysqli_connect("localhost", "root", "", "myblog");

if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());

$query = "INSERT INTO users (username,email,password,repassword,blogname,description,type) VALUES ('$username'.,.'$email'.,.'$password'.,.'$repassword'.,.'$blogname'.,.'$description'.,0)";

if (mysqli_query($link, $query) === true)
    echo ("<p style='color:green;'><b>" .
        "عضويت شما با نام كاربري " . $username .
        " در وبلاگ با موفقيت انجام شد " . "</b></p>");
else
    echo ("<p style='color:red;'><b>عضويت شما در فروشگاه انجام نشد</b></p>");

mysqli_close($link);
?>
