<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>articles</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha512-Ua/7Woz9L5O0cwB/aYexmgoaD7lw3dWe9FvXejVdgqu71gRog3oJgjSWQR55fwWx+WKuk8cl7UwA1RS6QCadFA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-rtl.css">
    <link rel="stylesheet" href="bootstrap-rtl.min.css">

</head>
<body dir="rtl">
          
    <!--Navbar-->
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="img/rsz_logo-removebg-preview_1.png"></a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>  
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mr-auto">
        
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">خانه</a>
                </li> 
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    دوره ها
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="cssCourse.php">دوره htm/css</a>
                      <a class="dropdown-item" href="bootstrapCourse.php">دوره bootstrap</a>
                      <a class="dropdown-item" href="xdCourse.php">دوره adobe xd</a>
        
                  </li>
        
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    خدمات
                    </a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">وبینارها</a>
                      <a class="dropdown-item" href="#">مقالات</a>
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

        <!-- top -->


        <div class="col-md-4">
            <h3 class="display-1">مقالات آکادمی</h3>
            
  </div>
<hr class="my-4">

<!-- articles -->
        <div class="container-fluid padding" dir="rtl">
            <div class="row padding">
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="img/article/api.jpg">
                        <div class="card-body">
                            <h3 class="card-title">12 ابزار رایگان برای طراحی API و تست آن</h3>
                            <p class="card-text">ظهور API های RESTful با افزایش ابزارهایی برای ایجاد، آزمایش و مدیریت آنها همراه شده است. فرقی نمی کند که شما یک شخص مبتدی در طراحی..</p>
<!--                             <p class="card-text">مدرس: مهندس مهدی عباسی </p>
 -->                            <a href="article1.php" class="btn btn-outline-secondary">نمایش مقاله</a>
                        </div>
                    </div>
                </div>
        
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="img/article/tech.jpg">
                        <div class="card-body">
                            <h3 class="card-title">آشنایی با ترندهای تکنولوژی در سال 2022</h3>
                            <p class="card-text">امروزه صنعت تکنولوژی روز به روز در حال پیشرفت است و شاهد آن هستیم که هر روزه ترندهای تکنولوژی در حال پیشرفت هستند..</p>
<!--                             <p class="card-text">مدرس: مهندس نیما اکبری</p>
 -->        
                          <a href="article2.php" class="btn btn-outline-secondary">نمایش مقاله</a>
                        </div>
                    </div>
                </div>
        
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="img/article/method.jpg">
                        <div class="card-body">
                            <h3 class="card-title">متدولوژی agile چیست؟ توسعه نرم افزار مدرن</h3>
                            <p class="card-text">شاید باور کردن این مسئله بسیار سخت باشد که امسال متدولوژی agile  بیست ساله شد. این روش در واقع ..</p>
<!--                             <p class="card-text">مدرس: مهندس مهدی عباسی </p>
 -->                            <a href="#" class="btn btn-outline-secondary">نمایش مقاله</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-4">
        </div>
        
      
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
      

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