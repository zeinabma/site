<?php
$database = mysqli_connect("localhost", "root", "", "users data");
mysqli_set_charset($database, "utf8");
if (mysqli_connect_errno()) {
   die("مشکلی در اتصال به دیتابیس وجود دارد");
}
if (isset($_COOKIE["asm1"]) && isset($_COOKIE["ramz1"])) {
   $n = $_COOKIE["asm1"];
   $p = $_COOKIE["ramz1"];
   $data = "select * from users_info where user_name='$n' and user_password='$p'";
   $res = mysqli_query($database, $data);
   $numberof = mysqli_num_rows($res);
   if ($numberof == 1) {
      echo "کاربر $n به سایت خوش امدید";
   } else{
      // nothing
   }
}
