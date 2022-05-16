<?php include('partails/menu.php');?>

    <div class="main-content">
        <div class="wrapper1">
            <h1>Change password</h1>

            <?php 
                if(isset($_GET['id']))
                {
                    $id=$_GET['id'];
                }
            
            ?>
            <form action="" method="POST">
                <table class="tbl-30">
                    <tr>
                        <td>Current password</td>
                        <td> 
                            <input type="password" name="current_password" placeholder="old password"/>
                        </td>
                    </tr>
                    <tr>
                        <td> New password:</td>
                        <td>
                            <input type="password" name="new_password" placeholder="New password"/>
                        </td>
                    </tr>
                    <tr>
                        <td> Conforim password::</td>
                        <td>
                            <input type="password" name="conforim_password" placeholder="conforim password"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                            <input type="submit" name="submit" value="Change" class="btn-secandry"/>
                        </td>
                    </tr>

                </table>
        </div>
    </div>
    <?php
        if(isset($_POST['submit']))
        {
            $id = $_POST['id'];
            $current_password = md5($_POST['current_password']);
            $new_password = md5($_POST['new_password']);
            $conforim_password = md5($_POST['conforim_password']);
            $sql = " SELECT * FROM tbl_admin WHERE id=$id AND password='$current_password' " ;
            $res= mysqli_query($conn,$sql);
            if($res==true)
            {
                $count=mysqli_num_rows($res);
                if($count==1)
                {
                    if($new_password==$conforim_password)
                    {
                        $sql2 = "UPDATE tbl_admin SET 
                            password = '$new_password'
                            WHERE id=$id
                        
                        ";
                        $res2=mysqli_query($conn,$sql2);
                        if($res2)
                        {
                            $_SESSION ['change-pwd'] = "<div> password changed .</div>";
                            header('location:'.SITEURL.'admin/admin.php');
                        }
                        else
                        {
                            $_SESSION ['change-pwd'] = "<div> failed to change pwd .</div>";
                            header('location:'.SITEURL.'admin/admin.php');
                        }
                    }
                    else
                    {
                        $_SESSION ['pwd-not-match'] = "<div> password did not patch .</div>";
                        header('location:'.SITEURL.'admin/admin.php');
                    }
                }
                else{
                    $_SESSION['user-not-found'] = " <div> User Not Found </div>";
                    header('location:'.SITEURL.'admin/admin.php');
                }
                
               
            }
        }
        
    
    
    
    ?>

<?php include('partails/footer.php');?>