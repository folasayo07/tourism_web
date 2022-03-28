<?php
// Process delete operation after confirmation
if (isset($_POST["id"]) && !empty($_POST["id"])) {
    // Include config file
    include "config.php";

    // Prepare a delete statement
    $query = "DELETE FROM book_data WHERE id = ?";

    if ($stmt = mysqli_prepare($connection, $query)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);

        // Set parameters
        $param_id = trim($_POST["id"]);

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // Records deleted successfully. Redirect to landing page
            header("location: admin_home.php");
            exit();
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }

    // Close statement
    mysqli_stmt_close($stmt);

    // Close connection
    mysqli_close($connection);
} else {
    // Check existence of id parameter
    if (empty(trim($_GET["id"]))) {
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Delete</title>

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
        <div class="bodyD">
            <h1 class="heading-title">Delete Record</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>">
                <h4>Are you sure you want to delete this record?</h4>

                <input type="submit" value="Yes" class="btnD">
                <a href="admin_home.php" class="btnD">No</a>
            </form>
        </div>
    </section>
    <!-- swiper js link -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="../js/script.js"></script>
</body>

</html>