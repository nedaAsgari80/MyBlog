﻿<?php
include ("includes/header.php");
$link = mysqli_connect("localhost", "root", "", "myblog");
if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());
$query = "SELECT * FROM users";             // پرس و جوي نمايش همه محصولات فروشگاه

$result = mysqli_query($link, $query);  
?>
<!DOCTYPE html>
<html class="no-js" dir="rtl" lang="fa">
  <head>
    <meta charset="utf-8"/>
    <title>وبلاگ</title>
    <meta content="Creative Agency, Marketing Agency Template" name="description"/>
    <meta content="Creative Agency, Marketing Agency" name="keywords"/>
    <meta content="rajesh-doot" name="author"/>
    <meta content="width=device-width,initial-scale=1" name="viewport"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <!--website-favicon-->
    <link href="images/i.png" rel="icon"/>
    <!--plugin-css-->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/plugin.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>
    <link href="./fontawesome/css/all.css" rel="stylesheet">
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
    <!--Start Header -->
    <header class="nav-bg-w main-header navfix fixed-top menu-white">
      <div class="container-fluid m-pad">
        <div class="menu-header">
          <div class="dsk-logo">
            <a class="nav-brand" href="./">
              <img alt="لوگو" class="mega-white-logo" src="images/ii.png"/>
              <img alt="لوگو" class="mega-darks-logo" src="images/i.png"/>
            </a>
          </div>
          <div class="custom-nav" role="navigation">
            <ul class="nav-list">
              <li class="sbmenu">
                <a class="menu-links" href="#"><i class="fa fa-home"> وبلاگ</i></a>
              </li>
              <li class="sbmenu rpdropdown">
                <a class="menu-links" href="#"><i class="fa fa-bars"> دسته بندی</i></a>
                <div class="nx-dropdown menu-dorpdown">
                  <div class="sub-menu-section">
                    <div class="sub-menu-center-block">
                      <div class="sub-menu-column smfull">
                        <ul>
                          <li>
                            <a href="#">شخصی</a>
                          </li>
                          <li>
                            <a href="#">آشپزی</a>
                          </li>
                          <li>
                            <a href="#">علمی</a>
                          </li>
                          <li>
                            <a href="#">ورزشی</a>
                          </li>
                          <li>
                            <a href="#">کسب و کار
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="sbmenu rpdropdown">
                <a class="menu-links" href="#"><i class="fa fa-user-group"> ارتباط با ما</i></a>
              </li>
              <li class="sbmenu rpdropdown">
                <a class="menu-links" href="#">درباره ما</a>
              </li>
            </ul>
            <!-- mobile + desktop - sidebar menu- dark mode witch and button -->
            <ul class="nav-list right-end-btn">
              <li class="hidedesktop darkmodeswitch">
                <div class="switch-wrapper">
                  <label class="switch" for="niwax">
                    <input id="niwax" type="checkbox"/>
                    <span class="slider round">
                    </span>
                  </label>
                </div>
              </li>
              <li class="hidemobile">
                <a class="btn-round- btn-br bg-btn2" href="register.php">
                  <i class="fa fa-user-plus">
                  </i>
                </a>
              </li>
              <li class="hidemobile">
                <a class="btn-round- btn-br bg-btn2" href="login.php">
                  <i class="fa fa-sign-in">
                  </i>
                </a>
              </li>
              
              <li class="hidedesktop">
                <a class="btn-round- btn-br bg-btn2" href="register.php">
                  <i class="fa fa-user-plus">
                  </i>
                </a>
              </li>
              <li class="hidedesktop">
                <a class="btn-round- btn-br bg-btn2" href="login.php">
                  <i class="fa fa-sign-in">
                  </i>
                </a>
              </li>
              <li class="navm- hidedesktop">
                <a class="toggle" href="#">
                  <span>
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!--Mobile Menu-->
        <nav id="main-nav">
          <ul class="first-nav">
            <li>
              <a href="#">
                وبلاگ
              </a>
            </li>
            <li>
              <a href="#">
                دسته بندی
              </a>
              <ul>
                <li>
                  <a href="#">شخصی</a>
                </li>
                <li>
                  <a href="#">آشپزی</a>
                </li>
                <li>
                  <a href="#">علمی</a>
                </li>
                <li>
                  <a href="#">ورزشی</a>
                </li>
                <li>
                  <a href="#">کسب و کار</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">ارتباط با ما</a>
            </li>
            <li>
              <a href="#">درباره ما</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <!--End Header -->
    <!--Start sidebar -->
    <div class="niwaxofcanvas offcanvas offcanvas-end" id="offcanvasExample" tabindex="-1">
      <div class="offcanvas-body">
        <div class="cbtn animation">
          <div class="btnclose">
            <button aria-label="Close" class="btn-close text-reset" data-bs-dismiss="offcanvas" type="button">
            </button>
          </div>
        </div>
        <div class="form-block sidebarform">
          <h4>
            درخواست قیمت 
          </h4>
          <form class="shake mt20" data-bs-toggle="validator" id="contactForm">
            <div class="row">
              <div class="form-group col-sm-12">
                <input data-error="لطفا پر کنید" id="name" placeholder="نام را وارد کنید" required="" type="text"/>
                <div class="help-block with-errors">
                </div>
              </div>
              <div class="form-group col-sm-12">
                <input id="email" placeholder="پست الکترونیک را وارد کنید" required="" type="email"/>
                <div class="help-block with-errors">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-sm-12">
                <input data-error="لطفا پر کنید" id="mobile" placeholder="موبایل را وارد کنید" required="" type="text"/>
                <div class="help-block with-errors">
                </div>
              </div>
              <div class="form-group col-sm-12">
                <select id="Dtype" name="Dtype" required="">
                  <option value="">
                    انتخاب نیازمندی
                  </option>
                  <option value="web">
                    وب
                  </option>
                  <option value="graphic">
                    گرافیک
                  </option>
                  <option value="video">
                    ویدئو
                  </option>
                </select>
                <div class="help-block with-errors">
                </div>
              </div>
            </div>
            <div class="form-group">
              <textarea id="message" placeholder="پیام خود را وارد نمایید" required="" rows="5"></textarea>
              <div class="help-block with-errors">
              </div>
            </div>
            <button class="btn lnk btn-main bg-btn" id="form-submit" type="submit">
              ثبت 
              <span class="circle">
              </span>
            </button>
            <div class="h3 text-center hidden" id="msgSubmit">
            </div>
            <div class="clearfix">
            </div>
          </form>
        </div>
        <div class="getintouchblock mt30">
          <h4>
            در تماس باشید
          </h4>
          <p class="mt10">
            اگر طرح یا پروژه ای در ذهن دارید که می خواهید با ما به اشتراک بگذارید، لطفاً فرم زیر را پر کنید.
          </p>
          <div class="media mt15">
            <div class="icondive">
              <img alt="آیکون" src="images/icons/call.svg"/>
            </div>
            <div class="media-body getintouchinfo">
              <a href="tel:09131234567">
                09131234567
                <span>
                  دوشنبه-جمعه  9 صبح تا 6 بعد از ظهر
                </span>
              </a>
            </div>
          </div>
          <div class="media mt15">
            <div class="icondive">
              <img alt="آیکون" src="images/icons/whatsapp.svg"/>
            </div>
            <div class="media-body getintouchinfo">
              <a href="tel:09131234567">
                09131234567
                <span>
                  دوشنبه-جمعه  9 صبح تا 6 بعد از ظهر
                </span>
              </a>
            </div>
          </div>
          <div class="media mt15">
            <div class="icondive">
              <img alt="آیکون" src="images/icons/mail.svg"/>
            </div>
            <div class="media-body getintouchinfo">
              <a href="mailto:info@site.ir">
                info@site.ir
                <span>
                  پشتیبانی آنلاین
                </span>
              </a>
            </div>
          </div>
          <div class="media mt15">
            <div class="icondive">
              <img alt="آیکون" src="images/icons/map.svg"/>
            </div>
            <div class="media-body getintouchinfo">
              <a href="mailto:info@site.ir">
                اصفهان ، ایران
                <span>
                  به دفتر ما مراجعه کنید
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="contact-data mt30">
          <h4>
            ما را دنبال کنید در:
          </h4>
          <div class="social-media-linkz mt10">
            <a href="javascript:void(0)" target="blank">
              <i class="fab fa-facebook">
              </i>
            </a>
            <a href="javascript:void(0)" target="blank">
              <i class="fab fa-twitter">
              </i>
            </a>
            <a href="javascript:void(0)" target="blank">
              <i class="fab fa-instagram">
              </i>
            </a>
            <a href="javascript:void(0)" target="blank">
              <i class="fab fa-linkedin">
              </i>
            </a>
            <a href="javascript:void(0)" target="blank">
              <i class="fab fa-youtube">
              </i>
            </a>
            <a href="javascript:void(0)" target="blank">
              <i class="fab fa-pinterest-p">
              </i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!--end sidebar -->
    <!--Breadcrumb Area-->
    <section class="breadcrumb-area banner-2">
      <div class="text-block">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 v-center">
              <div class="bread-inner">
                <div class="bread-menu">
                </div>
                <div class="bread-title">
                  <h2>
                    آخرین اخبار ما
                  </h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Breadcrumb Area-->
    <!--Start Blog-->
    <section class="blog-page pad-tb">
      <div class="container">
        <div class="row">
          <!--Start Sidebar-->
          <div class="col-lg-4 order2 m-mt30">
            <div class="sidebar">
              <!--Start block for offer/ads-->
              <div class="offer-image">
                <img alt="پیشنهاد" class="img-fluid" src="images/blog/strategy-guide.jpg"/>
              </div>
              <!--End block for offer/ads-->
              <!--Start Recent post-->
              <div class="recent-post widgets mt60">
                <h3 class="mb30">
                  مطالب اخیر
                </h3>
                <div class="media">
                  <div class="post-image bdr-radius">
                    <a href="#">
                      <img alt="دختر" class="img-fluid" src="images/blog/blog-small.jpg"/>
                    </a>
                  </div>
                  <div class="media-body post-info">
                    <h5>
                      <a href="#">
                      </a>
                    </h5>
                    <p>
                    </p>
                  </div>
                </div>
                <div class="media">
                  <div class="post-image bdr-radius">
                    <a href="#">
                      <img alt="دختر" class="img-fluid" src="images/blog/blog-small2.jpg"/>
                    </a>
                  </div>
                  <div class="media-body post-info">
                    <h5>
                      <a href="#">
                      </a>
                    </h5>
                    <p>
                    </p>
                  </div>
                </div>
                <div class="media">
                  <div class="post-image bdr-radius">
                    <a href="#">
                      <img alt="دختر" class="img-fluid" src="images/blog/blog-small.jpg"/>
                    </a>
                  </div>
                  <div class="media-body post-info">
                    <h5>
                      <a href="#">
                      </a>
                    </h5>
                    <p>
                    </p>
                  </div>
                </div>
              </div>
              <!--Start Recent post-->
              <!--Start Blog Category-->
              <div class="recent-post widgets mt60">
                <h3 class="mb30">
                  دسته بندی وبلاگ
                </h3>
                <div class="blog-categories">
                  <ul>
                    <li>
                      <a href="#">شخصی<span class="categories-number">(3)</span></a>
                    </li>
                    <li>
                      <a href="#">آشپزی<span class="categories-number">(3) </span></a>
                    </li>
                    <li>
                      <a href="#">علمی<span class="categories-number">(4)</span></a>
                    </li>
                    <li>
                      <a href="#">ورزشی<span class="categories-number">(3)</span></a>
                    </li>
                    <li><a href="#">کسب و کار<span class="categories-number">(5)</span></a>
                    </li>
                  </ul>
                </div>
              </div>
              <!--End Blog Category-->
              <!--Start Tags-->
              <div class="recent-post widgets mt60">
                <h3 class="mb30">
                  برچسب های پرکاربرد
                </h3>
                <div class="tabs">
                  <a href="#">
                    شخصی
                  </a>
                  <a href="#">
                    شغلی 
                  </a>
                  <a href="#">
                     کسب و کار 
                  </a>
                  <a href="#">
                    آشپزی 
                  </a>
                  <a href="#">
                    بازاریابی 
                  </a>
                  <a href="#">
                    برندسازی 
                  </a>
                  <a href="#">
                    علمی  
                  </a>
                  <!-- <a href="#">
                      
                  </a>
                  <a href="#">
                    طراحی گرافیک 
                  </a>
                  <a href="#">
                    سایت اینترنتی 
                  </a>
                  <a href="#">
                    بازاریابی 
                  </a>
                  <a href="#">
                    برندسازی 
                  </a> -->
                </div>
              </div>
              <!--End Tags-->
              <!--Start block for offer/ads-->
              <div class="offer-image mt60">
                <img alt="پیشنهاد" class="img-fluid" src="images/blog/sidebar-image.jpg"/>
              </div>
              <!--End block for offer/ads-->
            </div>
          </div>
          <!--End Sidebar-->
          <!--Start Blog Details-->
          <div class="col-lg-8 order1">
            <div class="isotope_item vrbloglist">
              <div class="item-image">
                <a href="#">
                  <img alt=" وبلاگ " class="img-fluid" src="images/blog/blog-post-1.jpg"/>
                </a>
                <span class="category-blog">
                  <a href="#">
                    آی‌اواس
                  </a>
                  <a href="#">
                    اندروید
                  </a>
                </span>
              </div>
              <div class="item-info blog-info">
                <div class="entry-blog">
                  <span class="bypost">
                    <a href="#">
                      <i class="fas fa-user">
                      </i>
                       تام بلک
                    </a>
                  </span>
                  <span class="posted-on">
                    <a href="#">
                      <i class="fas fa-clock">
                      </i>
                       شهریور 1398
                    </a>
                  </span>
                  <span>
                    <a href="#">
                      <i class="fas fa-comment-dots">
                      </i>
                      (23)
                    </a>
                  </span>
                </div>
                <h4>
                  <a href="#">
                    توسعه اپلیکیشن بازار سهام - زمان، هزینه، ویژگی ها
                  </a>
                </h4>
                <p>
                  در دهه 1960 با انتشار برگه های لتراست حاوی معابر لورم ایپسوم و اخیراً با نرم افزار انتشار دسکتاپ از جمله نسخه های لورم ایپسوم رایج شد.
                </p>
              </div>
            </div>
            <div class="isotope_item vrbloglist">
              <div class="item-image">
                <a href="#">
                  <img alt=" وبلاگ " class="img-fluid" src="images/blog/blog-post-1.jpg"/>
                </a>
                <span class="category-blog">
                  <a href="#">
                    آی‌اواس
                  </a>
                  <a href="#">
                    اندروید
                  </a>
                </span>
              </div>
              <div class="item-info blog-info">
                <div class="entry-blog">
                  <span class="bypost">
                    <a href="#">
                      <i class="fas fa-user">
                      </i>
                       تام بلک
                    </a>
                  </span>
                  <span class="posted-on">
                    <a href="#">
                      <i class="fas fa-clock">
                      </i>
                       شهریور 1398
                    </a>
                  </span>
                  <span>
                    <a href="#">
                      <i class="fas fa-comment-dots">
                      </i>
                      (23)
                    </a>
                  </span>
                </div>
                <h4>
                  <a href="#">
                    توسعه اپلیکیشن بازار سهام - زمان، هزینه، ویژگی ها
                  </a>
                </h4>
                <p>
                  در دهه 1960 با انتشار برگه های لتراست حاوی معابر لورم ایپسوم و اخیراً با نرم افزار انتشار دسکتاپ از جمله نسخه های لورم ایپسوم رایج شد.
                </p>
              </div>
            </div>
            <div class="isotope_item vrbloglist">
              <div class="item-image">
                <a href="#">
                  <img alt=" وبلاگ " class="img-fluid" src="images/blog/blog-post-1.jpg"/>
                </a>
                <span class="category-blog">
                  <a href="#">
                    آی‌اواس
                  </a>
                  <a href="#">
                    اندروید
                  </a>
                </span>
              </div>
              <div class="item-info blog-info">
                <div class="entry-blog">
                  <span class="bypost">
                    <a href="#">
                      <i class="fas fa-user">
                      </i>
                       تام بلک
                    </a>
                  </span>
                  <span class="posted-on">
                    <a href="#">
                      <i class="fas fa-clock">
                      </i>
                       شهریور 1398
                    </a>
                  </span>
                  <span>
                    <a href="#">
                      <i class="fas fa-comment-dots">
                      </i>
                      (23)
                    </a>
                  </span>
                </div>
                <h4>
                  <a href="#">
                    توسعه اپلیکیشن بازار سهام - زمان، هزینه، ویژگی ها
                  </a>
                </h4>
                <p>
                  در دهه 1960 با انتشار برگه های لتراست حاوی معابر لورم ایپسوم و اخیراً با نرم افزار انتشار دسکتاپ از جمله نسخه های لورم ایپسوم رایج شد.
                </p>
              </div>
            </div>
          </div>
          <!--End Blog Details-->
        </div>
      </div>
    </section>
    <!--Start Footer-->
    <footer>
      <div class="footer-row2">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-lg-3 col-sm-6 ftr-brand-pp">
              <a class="navbar-brand mt30 mb25 f-dark-logo" href="#">
                <img alt="لوگو" src="images/i.png"/>
              </a>
              <a class="navbar-brand mt30 mb25 f-white-logo" href="#">
                <img alt="لوگو" src="images/ii.png"/>
              </a>
              
              
            </div>
            <div class="col-lg-3 col-sm-6">
              <h5>
                 تماس با ما  
              </h5>
              <ul class="footer-address-list ftr-details">
                <li>
                  <span>
                    <i class="fas fa-envelope">
                    </i>
                  </span>
                  <p>
                    پست الکترونیک 
                    <span>
                      <a href="mailto:info@site.ir">
                        info@site.ir
                      </a>
                    </span>
                  </p>
                </li>
                <li>
                  <span>
                    <i class="fas fa-phone-alt">
                    </i>
                  </span>
                  <p>
                    تلفن 
                    <span>
                      <a href="tel:09111234567">
                        09111234567
                      </a>
                    </span>
                  </p>
                </li>
                <li>
                  <span>
                    <i class="fas fa-map-marker-alt">
                    </i>
                  </span>
                  <p>
                    آدرس 
                    <span>
                       مشهد ، خیابان پاسداران ، ساختمان 72 ، پلاک 17
                    </span>
                  </p>
                </li>
              </ul>
            </div>
            <div class="col-lg-2 col-sm-6">
              <h5>
                وبلاگ
              </h5>
              <ul class="footer-address-list link-hover">
                <li>
                  <a href="get-quote.html">
                    تماس با ما
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)">
                    گزارش سوء رفتار کاربران
                  </a>
                </li>
                
                <li>
                  <a href="javascript:void(0)">
                    حریم خصوصی
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)">
                    شرایط و ضوابط
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)">
                    مجوز و حق چاپ
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-lg-4 col-sm-6 footer-blog-">
              <h5>
                آخرین مطالب
              </h5>
              <div class="single-blog-">
                <div class="post-thumb">
                  <a href="#">
                    <img alt=" وبلاگ " src="images/blog/blog-small.jpg"/>
                  </a>
                </div>
                <div class="content">
                  <p class="post-meta">
                    <span class="post-date">
                      <i class="far fa-clock">
                      </i>
                       فروردین 1399
                    </span>
                  </p>
                  <h4 class="title">
                    <a href="blog-sngle.html">
                      ما بهترین و خلاقانه ترین خدمات مشاوره را به شما ارائه می دهیم
                    </a>
                  </h4>
                </div>
              </div>
              <div class="single-blog-">
                <div class="post-thumb">
                  <a href="#">
                    <img alt=" وبلاگ " src="images/blog/blog-small.jpg"/>
                  </a>
                </div>
                <div class="content">
                  <p class="post-meta">
                    <span class="post-date">
                      <i class="far fa-clock">
                      </i>
                       فروردین 1399
                    </span>
                  </p>
                  <h4 class="title">
                    <a href="blog-sngle.html">
                      ما بهترین و خلاقانه ترین خدمات مشاوره را به شما ارائه می دهیم
                    </a>
                  </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="footer-row3">
        <div class="copyright">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="footer-social-media-icons">
                  <a href="javascript:void(0)" target="blank">
                    <i class="fab fa-facebook">
                    </i>
                  </a>
                  <a href="javascript:void(0)" target="blank">
                    <i class="fab fa-twitter">
                    </i>
                  </a>
                  <a href="javascript:void(0)" target="blank">
                    <i class="fab fa-instagram">
                    </i>
                  </a>
                  <a href="javascript:void(0)" target="blank">
                    <i class="fab fa-linkedin">
                    </i>
                  </a>
                  <a href="javascript:void(0)" target="blank">
                    <i class="fab fa-youtube">
                    </i>
                  </a>
                  <a href="javascript:void(0)" target="blank">
                    <i class="fab fa-pinterest-p">
                    </i>
                  </a>
                  
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--End Footer-->
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/vendor/modernizr-3.5.0.min.js">
    </script>
    <script src="js/jquery.min.js">
    </script>
    <script src="js/bootstrap.bundle.min.js">
    </script>
    <script src="js/plugin.min.js">
    </script>
    <script src="js/dark-mode.js">
    </script>
    <!--common script file-->
    <script src="js/main.js">
    </script>
  </body>
</html>