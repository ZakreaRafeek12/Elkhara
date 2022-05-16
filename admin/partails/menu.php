<?php 
    include('../config/constants.php'); 
    include('login-check.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page admin</title>
    <link rel="stylesheet" href="../css/style2.css"/>
</head>
<body>
    <header id="header">
        
        <h2 class="logo">
            <img class="img-logo" src="../image/IMG_20220211_151434_186.png"/>
        </h2>
       
       <ul>
           <li><a href="index.php" class="active">Home</a></li>
           <li><a href="admin.php">Admin</a></li>
           <li><a href="category.php">category</a></li>
           <li><a href="logout.php">Logout</a></li>
       </ul>
   </header>