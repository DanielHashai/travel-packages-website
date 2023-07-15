<?php
session_start();
$user = "";
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css" />
    <title>home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>

<body>


    <?php if ($user) { ?>

        <section class="header">

            <a href="home.php" class="logo">travel</a>

            <nav class="navbar">
                <a href="home.php">home</a>
                <a href="about.php">about</a>
                

                <a href="book.php">book</a>
                <a href="logout.php" >logout</a>
            </nav>

            <div id="menu-btn" class="fas fa-bars"></div>



        </section>


        <section class="home">
            <div class="swiper home-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide" style="background: url(./assets/hiking-mountain-background_608812-428.avif) no-repeat">
                        <div class="content">
                            <span>explore , discover , travel</span>
                            <h3>travel around the world</h3>
                            <a href="home.php" class="btn ">discover more</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide" style="background: url(./assets/istockphoto-1151367251-612x612.jpg) no-repeat">
                        <div class="content">
                            <span>explore , discover , travel</span>
                            <h3>discover the new places</h3>
                            <a href="home.php" class="btn ">discover more</a>
                        </div>
                    </div>
                    <div class="swiper-slide slide" style="background: url(./assets/brown-cardboard-boxes-craft-paper-table_88281-3807.avif) no-repeat">
                        <div class="content">
                            <span>explore , discover , travel</span>
                            <h3> new travel packages</h3>
                            <a href="home.php" class="btn ">discover more</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>

        <section class="services">
            <h1 class="heading-title">our services</h1>
            <div class="box-container">
                <div class="box">

                    <img src="./assets//forest.png" alt="">
                    <h3>adventure</h3>
                </div>
                <div class="box">

                    <img src="./assets/tour-guide.png" alt="">
                    <h3>tour guide</h3>
                </div>
                <div class="box">

                    <img src="./assets/bag.png" alt="">
                    <h3>trekking</h3>
                </div>
                <div class="box">

                    <img src="./assets/camp-fire.png" alt="">
                    <h3>camp fire </h3>
                </div>
                <div class="box">

                    <img src="./assets/sand.png" alt="">
                    <h3>off road</h3>
                </div>
                <div class="box">

                    <img src="./assets/trekking.png" alt="">
                    <h3>camping</h3>
                </div>
            </div>
        </section>


        <div class="container" style="padding-bottom: 50px;">
            <div class="row">
                <div class="col">

                    <img style="width: 100%; height:100%" src="./assets/1-1.jpg" alt="">

                </div>
                <div class="col">
                    <div class="content" style="font-size: 15px;">
                        <h3>about us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis vitae nobis necessitatibus dicta blanditiis tempora consectetur maiores placeat minus dolorem! Explicabo tempora assumenda, maiores tempore sequi aut ut hic voluptatibus.</p>
                        <a href="about.php">read more </a>
                    </div>
                </div>
            </div>

        </div>


        <section class="home-packages">
            <h1 class="heading-title">Packages</h1>
            <div class="box-container">
                <div class="box">
                    <div class="image">
                        <img src="./assets/download (3).jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>Beach Adventure</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste natus nam accusantium consequatur, architecto magnam praesentium dolores eos maxime iusto.</p>
                        <a href="book.php" class="btn">Book now</a>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="./assets/download (6).jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>Mountain Adventure</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste natus nam accusantium consequatur, architecto magnam praesentium dolores eos maxime iusto.</p>
                        <a href="book.php" class="btn">Book now</a>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="./assets/download (5).jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3> City Adventure</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste natus nam accusantium consequatur, architecto magnam praesentium dolores eos maxime iusto.</p>
                        <a href="book.php" class="btn">Book now</a>
                    </div>
                </div>


            </div>
            <!-- <div class="load-more"><a href="package.php" class="btn">load more</a></div> -->
        </section>


        <section class="home-offer">
            <div class="content">
                <h3>upto 50% off</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium id maiores similique delectus ipsum dolor, doloribus dignissimos ex nulla incidunt blanditiis quibusdam accusantium tempora. Maiores quibusdam molestiae deserunt beatae velit.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </section>



        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>quick links</h3>
                    <a href="home.php ">home</a>
                    <a href="about.php"><i class="fas fa-angle-right"> </i> about</a>
                    <a href="package.php"><i class="fas fa-angle-right"> </i> package</a>
                    <a href="book.php"><i class="fas fa-angle-right"> </i> book</a>
                </div>
                <div class="box">
                    <h3>extra links</h3>
                    <a href="#"><i class="fas fa-angle-right"> </i>ask questions</a>
                    <a href="#"><i class="fas fa-angle-right"> </i>about us</a>
                    <a href="#"><i class="fas fa-angle-right"> </i>privacy policy</a>
                    <a href="#"><i class="fas fa-angle-right"> </i>terms of use</a>

                </div>
                <div class="box">
                    <h3>contact info</h3>
                    <a href="#"><i class="fas fa-phone"> </i>+972508260440</a>
                    <a href="#"><i class="fas fa-phone"> </i>+972508260430</a>
                    <a href="#"><i class="fas fa-envelope"> </i>danielhashai.dh@gmail.com</a>
                    <a href="#"><i class="fas fa-envelope"> </i>aaronhashai@gmail.com</a>
                    <a href="#"><i class="fas fa-map"> </i>israel , ukraine , united states</a>


                </div>
                <div class="box">
                    <h3>follow us</h3>
                    <a href="#"><i class="fab fa-facebook-f"> </i>facebook</a>
                    <a href="#"><i class="fab fa-twitter"> </i>twitter</a>
                    <a href="#"><i class="fab fa-instagram"> </i>instagrem</a>
                    <a href="#"><i class="fab fa-linkedin"> </i>linkedin</a>



                </div>


            </div>
            <!-- <div class="credit">created by <span>mr full stack developer</span>| all rights reserved</div> -->

        </section>

    <?php } else { ?>

        <?php header("Location:login.php") ?>


    <?php } ?>

    ?>




    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="./js//script.js"></script>
</body>

</html>