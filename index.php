<?php include('config/constants.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web site</title>
    <link rel="stylesheet" href="./css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
</head>
<body>
    <!-- start header -->
    <div class="fixed">
        <header id="header">
            
            <h2 class="logo">
                <img class="img-logo" src="./image/IMG_20220211_151434_186.png" alt=""/>
            </h2>
            
            <ul>
                <li><a href="#main" class="active">Home</a></li>
                <li><a href="#categories">Prodect</a></li>
                <li><a href="#quailty">Services</a></li>
                <li><a href="#contact">About us</a></li>
                <li><a href="#footer">Contact</a></li>
            </ul>
        </header>
    </div>
    <!-- end header -->
    <!-- start main -->
    <section class="main" id="main">
        <img src="./image/stars1.png" id="star" alt=""/>
        <h2 class="Riviera">RiVieRa</h2>
        <img src="./image/moon2.png" id="moon2" alt=""/>
        <img src="./image/mountains3.png" id="mountains3" alt=""/>
        <img src="./image/mountains4.png" id="mountains4" alt=""/>
        <img src="./image/river5.png" id="rivers" alt=""/>
        <img src="./image/boat6.png" id="boat" alt=""/>
        <img src="./image/mountains7.png" id="mountains7" alt=""/>
    </section>
    <!-- end main -->
    <!-- start slider -->
    <section class="home">
        <div class="slider">
            <div class="slide active" style="background-image: url('image/1\ \(1\).jpeg')">
                <div class="container1">
                    <div class="caption">
                        <h1>1. Winter Collection 2020</h1>
                        <p>Lorem ipsum dummy text goes here.</p>
                        <a href="">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image: url('image/1\ \(4\).jpeg')">
                <div class="container1">
                    <div class="caption">
                        <h1>1. Winter Collection 2020</h1>
                        <p>Lorem ipsum dummy text goes here.</p>
                        <a href="">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image: url('image/1\ \(2\).jpeg')">
                <div class="container1">
                    <div class="caption">
                        <h1>2. Winter Collection 2020</h1>
                        <p>Lorem ipsum dummy text goes here.</p>
                        <a href="">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image: url('image/1\ \(3\).jpeg')">
                <div class="container1">
                    <div class="caption">
                        <h1>3. Winter Collection 2020</h1>
                        <p>Lorem ipsum dummy text goes here.</p>
                        <a href="">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- controls  -->
        <div class="controls">
            <div class="prev"><</div>
            <div class="next">></div>
        </div>
        <div class="indicator"></div>
        <!-- indicators -->
    </section>

    <!-- end slider -->
    <!-- Start container -->
    <section class="categories" id="categories">
        <div class="container">
            <?php
               $sql = "SELECT * FROM tbl_category WHERE active='Yes'AND featured='Yes'";
               $res = mysqli_query($conn,$sql);
               $count = mysqli_num_rows($res);
                if($count>0)
                {
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                            ?>
                                <div class="container-box" data-aos="fade-up-right">
                                    <div class="img-box">
                                        <?php
                                            if($image_name=="")
                                            {
                                                echo "<div class='error'>Image Not Available </div>";
                                            }
                                            else
                                            {
                                                ?>
                                                    <img src="<?php echo SITEURL; ?>image/category/<?php echo $image_name; ?> " class="img-box" alt="Pizza">
                                                <?php
                                            }
                                        ?>
                                    </div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <div class="text-center">
                                            <h3 class="text-center"><?php echo $title; ?> </h3>
                                    </div>
                                    <div class="btn">
                                        <input type="button" value="View" />
                                        <input type="button" value="View" />
                                    </div>
                                </div>
                            <?php
                    }
                }
                else
                {
                    echo "<div class='error'>Category Not  Added</div>";
                }
            ?>
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- end container -->
    <!-- start quialty -->
    <section class="quailty" id="quailty">
        <div class="width-span">
            <h2>Quality</h2>
            <div class="progress">
                <span style="width:0" data-width="80%" class="eight"></span>
            </div>
        </div>
        <div class="width-span">
            <h2>Service</h2>
            <div class="progress">
                <span style="width:0" data-width="80%" class="eight"></span>
            </div>
        </div>
        <div class="width-span">
            <h2>Cotton</h2>
            <div class="progress">
                <span style="width:0" data-width="100%" class="ten"></span>
            </div>
        </div>
        <div class="width-span">
            <h2>Service</h2>
            <div class="progress">
                <span style="width:0" data-width="90%" class="nine"></span>
            </div>
        </div>
    
    </section>
    <section class="cards contact" id="contact" >
        <h2 class="title">Let's work together</h2>
        <div class="content">
            <a href="https://web.whatsapp.com/" target="black">
                <div class="card" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <div class="icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="info">
                        <h3>Phone</h3>
                        <p>+201012311022</p>
                    </div>
                </div>
            </a>
            <a href="https://mail.google.com/" target="black">
                <div class="card" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <div class="icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="info">
                        <h3>Email</h3>
                        <p>Shadyali279@icloud.com</p>
                    </div>
                </div>
            </a>
        </div>
    </section>
    <!-- end contact -->
    <!-- start footer -->
    <footer class="footer" id="footer">
        <p class="footer-title">Copyrights @ <span>Shady Ali AboShadi</span></p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </footer>
    <!-- end footer -->


    <!-- javascript -->
    <script src="script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
</body>
</html>