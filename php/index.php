<!-- home -->
<?php
session_start();
if (!isset($_SESSION['regUsernameId'])) {
    header("location:./login.php");
}
?>
<?php
//header part
require('./header.php');
?>

<?php
// head-navbar
require('./headerNav.php');
?>

<?php
// carousel part
require('./carousel.php');
?>

<?php
// userlist
require('./userlist.php');
?>

<?php
// footer part
require('./footer.php');
?>