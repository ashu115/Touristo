<?php

include '../php/connection.php';

// Package count for admin home
$package = "SELECT * FROM pckg_tbl";
$packageResult = mysqli_query($conn, $package);
$packageCount = mysqli_num_rows($packageResult);

// Enquiries count for admin home
$enquiry = "SELECT * FROM contactus";
$enquiryResult = mysqli_query($conn, $enquiry);
$enquiryCount = mysqli_num_rows($enquiryResult);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="../css/images/svg/title.svg">
    <link rel="stylesheet" href="./css/admin_home.css">
    <link rel="stylesheet" href="./css/admin_nav.css">
</head>

<body>
    <?php
    session_start();
    include_once "admin_nav.php";

    ?>
    <section class="home">
        <div class="card-container">
            <div class="card">
                <a href="admin_modifyPack.php"><i class="material-icons">perm_media</i></a>

                <h2><?php echo $packageCount; ?></h2>
                <a href="admin_modifyPack.php">
                    <p>Packages</p>
                </a>
            </div>
            <div class="card">
                <i class="material-icons">
                    list_alt
                </i>
                <h2></h2>
                <p>Bookings</p>
            </div>
            <div class="card">
                <i class="material-icons">
                    report_problem
                </i>
                <h2></h2>
                <p>Issues</p>
            </div>
            <div class="card">
                <a href="manage_enquiries.php"><i class="material-icons">contact_support</i></a>
                <h2><?php echo $enquiryCount; ?></h2>
                <a href="manage_enquiries.php">
                    <p>Enquiries</p>
                </a>
            </div>
        </div>
    </section>
</body>

</html>