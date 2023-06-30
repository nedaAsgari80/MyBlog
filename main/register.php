<?php
include ("includes/header.php");
if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true) {
?>
<script type="text/javascript">

location.replace("blog.php");	 // منتقل شود index.php به صفحه

</script>
<?php
   } // if پایان
?>
<head>
<script type="text/javascript">

	function check_empty()
     {
       var username='';
       username= document.getElementById("username").value;
       if (username=='')
        alert('وارد كردن نام كاربري الزامي است');
       else
        {
            
          var r = confirm("از صحت اطلاعات وارد شده اطمینان دارید؟");
          if (r == true) {
            document.register.submit();
           }
            
        } 
     }

</script>
  <meta charset="utf-8" />
  <title>
    ثبت نام
  </title>
  
  <meta content="width=device-width,initial-scale=1" name="viewport" />
  <meta content="IE=edge" http-equiv="X-UA-Compatible" />
  <meta content="#101010" name="theme-color" />
  <!--website-favicon-->
  <link href="images/i.png" rel="icon"/>
  <!--plugin-css-->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/plugin.min.css" rel="stylesheet" />
  <link type="text/css" href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />
  <!-- template-style-->
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
  <link href="css/darkmode.css" rel="stylesheet" />
  <!-- custom-style-->
  <link href="css/custom.css" rel="stylesheet" />
  <!--===== Custom Font css =====-->
  <link href="css/custom-fonts.css" rel="stylesheet" />
</head>

<body>
  <!--Start login Form-->
  <section class="login-page pad-tb" style="padding: 1px;">
    <div class="v-center m-auto">
      <a class="d-block text-center mb30" href="#">
        <!-- <img alt="لوگو" class="mega-darks-logo" src="images/white-logo.png"/> -->
      </a>
      <div class="login-form-div">
        <h4 class="mb40 text-center" style="color: black;">
          ثبت نام
        </h4>
        <div class="form-block">
          <form name="register" action="action_register.php" id="contact-form" method="POST">
            <div class="fieldsets row">
              <div class="wrap-input100 validate-input" data-validate=" لطفا نام کاربری خود را وارد کنید !">
                <input class="input100" type="text" name="name" placeholder="نام کاربری">
              </div>
              <div class="wrap-input100 validate-input" data-validate="لطفا پست الکترونیک خود را وارد کنید!">
                <input class="input100" type="text" name="email" placeholder="پست الکترونیک">
              </div>
              <div class="wrap-input100 validate-input" data-validate="لطفا رمز عبور را وارد کنید!">
                <input class="input100" type="password" name="pass" placeholder="رمز عبور">
              </div>
              <div class="wrap-input100 validate-input" data-validate="لطفا تکرار رمز خود را وارد کنید!">
                <input class="input100" type="repassword" name="repass" placeholder="تکرار رمز عبور">
              </div>
              <div class="wrap-input100 validate-input" data-validate="نام وبلاگ خود را وارد کنید">
                <input class="input100" type="blogname" name="blogname" placeholder="نام وبلاگ">
              </div>
              <div class="wrap-input100 validate-input" data-validate="">
                <input class="input100" type="description" name="description" placeholder="توضیحات">
              </div>
            </div>
            <div class="fieldsets row mt20">
              <div class="col-md-12 form-group v-center">
                <button class="lnk btn-main bg-btn" type="submit">
                  ثبت نام
                 </button>

              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!--End login Form-->
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="js/vendor/modernizr-3.5.0.min.js">
   </script>
  <script src="js/jquery.min.js">
   </script>
  <script src="js/bootstrap.bundle.min.js">
   </script>
  <script src="js/plugin.min.js">
   </script>
  <!--common script file-->
  <script src="js/main.js">
   </script>
</body>