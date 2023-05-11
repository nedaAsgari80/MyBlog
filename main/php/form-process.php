<?php
$errorMSG = "";
// NAME
if (empty($_POST["name"])) {
    $errorMSG = "نام الزامی است";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "پست الکترونیک الزامی است";
} else {
    $email = $_POST["email"];
}
//mobile
if (empty($_POST["mobile"])) {
    $errorMSG = "موبایل الزامی است";
} else {
    $mobile = $_POST["mobile"];
}
//Design type
if (empty($_POST["Dtype"])) {
    $errorMSG = "نوع طراحی الزامی است";
} else {
    $Dtype = $_POST["Dtype"];
}
// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "پیام الزامی است";
} else {
    $message = $_POST["message"];
}

// add email and subject to get email in inbox
$EmailTo = "افزودن آدرس ایمیل";
$EmailTo1 = "افزودن آدرس ایمیل";
$Subject = "موضوع را در اینجا اضافه کنید";

// prepare email body text
$Body = "";
$Body .= "نام: ";
$Body .= $name;
$Body .= "\n";
$Body .= "پست الکترونیک: ";
$Body .= $email;
$Body .= "\n";
$Body .= "موبایل: ";
$Body .= $mobile;
$Body .= "\n";
$Body .= "نوع طراحی: ";
$Body .= $Dtype;
$Body .= "\n";
$Body .= "پیام: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
$success = mail($EmailTo1, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "مشکلی پیش آمد :(";
    } else {
        echo $errorMSG;
    }
}
?>