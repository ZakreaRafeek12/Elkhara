<?php include('partails/menu.php');?>
    <div class="wrapper1">
        <br>
        <h1>Add admin</h1>
        <br><br>
        <form action="" method="POST">
        <table class="tbl-30">
            <tr>
                <td>Fullname</td>
                <td><input type="text" name="full_name" placeholder="E.x Zakrea Rafeek"/></td>
            </tr>
            <tr>
            <td>username</td>
                <td><input type="text" name="username" placeholder="please Enter UserName"/></td>
            </tr>
            <tr>
            <td>Password</td>
                <td><input type="password" name="password" placeholder="Enter password"/></td>
            </tr>
            <tr colspan="2">
                <td><input type="submit" name="submit" value="Add Admin" class="btn-secandry" href="./admin.php"/></td>
            </tr>

        </table>
    </form>
    </div>
<?php include('partails/footer.php');?>
<?php 
if(isset($_POST['submit']))
{
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    // sql 
    $sql = "INSERT INTO tbl_admin SET 
        full_name = '$full_name',
        username = '$username',
        password ='$password'
    ";
    // excuting  query saving data into database
        $res = mysqli_query($conn,$sql) or die(mysqli_error());
    // check database data inserted or  not
    if($res==TRUE){
        $_SESSION['add'] = "Admin Added Successfully";
        header("location:".SITEURL.'admin/admin.php');
    }
    else{
        $_SESSION['add'] = "failed to add admin";
        header("location:".SITEURL.'admin/add-admin.php');
    }
    
       
}
?>