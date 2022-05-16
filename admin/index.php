<?php include('partails/menu.php');?>
   <div class="main-content">
            <div class="wrapper1">
                <h1 style="color:#4cc952">
                    <?php
                        if(isset($_SESSION['Login']))
                        {
                            echo $_SESSION['Login'];
                            unset($_SESSION['Login']);
                        }   
                    ?>
                </h1>
                <div>
                    <h1 class="text-center">Dashboard</h1>
                </div>
                <br/></br></br>
                <div class="col-4 text-center">
                    <h1>5</h1>
                    <br/>
                    Categories
                </div>
                <div class="col-4 text-center">
                    <h1>5</h1>
                    <br/>
                    Categories
                </div>
                <div class="col-4 text-center">
                    <h1>5</h1>
                    <br/>
                    Categories
                </div>
                <div class="col-4 text-center">
                    <h1>5</h1>
                    <br/>
                    Categories
                </div>
                <div class="clearfix"></div>
            </div>
    </div>
<?php include('partails/footer.php');?>
   <!-- start footer -->
   