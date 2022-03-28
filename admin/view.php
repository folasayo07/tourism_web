<?php

// Check existence of id parameter before processing further

if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    // Include config file
    require_once "config.php";

    // Prepare a select statement
    $query = "SELECT * FROM book_data WHERE id = ?";

    if ($stmt = mysqli_prepare($connection, $query)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);

        // Set parameters
        $param_id = trim($_GET["id"]);

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) == 1) {
                /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                // Retrieve individual field value
                $name = $row['name'];
                $email = $row['email'];
                $phone = $row['phone'];
                $address = $row['address'];
                $location = $row['location'];
                $guests = $row['guests'];
                $arrivals = $row['arrivals'];
                $departure = $row['departure'];
            } else {
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }

    // Close statement
    mysqli_stmt_close($stmt);

    // Close connection
    mysqli_close($connection);
} else {
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | View</title>

    <!--  swiper css link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/css/bootstrap.css">

</head>

<body>
    <!--    header section  -->
    <section class="header">
        <a href="#.php" class="logo">Ayaya</a>
        <nav class="navbar">
            <a class="active" href="admin_home.php">Dashboard</a>
            <a href="ticket.php">Ticket</a>
            <a href="add.php">Add Customer</a>
            <a class="act" href="../dashboard.php">log out</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!--  header section end  -->


    <section class="booking">
        <h1 class="heading-title">View Record</h1>
        <form action="book_data.php" method="POST" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>name:</span>
                    <input type="text" value="<?php echo $row["name"]; ?>" name="name" readonly>
                </div>
                <div class="inputBox">
                    <span>email:</span>
                    <input type="email" value="<?php echo $row["email"]; ?>" name="email" readonly>
                </div>
                <div class="inputBox">
                    <span>phone:</span>
                    <input type="number" value="<?php echo $row["phone"]; ?>" name="phone" readonly>
                </div>
                <div class="inputBox">
                    <span>address:</span>
                    <input type="text" value="<?php echo $row["address"]; ?>" name="address" readonly>
                </div>
                <div class="inputBox">
                    <span>where to:</span>
                    <input type="text" value="<?php echo $row["location"]; ?>" name=" location" readonly>
                </div>
                <div class="inputBox">
                    <span>how many:</span>
                    <input type="number" value="<?php echo $row["guests"]; ?>" name="guests" readonly>
                </div>
                <div class="inputBox">
                    <span>arrivals:</span>
                    <input type="date" name="arrivals" value="<?php echo $row["arrivals"]; ?>" readonly>
                </div>
                <div class="inputBox">
                    <span>departure:</span>
                    <input type="date" name="departure" value="<?php echo $row["departure"]; ?>" readonly>
                </div>
            </div>
            <a href="admin_home.php" class="btnD">Back</a>
        </form>
    </section>
    <!-- swiper js link -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="../js/script.js"></script>
</body>

</html>