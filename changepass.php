<?php
session_start();
include './php/connection.php';

$uid = $_SESSION['uid'];
$err = $oerr = "";

$passwordquery = " SELECT passwd FROM user_tbl WHERE uid = '$uid'";
$result = mysqli_query($conn, $passwordquery);
$pcount = mysqli_num_rows($result);
$data = mysqli_fetch_array($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $oldpass = mysqli_real_escape_string($conn, $_POST['oldpass']);
    $newpass = mysqli_real_escape_string($conn, $_POST['newpass']);
    $cpass = mysqli_real_escape_string($conn, $_POST['cpass']);

    // New password hashing
    $hashnew = password_hash($newpass, PASSWORD_BCRYPT);

    if (!password_verify($oldpass, $data['passwd'])) {
        $oerr = 'Please enter correct password!';
    } else {
        if ($newpass !== $cpass) {
            $err = 'Password are not matching!';
        } else {
            $update = " UPDATE `user_tbl` SET `passwd`='$hashnew' WHERE uid = '$uid' ";
            $updateresult = mysqli_query($conn, $update);

            if ($updateresult) {
?>
                <script>
                    alert(`Password Changed!`);
                    location.replace('main.php');
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert(`Password Changing Failed!`);
                </script>
<?php
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/changepass.css">
    <title>Change password</title>
</head>

<body>
    <div class='container'>

        <form action="changepass.php" method="post">
            <div class="heading">
                <h2>Change Password</h2>
            </div>
            <div class="textbox">
                <label for="oldpass">Old Password</label>
                <input type="password" name="oldpass" id="oldpass" required>
                <p class='err'><?php echo $oerr; ?></p>
            </div>
            <div class="textbox">
                <label for="newpass">New Password</label>
                <input type="password" name="newpass" id="newpass" required>
            </div>
            <div class="textbox">
                <label for="cpass">Confirm Password</label>
                <input type="password" name="cpass" id="cpass" required>
                <p class='err'><?php echo $err; ?></p>
            </div>
            <div class="button">
                <input type="submit" value="Change Password">
            </div>
        </form>
</div>
</body>

</html>