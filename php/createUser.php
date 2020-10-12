<!-- create account -->

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

<script src="../js/createUserValidation.js"></script>

<!-- create user form -->
<div class="container card-container">
    <div class="row my-5">
        <div class="col-md-6 my-5 mx-auto order shadow">
            <form class="my-3" action="./handleReg.php" method="POST" onsubmit="return validate_password()">
                <div class="row d-flex justify-content-center">
                    <div class="form-group col-sm-12 col-md-10">
                        <h6 class="h6 text-center text-dark">Join Mave-RICK</h6>
                        <h1 class="h5 text-center text-dark font-weight-light">Sign Up</h1>
                        <h1 class="h3 text-center text-dark">Create your account</h1>
                    </div>
                </div>
                <span id="errormsg"></span>
                <div class="row d-flex justify-content-center">
                    <div class="form-group col-sm-12 col-md-10">
                        <label class="font-weight-bold" for="createNameId">Full Name :</label>
                        <input type="text" class="form-control" id="createNameId" name="createNameId" placeholder="Enter name...">
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="form-group col-sm-12 col-md-10">
                        <label class="font-weight-bold" for="createUsernameId">Email address <sup class="text-danger">*</sup> :</label>
                        <input type="email" class="form-control" id="createUsernameId" name="createUsernameId" aria-describedby="emailHelp" placeholder="Enter email...">
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="form-group col-sm-12 col-md-10">
                        <label class="font-weight-bold" for="createPasswordId">Password <sup class="text-danger">*</sup> :</label>
                        <input type="password" class="form-control" id="createPasswordId" name="createPasswordId" placeholder="Password...">
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="form-group col-sm-12 col-md-10">
                        <label class="font-weight-bold" for="createConPasswordId">Confirm Password <sup class="text-danger">*</sup> :</label>
                        <input type="password" class="form-control" id="createConPasswordId" name="createConPasswordId" placeholder="Enter Same Password Again...">
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="form-group col-sm-12 col-md-10">
                        <label class="font-weight-bold" for="createConPhoneNoId">Enter Phone No. :</label>
                        <input type="number" class="form-control" id="createConPhoneNoId" name="createConPhoneNoId" placeholder="Enter Phone No. ...">
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="form-group col-sm-12 col-md-10 text-center">
                        <button type="submit" class="btn btn-info btn-block">Sign Up</button>
                        <a href="./createUser.php" class="btn btn-link">Forgot password?</a>
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