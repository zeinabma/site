<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha512-Ua/7Woz9L5O0cwB/aYexmgoaD7lw3dWe9FvXejVdgqu71gRog3oJgjSWQR55fwWx+WKuk8cl7UwA1RS6QCadFA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/js/all.js">
   <link rel="stylesheet" href="stylelogin.css">
   <link rel="stylesheet" href="bootstrap-rtl.css">
   <link rel="stylesheet" href="bootstrap-rtl.min.css">
</head>

<body class="rtl">

   <div class="main-box">
      <div class="form-box">
         <div class="login-box">
            <h2 class="toggle-login">ورود</h2>
         </div>
         <form action="login.php" method="POST">
            <form action="login.php" id="login" class="input-group" method="POST">
               <input type="text" class="input-field" placeholder="نام کاربری" name="username" required>
               <input type="password" class="input-field" placeholder="رمز عبور" name="password" required>
               <input type="checkbox" class="check-box" name="remember_account">
               <span>
                  مرا به خاطر بسپار
               </span>
               <button type="submit" class="submit-btn" name="login_btn">ورود</button>
            </form>
            <div class="box-submit text-center">
               <a href="Register.php">هنوز ثبت نام نکرده اید؟</a>

            </div>

         </form>
         </form>
      </div>
   </div>
</body>
<?php
$database = mysqli_connect("localhost", "root", "", "users data");
mysqli_set_charset($database, "utf8");
if (mysqli_connect_errno()) {
   die("مشکلی در اتصال به دیتابیس وجود دارد");
}

if (isset($_COOKIE["asm"]) && isset($_COOKIE["ramz"])) {
   $kname = $_COOKIE["asm"];
   $pass = $_COOKIE["ramz"];
   $kdata = "select * from users_info where user_name='$kname' and user_password='$pass'";
   $knumberof = mysqli_num_rows(mysqli_query($database, $kdata));
   if ($knumberof == 1) {
      setcookie("asm1",$name,time() + (86400 * 30));
      setcookie("ramz1",$password,time() + (86400 * 30));
      header('Location: ./home.php');
      die();
   }
} elseif (!isset($_COOKIE["name"])) {
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST["username"];
      $password = $_POST["password"];
      if (!empty($name) and !empty($password) and !is_numeric($name)) {
         if (isset($_POST["remember_account"])) {
            $data = "select * from users_info where user_name='$name' and user_password='$password'";
            $res = mysqli_query($database, $data);
            $numberof = mysqli_num_rows($res);
            if ($numberof == 1) {
               setcookie("asm1",$name,time() + (86400 * 30));
               setcookie("ramz1",$password,time() + (86400 * 30));
               setcookie("asm", $name, time() + (86400 * 30));
               setcookie("ramz", $password, time() + (86400 * 30));
               header('Location: ./home.php');
               die();
            } else {
               echo "اکانت وارد شده وجود ندارد لطفا ثبت نام کنید";
            }
         } elseif (!isset($_POST["remember_account"])) {
            $data = "select * from users_info where user_name='$name' and user_password='$password'";
            $res = mysqli_query($database, $data);
            $numberof = mysqli_num_rows($res);
            if ($numberof == 1) {
               setcookie("asm1",$name,time() + (86400 * 30));
               setcookie("ramz1",$password,time() + (86400 * 30));
               header('Location: ./home.php');
               die();
            } else {
               echo "اکانت وارد شده وجود ندارد لطفا ثبت نام کنید";
            }
         } else {
            echo "اطلاعات وارد شده معتبر نمیباشد";
         }
      }
   }
}
?>

</html>