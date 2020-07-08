<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <script src="https://kit.fontawesome.com/2d0f11d24e.js" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
      <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&display=swap" rel="stylesheet">
    <style>



        @import url("https://fonts.googleapis.com/css?family=Montserrat");
* {
  outline: none;
}

*,
*:before,
*:after {
  box-sizing: inherit;
}

/* html, */
body {
  /* box-sizing: border-box; */
  margin: 0;
  padding: 0;
  transition: 0.5s;
  background: #ffffff;
  cursor: default;
  font-family: "Montserrat", sans-serif;
  font-size: 1rem;
}



h3 {
  color: #ffb300;
  margin: 10px 0;
  text-transform: lowercase;
  font-size: 1.25rem;
}

.resume {
  width: 860px;
  height: 500px;
  background: #1a237e;
  /* background: #1a237e; */
  color: #ffffff;
  margin: 20px auto;
  box-shadow: 10px 10px #0e1442;
  position: relative;
  /* display: -webkit-box; */
  display: flex;
  justify-content: center;
  /* text-align: center; */
}


    </style>
</head>
<body>
<?php
//因為查題的登入功能比較簡單，所以直接在本頁面處理
//也可以另外做一支API來專門處理登入功能
include_once "base.php";

if(!empty($_POST['acc']) && !empty($_POST['pw'])){
    $admin=new DB("admin");
    $acc=$_POST['acc'];
    $pw=$_POST['pw'];
    $chk=$admin->count(['acc'=>$acc,'pw'=>$pw]);
    if($chk>0){
        to("admin.php");
        $_SESSION['login']=$acc;
    }else{
        echo "<script>alert('帳號或密碼錯誤')</script>";
    }
}
?>
    <div class="resume">
      <form method="post" action="login.php">
      
        <h3>管理登入：</h3>
    <p>帳號：<input type="text" name="acc" autofocus=""></p>
    <p>密碼：<input type="password" name="pw"></p>
    <input value="登入" type="submit"><input type="reset" value="清除">
    </form>
    </div>
  

</body>
</html>

            