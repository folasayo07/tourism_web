<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AYAYA | About</title>

    <!--  swiper css link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!--    header section starts  -->
    <section class="header">
        <a href="home.php" class="logo">Ayaya</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a class="active" href="about.php">about</a>
            <a href="destination.php">destination</a>
            <a href="booking.php">book</a>
            <a href="ticket.php">ticket</a>
            <a class="act" href="logout.php">log out</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars">

        </div>
    </section>

    <!--    header section ends  -->
    <div class="heading" style="background:url(../images/bg2.jpg) no-repeat">
        <h1>about us</h1>
    </div>

    <!--  about section starts -->
    <section class="about">
        <div class="image">
            <img src="../images/c1.jpg" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure mollitia eius
                dicta tempora repellat qui expedita nihil odit pariatur sed!</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam, similique fuga molestias facilis sunt culpa. Fugit minima rem
                laboriosam id, ipsa magni cumque accusamus et dicta soluta quam non quisquam!</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, a nemo similique optio ex eius placeat asperiores, neque consectetur officia eaque sint maiores accusamus ut, nihil sunt eum nisi explicabo. Aliquid atque fugiat,
                fuga dicta ab nesciunt aperiam nostrum, accusamus quisquam voluptates hic sequi autem dolore ipsam amet excepturi tenetur!</p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-map"></i>
                    <span>top destinations</span>
                </div>

                <div class="icons">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>affordable price</span>
                </div>

                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 guide service</span>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section starts -->
    <?php
    require 'footer.php';
    ?>
    <!-- footer section ends -->

    <!-- swiper js link -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="../js/script.js"></script>
</body>

</html>