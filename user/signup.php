<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $psw = $con_psw = " ";
$username_err = $psw_err = $con_psw_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {


	// Validate username
	if (empty(trim($_POST["username"]))) {
		$username_err = "Please enter a username.";
	} else {
		// Prepare a select statement
		$sql = "SELECT id FROM users WHERE username = ?";

		if ($stmt = mysqli_prepare($connection, $sql)) {
			// Bind variables to the prepared statement as parameters
			mysqli_stmt_bind_param($stmt, "s", $param_username);

			// Set parameters
			$param_username = trim($_POST["username"]);

			// Attempt to execute the prepared statement
			if (mysqli_stmt_execute($stmt)) {
				/* store result */
				mysqli_stmt_store_result($stmt);

				if (mysqli_stmt_num_rows($stmt) == 1) {
					$username_err = "This username is already taken.";
				} else {
					$username = trim($_POST["username"]);
				}
			} else {
				echo "Oops! Something went wrong. Please try again later.";
			}

			// Close statement
			mysqli_stmt_close($stmt);
		}
	}

	// Validate password
	if (empty(trim($_POST["psw"]))) {
		$psw_err = "Please enter a password.";
	} elseif (strlen(trim($_POST["psw"])) < 6) {
		$psw_err = "Password must have atleast 6 characters.";
	} else {
		$psw = trim($_POST["psw"]);
	}

	// Validate confirm password
	if (empty(trim($_POST["con_psw"]))) {
		$con_psw_err = "Please confirm password.";
	} else {
		$con_psw = trim($_POST["con_psw"]);
		if (empty($psw_err) && ($psw != $con_psw)) {
			$con_psw_err = "Password did not match.";
		}
	}



	//validate time
	$createdate = date("Y-m-d H:i:s");

	// Check input errors before inserting in database
	if (empty($username_err) && empty($psw_err) && empty($con_psw_err)) {

		// Prepare an insert statement
		$request = "INSERT INTO users (username, psw,createdate) VALUES (?,?,?)";

		if ($stmt = mysqli_prepare($connection, $request)) {
			// Bind variables to the prepared statement as parameters
			mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_psw, $param_createdate);

			// Set parameters
			$param_username = $username;

			// Creates a password hash
			$param_psw = password_hash($psw, PASSWORD_DEFAULT);

			$param_createdate = $createdate;


			// Attempt to execute the prepared statement
			if (mysqli_stmt_execute($stmt)) {
				// Redirect to login page
				header("location: login.php");
			} else {
				echo "Something went wrong. Please try again later.";
			}

			// Close statement
			mysqli_stmt_close($stmt);
		}
	}
	//close connection
	mysqli_close($connection);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User | Sign up</title>

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
		<a href="#" class="logo">Ayaya</a>
		<nav class="navbar">
			<a href="../dashboard.php">home</a>

			<div class="dropdown">
				<button class="dropbtn"> Sign up
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
					<a href="../admin/admin_signup.php">Admin</a>
					<a href="../user/signup.php">Users</a>
				</div>
			</div>
		</nav>

		<div id="menu-btn" class="fas fa-bars"></div>
	</section>
	<!--  header section end  -->

	<!--=======content================================-->
	<section class="home">
		<div class="slide" style="background:url(../images/bg2.jpg) no-repeat">
			<div class="card">
				<h2>Sign Up</h2>

				<div class="content">
					<form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' method="POST">
						<div class="inputBox">
							<span>username:</span>
							<input type="text" placeholder="enter your name" name="username" required />
							<p style="color: red;"><?php echo $username_err; ?></p>
						</div>

						<div class="inputBox">
							<span>password:</span>
							<input type="password" placeholder="enter your password" name="psw">
							<p style="color: red;"><?php echo $psw_err; ?></p>
						</div>

						<div class="inputBox">
							<span>confirm password:</span>
							<input type="password" placeholder="confirm your password" name="con_psw">
							<p style="color: red;"><?php echo $con_psw_err; ?></p>
						</div>

						<input type="submit" value="submit" class="btn" name="send">
						<p>Already have an account? <a href="login.php" style="color:var(--main-color);">
								<strong>Click to Login</strong></a>.</p>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- footer section starts -->
	<section class="footer">
		<div class="box-container">
			<div class="credit_f">
				created by <span>follybee</span> | all right reserved!
			</div>
		</div>
	</section>
	<!-- footer section ends -->

	<!-- swiper js link -->
	<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
	<!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->

	<!-- custom js file link -->
	<script src="../js/script.js"></script>
</body>

</html>