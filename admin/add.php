<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Add</title>

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
        <a href="#.php" class="logo">Ayaya</a>
        <nav class="navbar">
            <a href="admin_home.php">Dashboard</a>
            <a href="ticket.php">Ticket</a>
            <a class="active" href="add.php">Add Customer</a>
            <a class="act" href="../dashboard.php">log out</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- booking section starts -->
    <section class="booking">
        <h1 class="heading-title">book a trip!</h1>
        <form action="add_data.php" method="POST" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>name:</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>
                <div class="inputBox">
                    <span>email:</span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>
                <div class="inputBox">
                    <span>phone:</span>
                    <input type="number" placeholder="enter your number" name="phone">
                </div>
                <div class="inputBox">
                    <span>address:</span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>
                <div class="inputBox">
                    <span>where to:</span>
                    <input type="text" placeholder="place you want to visit" name="location">
                </div>
                <div class="inputBox">
                    <span>how many:</span>
                    <input type="number" placeholder="number of guests" name="guests">
                </div>
                <div class="inputBox">
                    <span>arrivals:</span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <span>departure:</span>
                    <input type="date" name="departure">
                </div>
            </div>
            <input type="submit" value="submit" class="btn" name="send">
        </form>
    </section>

    <!-- swiper js link -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="../js/script.js"></script>
</body>

</html>