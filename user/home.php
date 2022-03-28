<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AYAYA | Home</title>

    <!--  swiper css link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>


    <!--    header section  -->
    <section class="header">
        <a href="home.php" class="logo">Ayaya</a>
        <nav class="navbar">
            <a class="active" href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="destination.php">destination</a>
            <a href="booking.php">book</a>
            <a href="ticket.php">ticket</a>
            <a class="act1" href="logout.php">log out</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!--  header section end  -->

    <!--  home section starts -->
    <section class="home">
        <div class="home-slide">
            <div class="wrapper">
                <div class="slide" style="background:url(../images/bg3.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>discover the best lovely places</h3>
                        <a href="destination.php" class="btn">explore now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  home section end -->

    <!-- home about section starts -->
    <section class="home-about">
        <div class="image">
            <img src="../images/c1.jpg" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Nihil eaque excepturi velit quam. Deleniti neque non perferendis
                veritatis incidunt ea sed magnam recusandae! Minus eveniet quis,
                maxime quae cum autem!Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa,
                debitis in voluptate quaerat eum voluptatum esse, aliquam dolorem, ipsam eaque natus cumque nulla.
            </p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>
    <!-- home about section ends -->

    <!-- home package section starts -->
    <section class="home-packages">
        <h1 class="heading-title">offers and packages</h1>
        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="../images/bg1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus omnis repellat
                        necessitatibus consequatur, officiis eos pariatur cum corrupti suscipit expedita, eligendi porro.
                    </p>
                    <a href="booking.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../images/bg2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus omnis repellat
                        necessitatibus consequatur, officiis eos pariatur cum corrupti suscipit expedita, eligendi porro</p>
                    <a href="booking.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../images/bg4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus omnis repellat
                        necessitatibus consequatur, officiis eos pariatur cum corrupti suscipit expedita, eligendi porro.</p>
                    <a href="booking.php" class="btn">book now</a>
                </div>
            </div>
        </div>
        <div class="load-more"><a href="destination.php" class="btn">load more</a></div>
    </section>
    <!--  home package section ends -->

    <!-- home offer section starts -->
    <!-- services section starts -->
    <section class="services">
        <h1 class="heading-title">our services </h1>
        <div class="box-container">
            <div class="box">
                <img src="../images/icons/icon1.png" alt="">
                <h3>adventure</h3>
            </div>
            <div class="box">
                <img src="../images/icons/icon2.png" alt="">
                <h3>tour guide</h3>
            </div>
            <div class="box">
                <img src="../images/icons/icon3.png" alt="">
                <h3>trekking</h3>
            </div>
            <div class="box">
                <img src="../images/icons/icon4.png" alt="">
                <h3>camp fire</h3>
            </div>
            <div class="box">
                <img src="../images/icons/icon5.png" alt="">
                <h3>off road</h3>
            </div>
            <div class="box">
                <img src="../images/icons/icon6.png" alt="">
                <h3>camping</h3>
            </div>
        </div>
    </section>
    <!-- services section ends -->
    <!-- home offer section ends -->

    <!--  review section starts -->
    <section class="reviews">
        <h1 class="heading-title">reviews!</h1>
        <div class="reviews-slider">
            <div class="wrapper">

                <div class="slide">
                    <h3>john deo</h3>
                    <img src="../images/speaker2.jpg" alt="">
                    <span>traveler</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quas ratione odit sint tempora eaque non?</p>
                </div>
                <div class="slide">
                    <h3>john deo</h3>
                    <img src="../images/speaker1.jpg" alt="">
                    <span>traveler</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quas ratione odit sint tempora eaque non?</p>
                </div>
                <div class="slide">
                    <h3>john deo</h3>
                    <img src="../images/speaker3.jpg" alt="">
                    <span>traveler</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quas ratione odit sint tempora eaque non?</p>
                </div>
            </div>
        </div>
    </section>
    <!-- review section ends -->

    <!-- footer section starts -->
    <?php
    require 'footer.php';
    ?>
    <!-- footer section ends -->

    <!-- swiper js link -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->

    <!-- custom js file link -->
    <script src="../js/script.js"></script>
</body>

</html>