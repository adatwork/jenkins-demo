<?php

session_start();
include "db_connect.php";
if (empty($_POST['createUsernameId']) || empty($_POST['createPasswordId'])) {
   header("Location:login.php");
} else {
   $username = $_POST['createUsernameId'];
   $password = $_POST['createPasswordId'];
   $name = $_POST['createNameId'];
   $phone_no = $_POST['createConPhoneNoId'];
}

$sql = "insert into user_list (username, password, name, phone_no) values ('" . $username . "','" . $password . "','" . $name . "','" . $phone_no . "')";
if (mysqli_query($connect, $sql)) {

   echo "Success";
   $_SESSION['regUsernameId'] = $username;
   header("location:./index.php");
} else {
   echo "Unsuccessful";
   echo "ERROR" . mysqli_error($connect);
}
