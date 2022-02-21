<?php

session_start();

//check if the user is logedin

//check if user has loged in ?
if(!isset($_SESSION['lgedin']) or $_SESSION['logedin']!==true){
    header("Location:index.php");
    exit();

include "header.php";

?>


<div class="row m-2">
    <div class="card">
        <div class="card-header text-primary bg-white h4">Reset Password</div>
        <div class="card-body">
            <form action="reset.php" method="post" enctype="multipart/form-data">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">New Password</span>
                    <input type="password" name="newPass" class="form-control" aria-describedby="basic-addon1" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">Confirm Password</span>
                    <input type="password" name="confirmPass" class="form-control" aria-describedby="basic-addon2"
                        required>
                </div>

                <div class="input-group mb-3">
                    <input type="submit" name="submit" value="RESET PASSWORD" class="btn btn-danger col-md-4 ">
                </div>



            </form>
        </div>
    </div>
</div>