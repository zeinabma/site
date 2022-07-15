<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
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
                <h2 class="toggle-reg"> ثبت نام </h2>
            </div>
            <form action="Register.php" method="POST">


                <form action="Register.php" id="register" class="input-group" method="POST">
                    <input type="text" class="input-field" placeholder="نام کاربری" name="user_name" required>
                    <input type="email" class="input-field" placeholder="ایمیل" name="email" required>
                    <input type="password" class="input-field" placeholder="رمز عبور" name="user_password" required>
                    <input type="checkbox" class="check-box" name="agree_rules">
                    <span>
                        قوانین و مقررات سایت را می پذیرم
                    </span>
                    <button type="submit" class="submit-btn" name="submit">ثبت نام</button>

                </form>
                <div class="box-submit text-center">
                    <a href="login.php">حساب کاربری دارید؟</a>

                </div>
            </form>
        </div>
    </div>
    <?php
    $database = mysqli_connect("localhost", "root", "", "users data");
    mysqli_set_charset($database,"utf8");
    if (isset($_POST['submit'])) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $uname = $_POST['user_name'];
            $uemail = $_POST['email'];
            $upassword = $_POST['user_password'];
            if (!empty($uname) and !empty($uemail) and !empty($upassword) and !is_numeric($uname)) {
                if (!empty($_POST["agree_rules"])) {
                    if ((!mysqli_num_rows(mysqli_query($database, ("select * from users_info where user_name='$uname' or user_email='$uemail'")))) > 0) {
                        $data = "insert into users_info (user_name,user_password,user_email) values ('$uname','$upassword','$uemail')";
                        if (mysqli_query($database, $data)) {
                           setcookie("asm1",$uname,time() + (86400 * 30));
                           setcookie("ramz1",$upassword,time() + (86400 * 30));
                           header('Location: ./home.php');
                           die();
                        } else {
                            echo "در ذخیره ی اطلاعات شما مشکلی پیش امده است";
                        }
                    } else {
                        echo "نام کاربری یا ایمیل انتخاب شده از قبل ثبت شده است";
                    }
                } else {
                    echo "لطفا تیک قوانین و مقررات سایت را می پذیرم را بزنید";
                }
            } else {
                echo "اطلاعات وارد شده معتبر نمیباشد";
            }
        }
    }
    ?>

</body>

</html>