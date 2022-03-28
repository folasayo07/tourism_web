<?php

// Check existence of id parameter before processing further

if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    // Include config file
    require_once "config.php";

    // Prepare a select statement
    $query = "SELECT * FROM images WHERE id = ?";

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
                $imageURL = '../uploads/' . $row["file_name"];
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
    <title>Admin | Ticket View</title>

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
            <a href="admin_home.php">Dashboard</a>
            <a class="active" href="ticket.php">Ticket</a>
            <a href="add.php">Add Customer</a>
            <a class="act" href="../dashboard.php">log out</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!--  header section end  -->




    <section class="booking">
        <h1 class="heading-title">View Ticket</h1>
        <div class="aboutB">
                <img  src="<?php echo $imageURL; ?>" alt="" />

        </div>
        <a href="ticket.php" class="btnD">Back</a>


    </section>
</body>

</html>