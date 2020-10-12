<?php
session_start();
if (empty($_POST['regUsernameId'])) {
    header("Location:login.php");
} else {
    $username = $_POST['regUsernameId'];
}
if (empty($_POST['regPasswordId'])) {
    header("Location:login.php");
} else {
    $password = $_POST['regPasswordId'];
}

include("db_connect.php");
$sql = "select count(*) as count from user_list where username='" . $username . "' and password = '" . $password . "'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);
$count = $row['count'];
if ($count > 0) {
    echo "Success";
    $_SESSION['regUsernameId'] = $username;
    header("location:./index.php");
} else {
    echo "failed";

    echo '<script type="text/JavaScript">  
    window.location.href = "./login.php";
     alert("Enter Valid Credentials"); 
     </script>';
}


mysqli_close($connect);
