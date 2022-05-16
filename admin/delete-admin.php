
<?php 
    include('../config/constants.php');
    $id = $_GET['id'];
    // Connect to Sql
    $sql = "DELETE FROM tbl_admin WHERE id=$id";
    $res = mysqli_query($conn,$sql);
    if($res==true)
     {
        $_SESSION['delete'] =  "Admin Deleted Successfully";
        header('location:'.SITEURL.'admin/admin.php');
     }else{
         $_SESSION['delete'] = "Failed to delete admin . try Again later ";
         header('location:'.SITEURL.'admin/admin.php');
     }
     
  
?>
