<?php include('partails/menu.php');?>
    <div class="main-content">
        <div class="wrapper1">
            <h1>Update Admin </h1>
            <br>
            <?php
                $id=$_GET['id'];
                $sql="SELECT * FROM tbl_admin";
                $res=mysqli_query($conn,$sql);
                if($res==true)
                {
                    $count = mysqli_num_rows($res);
                    if($count==1)
                    {
                        $row=mysqli_fetch_assoc($res);
                        $full_name = $row['full_name'];
                        $username = $row['username'];
                    }
                    else
                    {
                        header('location:'.SITEURL.'admin/admin.php');
                    }
                }
            
            
            
            
            ?>
            <form action="" method="POST">
                <table class="tbl-full">
                    <tr>
                        <td>Full name: </td>
                        <td>
                            <input type="text" name="full_name" <?php echo $full_name; ?>/>
                        
                        </td>
                    </tr>
                    <tr>
                        <td>username: </td>
                        <td>
                            <input type="text" name="username" <?php echo $username; ?>/>
                        
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="submit" name="submit"  value="Update Admin" class="btn-secandry"/>
                        
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

    <?php
        if(isset($_POST['submit']))
        {  
            $id = $_POST['id'];
            $full_name = $_POST['full_name'];
            $username = $_POST['username'];
            $sql = "UPDATE tbl_admin SET 
                full_name = '$full_name',
                username = '$username'
                WHERE id='$id'
            ";
             $res=mysqli_query($conn,$sql);
             if($res==true)
             {
                 $_SESSION['update'] = "<div>Admin Update Successfully.</div>";
                 header('location:'.SITEURL.'admin/admin.php');
             }
             else
             {
                $_SESSION['update'] = "<div> failed to update Admin.</div>";
                header('location:'.SITEURL.'admin/admin.php');
             }
        }
        else
        {
            
        }
    
    
    ?>
<?php  include('partails/footer.php'); ?>