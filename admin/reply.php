<?php
error_reporting(0);
include '../php/connection.php';
include '../admin/admin_nav.php';

$sr = $_REQUEST['sr'];
$user = $_REQUEST['name'];
$err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $reply = $_POST['reply'];

    $into = "UPDATE contactus SET reply = '$reply' WHERE srno = '$sr'";
    $result = mysqli_query($conn, $into);

    if ($result) {
        echo
        "<script>
                alert(`Reply sent!`);
            </script>";
    } else {
?>
        <script>
            alert(`Failed!`);
        </script>
<?php
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./css/admin_nav.css">
    <link rel="stylesheet" href="../css/lode1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reply to <?php echo $user; ?></title>
</head>

<body onload="myFunction()">
    <div class="spinner" id="loader1">
        <div class="dot1"></div>
        <div class="dot2"></div>
        <div class="dot3"></div>
    </div>
    <div class="container">
        <div class="heading">
            <h2>Reply to <?php echo $user; ?></h2>
        </div>
        <div class="form">
            <form action="reply.php" method="post">
                <div class="input">
                    <label for="reply">Reply</label>
                    <textarea name="reply" id="reply" cols="30" rows="10" require></textarea>
                </div>
                <div class="btn">
                    <input type="submit" value="submit">
                </div>
            </form>
        </div>
    </div>
</body>
<script>
    var preloader = document.getElementById('loader1');

    function myFunction() {
        preloader.style.display = 'none';
    }
</script>

</html>