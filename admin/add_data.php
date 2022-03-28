<?php
//database connection code
require_once "config.php";

//get the post records
if (isset($_POST['send'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $location = $_POST['location'];
  $guests = $_POST['guests'];
  $arrivals = $_POST['arrivals'];
  $departure = $_POST['departure'];

  //database insert SQL code
  $request = "INSERT INTO  book_data(name, email, phone,
    address,location,guests, arrivals,departure) VALUES ('$name', '$email', '$phone',
   '$address','$location','$guests', '$arrivals','$departure')";

  //insert in database
  mysqli_query($connection, $request);

  header('Location:admin_home.php');
} else {
  echo "Something went wrong!";
}
?>

