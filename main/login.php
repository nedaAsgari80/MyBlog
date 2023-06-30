<!DOCTYPE html>
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
<html class="no-js" dir="rtl" lang="fa">
  <head>
    <meta charset="utf-8"/>
    <title>
      LOGIN
    </title>
    <meta content="width=device-width,initial-scale=1" name="viewport"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta content="#101010" name="theme-color"/>
    <!--website-favicon-->
    <link href="images/i.png" rel="icon"/>
    <!--plugin-css-->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/plugin.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>
    <!-- template-style-->
    <link href="css/style.css" rel="stylesheet"/>
    <link href="css/responsive.css" rel="stylesheet"/>
    <link href="css/darkmode.css" rel="stylesheet"/>
    <!-- custom-style-->
    <link href="css/custom.css" rel="stylesheet"/>
    <!--===== Custom Font css =====-->
    <link href="css/custom-fonts.css" rel="stylesheet"/>
  </head>
  <body>
    <!--Start login Form-->
    <section class="login-page pad-tb">
      <div class="v-center m-auto">
        <a class="d-block text-center mb30" href="#">
          <!-- <img alt="لوگو" class="mega-darks-logo" src="images/white-logo.png"/> -->
        </a>
        <div class="login-form-div">
          <h4 class="mb40 text-center" style="color: black;">
            وارد حساب کاربری خود شوید
          </h4>
          <div class="form-block">
            <form action="action_login.php" id="contact-form" method="post">
              <div class="fieldsets row">
                <div class="col-md-12 form-group">
                  <input id="form_name" name="email" placeholder="پست الکترونیک" required="required" type="text"/>
                </div>
                <div class="col-md-12 form-group">
                  <input name="pass" placeholder="کلمه عبور" required="required" type="password"/>
                </div>
              </div>
              <div class="fieldsets row mt20">
                <div class="col-md-12 form-group v-center">
                  <button class="lnk btn-main bg-btn" type="submit">
                    ورود
                    <span class="circle">
                    </span>
                  </button>
                </div>
                <div class="col-md-6 form-group v-center text-right" style="padding: 10px; padding-top: 30px;">
                  <a class="psforgt" href="#" style="color: black;">
                    رمز عبور را فراموش کردید؟
                  </a>
                </div>
                <div class="col-md-6 form-group v-center text-right"style="padding: 10px; padding-top: 30px;">
                  <a class="psforgt" href="register.php" style="color: black;">
                    هنوز ثبت نام نکرده اید؟
                  </a>
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
</html>