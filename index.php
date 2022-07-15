<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEacademy</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha512-Ua/7Woz9L5O0cwB/aYexmgoaD7lw3dWe9FvXejVdgqu71gRog3oJgjSWQR55fwWx+WKuk8cl7UwA1RS6QCadFA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-rtl.css">
    <link rel="stylesheet" href="bootstrap-rtl.min.css">


</head>
<body class="rtl">

<!--Navbar-->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class="container-fluid">
<a class="navbar-brand" href="#"><img src="img/rsz_logo-removebg-preview_1.png"></a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
    <span class="navbar-toggler-icon"></span>
</button>  

<div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav mr-auto">

        <li class="nav-item active">
            <a class="nav-link" href="#">خانه</a>
        </li> 
        
        <li class="nav-item dropdown">
            <a id="#course" class="nav-link dropdown-toggle" href="#" id="navbarDropdown-course" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            دوره ها
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="cssCourse.php">دوره htm/css</a>
              <a class="dropdown-item" href="bootstrapCourse.php">دوره bootstrap</a>
              <a class="dropdown-item" href="xdCourse.php">دوره adobe xd</a>

          </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            خدمات
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="wbinar.php">وبینارها</a>
              <a class="dropdown-item" href="articlemain.php">مقالات</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#teachers">مدرسین</a>
        </li> 
        
        <li class="nav-item">
            <a class="nav-link" href="#connect">ارتباط باما</a>
        </li> 

        <li class="nav-item">
            <a class="nav-link" href="#about">درباره ما</a>
        </li> 
    </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="login.php">ورود | ثبت نام</a>
              </li>
          </ul>

</div>  
</div>
</nav>


<!--Image Slider-->
<div id="slides" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/sidebar/a1.jpg" alt="First slide">
        <div class="carousel-caption">
            <h1 class="display-2">CE.Academy</h1>
            <h3>آکادمی آموزش کامپیوتر</h3>
            <a href="cssCourse.php">
            <button type="button" class="btn btn-outline-light btn-lg">نمایش دوره</button></a>
            <a href="video1.php">
            <button type="button" class="btn btn-praimery btn-lg">شروع دوره</button></a>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/sidebar/a2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/sidebar/a3.jpg" alt="Third slide">
      </div>
    </div>
  </div>

</div>


<!--services-->
<div class="container-fluid padding">
    <div class="row  text-center">
        <div class="col-12">
            <h2 class="display-4">خدمات آکادمی </h2>
             <div class="underline"></div>

            <div class="row text-center padding">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <a href="#course">
                    <i class="fa fa-play-circle fa-3x"></i></a>
                    <h3>ویدئوهای آموزشی</h3>
                    <p>
                        مهمترین خدمات ما در آکادمی آنلاین  ارائه ویدئوهای آموزشی با بالاترین کیفیت در زمینهای مختلف برنامه نویسی و علوم مهندسی
                    </p>
                </div>
        
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <a href="articlemain.php">
                    <i class="fa fa-file fa-3x"></i></a>
                    <h3>مقالات علمی</h3>
                    <p>
                        یکی دیگر از خدمات سایت  ارائه آخرین مطالب علمی در حوزه های مختلف عووم مهندسی در قالب مقالات و پستها می باشد
                    </p>
                </div>
        
                <div class="col-sm-12 col-md-4">
                    <a href="wbinar.php">
                    <i class="fa fa-laptop fa-3x"></i></a>
                    <h3>برگزاری وبینار</h3>
                    <p>        برگزاری وبینارهای مختلف با موضوعات و عناوین مختلف به منظور بالابردن اطلاعات کاربران در حوزه برنامه نویسی و فناوری اطلاعات    </p>
                </div>
            </div> 
        </div>
    </div>
    <hr class="my-4">
    </div>
</div>

</div>
 
  <!--Article -->
<div class="container-fluid padding">
    <div class="group-backgroun">
    <div class="row padding dark">
        <div class="col-md-12 col-lg-6">
            <h2>12 ابزار رایگان برای طراحی API و تست آن</h2>
            <p> ظهور API های RESTful با افزایش ابزارهایی برای ایجاد، آزمایش و مدیریت آنها همراه شده است. فرقی نمی کند که شما یک شخص مبتدی در طراحی API باشید که در حال طراحی اولین API خود هستید یا این که یک فرد متخصص در این حوزه هستید که در کوتاه ترین زمان ممکن می توانید اقدام به طراحی API کنید. در هر صورت این ابزارها می توانند طیف گسترده ای از خدمات را به شما ارائه دهند که بتوانید API خود را از یک مفهوم ساده به یک محصول نهایی تبدیل کنید. شاید برای شما جالب باشد که بدانید بسیاری از این ابزارها نیز کاملا رایگان هستند و استفاده از آنها هیچ هزینه ای را برای شما نخواهد داشت.</p>
            <br>
            <a href="article1.php" type="button" class="btn btn-outline-light btn-lg">بیشتر بخوانید</a>
        </div>
        <div class="col-lg-6 ">
            <img src="img/article/api.jpg" class="img-fluid">
        </div>
    </div>
    <div class="fixed-wrap">
        <div class="fixed">

        </div>
    </div>
</div>
</div>



            
<!--courses-->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h2 class="diplay-4">جدیدترین دوره ها</h2>
            <div class="underline"></div>
        </div>
    </div>
</div>   

<div class="container-fluid padding" dir="rtl">
    <div class="row padding">
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/java-10.jpeg">
                <div class="card-body">
                    <h3 class="card-title">آموزش جاوا</h3>
                    <p class="card-text">آموزش جاوا پیشرفته، تحقق رویای متخصص شدن</p>
                    <p class="card-text">مدرس: مهندس مهدی عباسی </p>
                    <a href="javaCourse.php" class="btn btn-outline-secondary">نمایش دوره</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/p.jpg">
                <div class="card-body">
                    <h3 class="card-title">آموزش پایتون</h3>
                    <p class="card-text">آموزش پایتون با سرفصل های سال 2022</p>
                    <p class="card-text">مدرس: مهندس نیما اکبری</p>

                    <a href="#" class="btn btn-outline-secondary">نمایش دوره</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/b1.jpg">
                <div class="card-body">
                    <h3 class="card-title">آموزش بوت استرپ4</h3>
                    <p class="card-text">آموزش بوت استرپ 4 از مقدماتی تا پیشرفته </p>
                    <p class="card-text">مدرس: مهندس مهدی عباسی </p>
                    <a href="bootstrapCourse.php" class="btn btn-outline-secondary">نمایش دوره</a>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-4">
</div>
<br>

<!--AboutTeachers-->
<div id="teachers">
<div class="container-fluid padding">
    <div class="jumbotron padding">
        <div class="col-12 col-6 text-center">
            <h2 class="diplay-4">مدرسین</h2>
            <div class="underline"></div>
            </div>
            <div class="row m-0">
                <div class="row col-6">
                    <div class="col-4">
                        <img src="img/person/p1.jpg" alt="" srcset="">
                    </div>
                    <div class="col-8">
                        <blockquote>
                            <i class="fas fa-quote-left"></i> مدیر‌ عامل‌ شرکت آریا‌ نرم‌‌ افزار دارنده مدرک کارشناسی‌ ارشد مهندسی کامپیوتر 12‌ سال سابقه تدریس دروس کامپیوتر را در دانشگاههای دولتی، آزاد، پیام‌نور ملایر، شهیدشمسی‌پور تهران و تدریس برنامه‌نویسی
                            در انیستیتو ایزایران، مجتمع فنی و موسسه راه‌آینده تهران دارا میباشد و تا به حال راهنمایی انجمنهای علمی دانشگاه و صدها پروژه دانشجویی را برعهده داشته است.
                            <hr>
                            <cite>
                                - <strong>علیرضا محمدی</strong>، مدرس برتر کشوری در رشته کامپیوتر
                            </cite>
                        </blockquote>
                    </div>
                </div>
                <div class="row col-6">
                    <div class="col-4">
                        <img src="img/person/p2.jpg" alt="" srcset="">
                    </div>
                    <div class="col-8">
                        <blockquote>
                            <i class="fas fa-quote-left"></i> مدیر‌ عامل‌ شرکت آریا‌ نرم‌‌ افزار دارنده مدرک کارشناسی‌ ارشد مهندسی کامپیوتر 12‌ سال سابقه تدریس دروس کامپیوتر را در دانشگاههای دولتی، آزاد، پیام‌نور ملایر، شهیدشمسی‌پور تهران و تدریس برنامه‌نویسی
                            در انیستیتو ایزایران، مجتمع فنی و موسسه راه‌آینده تهران دارا میباشد و تا به حال راهنمایی انجمنهای علمی دانشگاه و صدها پروژه دانشجویی را برعهده داشته است.
                            <hr>
                            <cite>
                                - <strong>نگارعابدی</strong>، مدرس برتر کشوری در رشته کامپیوتر
                            </cite>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>   

    <hr class="my-4">
</div>
</div>
<!--Connect-->
<div id="connect">
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-12">
                <h2>ارتباط باما</h2>
        </div>
        <div class="col-12 social padding">

            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="zeinabmaleki8181@gmail.com"><i class="fab fa-google-plus-g"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/c/Silicium7"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</div>
</div>
<!--Footer-->
<footer>
    <div id="about">
    <div class="container-fluid padding">
    <div class="row text-center">

        <div class="col-md-4">
            <hr class="light">
            <h3>درباره آکادمی</h3>
            <hr class="light">
            <p class="text-center">سازمان علمی و آموزشی «سی ای آکادمی» از جدیدترین وب‌سایت‌های یادگیری آنلاین است که توانسته طی بیش از سه سال فعالیت خود بالغ بر ۱۹,۰۰۰ ساعت آموزش ویدیویی در عنوان علمی، مهارتی و کاربردی را منتشر کند و به بزرگترین پلتفرم آموزشی ایران مبدل شود.</p>
        </div>

        <div class="col-md-4">
            <hr class="light">
            <img src="img/logo/rsz_1logo-removebg-preview_1.png">
            <hr class="light">
            <p class="text-center">021-361-987-76</p>   
            <p class="text-center">CEacademy@gmail.com</p>
            <p class="text-center">CEacademy1twitter@</p>
            <p class="text-center">CEAcademy1@</p>
           </div>

                  <div class="col-md-4">
            <hr class="light">
            <h3>شعبه‌‌های آکادمی</h3>
            <hr class="light">
            <p class="text-center">تهران-سعادت آباد-میدان کاج-پلاک60</p>
            <p class="text-center">مشهد-خیابان شریعتی-پلاک30</p>
            <p class="text-center">کرج-محمدشهر-بلوار امام خمینی-پلاک110</p>
        </div>

        <div class="col-12">
            <hr class="light-100">
            <h5>&copy; CEacademy.com</h5>
        </div>
    </div>
</div>
</div>
</footer>


<script src="jquery.min.3.3.1.js"></script>
<script src="popper.min.js"></script>
<script src="bootstrap.min.js"></script>
<script src="script.js"></script>
</body>
</html>