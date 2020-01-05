<?php
session_start();
$ano = "";
if (isset($_POST['aadhar-no'])) {
    $ano = $_POST['aadhar-no'];
}
$_SESSION['ano']=$ano;
$conn = new mysqli("localhost", "root", "", "sih_login");
if ($conn->error) {
    echo $conn->error;
    die();
}
$sql = "select * from aadhar where adharno='" . $ano . "'";
$res = $conn->query($sql);
if ($res->num_rows == 0) {
    echo "<script>alert('wrong aadhar card number entered');</script>";
    echo "<script>window.location='./userlogin.html'</script>";
} else {
    $row=$res->fetch_assoc();
    $_SESSION['mobileno']=$row['mobileno'];
    include 'textlocal.php';
}
?>