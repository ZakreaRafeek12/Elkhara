<?php 
    include('../config/constants.php');

?>

<?php 
    if(isset($_GET['id']) AND isset($_GET['image_name']))
    {
        $id = $_GET['id'];
        $image_name = $_GET['image_name'];
        if($image_name!="")
        {
            $path = "../image/category/".$image_name;
            $remove = unlink($path);

            if($remove==false)
            {
                $_SESSION['remove'] = "<div class='eroor'>FAiled toremove category image .<?div>";
                header('location:'.SITEURL>'admin/category.php');
                die();
            }
        }
        $sql = "DELETE FROM tbl_category WHERE id=$id";
        $res = mysqli_query($conn,$sql);
        if($res==true){
            $_SESSION['delete'] = "<div color='green;' class='success'>Category Deleted Successfully .</div>";
            header('location:'.SITEURL.'admin/category.php');
        }
        else
        {
            $_SESSION['delete'] = "<div color='red;' class='error'>Failed to deleted category .</div>";
            header('location:'.SITEURL.'admin/category.php');
        }
    }
    else
    {
        header('location:'.SITEURL.'admin/category.php');
    }
?>