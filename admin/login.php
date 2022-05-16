<?php include('../config/constants.php');?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/login.css">
  </head>
  <body>
    <div class="login-box">
        <h1>Login</h1>
            <?php 
                if(isset($_SESSION['Login']))
                {
                     echo $_SESSION['Login'];
                     unset($_SESSION['Login']);
                }
                if(isset($_SESSION['no-login-message']))
                {
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
            ?>
        <br/>
       <form action="" method="POST"> 
          <div class="textbox">
            
            <input type="text" placeholder="Username" name="username">
          </div>

          <div class="textbox">
            <input type="password" placeholder="Password" name="password">
          </div>

          <input type="submit" name="submit" class="btn" value="Login">
          <p class="text-center">Created By - <a href="zakrearafeek111@gmail.com"> Zakrea rafeek</a></p>
        </form>
    </div>      
  </body>
</html>
<?php 
  if(isset($_POST['submit']))
  {
    echo $username = $_POST['username'];
    echo $password = md5($_POST['password']);
     $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password ='$password'";
     $res = mysqli_query($conn,$sql);
     $count = mysqli_num_rows($res);
     if($count==1)
     {
       $_SESSION['Login'] ="Login Successfull.";
       $_SESSION['user'] = $username;
       header('location:'.SITEURL.'admin/index.php');

     }else{
       $_SESSION['Login'] = "<span style='color:#e40404' >username or password did not match</span> ";
       header('location:'.SITEURL.'admin/login.php');
     }
  }
  


?>
