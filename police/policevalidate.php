<?php
session_start();
$id="";
$pass="";
if (isset($_POST['id']) && isset($_POST['password'])) {
    $id = $_POST['id'];
    $pass=$_POST['password'];
}

$conn = new mysqli("localhost", "root", "", "sih_login");
if ($conn->error) {
    echo $conn->error;
    die();
}
$sql = "select * from police where id='" . $id . "' and password=".$pass;
$res = $conn->query($sql);
if ($res->num_rows == 0) {
    echo "<script>alert('wrong Id or password entered');</script>";
    echo "<script>window.location='./policelogin.html'</script>";
} else {
    $row=$res->fetch_assoc();
    $_SESSION['id']=$id;
    $_SESSION['psname']=$row['name'];
    header('Location: police.php');
}
?>