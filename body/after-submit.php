<?php 
$vardas = trim($_POST['vardas']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);

if(!empty($vardas) && !empty ($email) && !empty($message)) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $from = "$email";
        $to = "karolis.dumbrava@gmail.com";
        $subject = "New message";
        $autorius = 'Nuo: ' . $vardas . ', ' . $email;
        $message = htmlspecialchars($message);
        // mail($to, $subject, $autorius, $message, $from);
        echo "<script>alert('Thank you for your message!');</script>";
    }
}

include('../database/db.php'); 
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Paradise</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
</head>

<body>
    <!-- Navigation -->
<?php include 'after-header.php' ?>
    <!-- Start -->
<?php include 'start.php' ?>
    <!-- Shop -->
<?php include 'after-shop.php' ?>
    <!-- Articles -->
<?php include 'articles.php' ?>
    <!-- About us -->
<?php include 'about-us.php' ?>
    <!-- Contact -->
<?php include 'contact.php' ?>
    <!-- JavaScript -->
<script src="../js/hamburger.js"></script>
<script src="../js/store-slider.js"></script>
<script src="../js/women-slider.js"></script>
<script src="../js/wmns-lightbox.js"></script>
</body>

</html>