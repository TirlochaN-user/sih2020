<?php
session_start();
if ($_SESSION['otp'] == $_POST['otp']) {
    $conn = new mysqli("localhost", "root", "", "sih_login");
    if ($conn->error) {
        die();
    }
    $sql = "select name from aadhar where mobileno=".$_SESSION['mobileno'];
    $res = $conn->query($sql);
    $row = $res->fetch_assoc();
    $_SESSION['name'] = $row['name'];
    header("Location: ./userdash.php");
} else {
    echo "<Script>alert('Wrong otp entered')</script>";
    echo "<script>window.location='./otpinput.html'</script>";
}
?>