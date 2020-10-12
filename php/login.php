<!-- Login -->


<?php
session_start();
if (isset($_SESSION['regUsernameId'])) {
    header("location:./index.php");
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

<!-- login form -->
<div class="container card-container">
    <div class="row my-5">
        <div class="col-md-6 my-5 mx-auto order shadow">
            <form class="my-3" action="./authenticate.php" method="POST">
                <div class="row d-flex justify-content-center mb-n3">
                    <div class="form-group col-sm-12 col-md-10">
                        <h6 class="h6 text-center text-dark">Join Mave-RICK</h6>
                        <h1 class="h5 text-center text-dark font-weight-light">Sign In</h1>
                        <h1 class="h3 text-center text-dark">Use your account</h1>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="form-group col-sm-12 col-md-10">
                        <label class="font-weight-bold" for="regUsernameId">Email address :</label>
                        <input type="email" class="form-control" id="regUsernameId" name="regUsernameId" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="form-group col-sm-12 col-md-10">
                        <label class="font-weight-bold" for="regPasswordId">Password :</label>
                        <input type="password" class="form-control" id="regPasswordId" name="regPasswordId" placeholder="Password">
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="form-group col-sm-12 col-md-10 text-center">
                        <input type="submit" class="btn btn-info btn-block" value="Sign In">
                        <a href="./createUser.php" class="btn btn-link">Forgot password?</a>
                    </div>
                </div>
                <hr>
                <div class="row d-flex justify-content-center">
                    <div class="form-group col-sm-12 col-md-10">
                        <a href="./createUser.php" class="btn btn-dark btn-block">Create new account ?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
// footer part
require('./footer.php');
?>