<?php

session_start();


//check if user has loged in ?
if(!isset($_SESSION['lgedin']) or $_SESSION['logedin']!==true){
    header("Location:index.php");
    exit();
}



include "header.php";
include "config.php";

if (isset($_GET["id"]) and !empty($_GET["id"])) {

$id = $_GET["id"];

$sql = "SELECT * FROM `students` WHERE id=$id";

$result = mysqli_query($link, $sql);

if ($result) {

$data = mysqli_num_rows($result);

if ($data == 1) {

$row = mysqli_fetch_array($result);

$fullname = $row['fullname'];
$email= $row['email'];
$dob= $row['dob'];
$gender = $row['gender'];
$photo = $row['photo'];
$cv = $row['cv'];

$filepath = "uploads/$photo";


?>
<div class="row m-2">
    <div class="text-primary h3">View the Record</div>
</div>
<div class="row m-2">
    <div class="card col-md-6">
        <div class="card-body">
            <img src="<?php $filepath?>" class="rounded-circle" alt="Loading" height="100" width="100">


        </div>
    </div>


    <div class="card col-md-6 bg-primary text-white">
        <div class="card-body">
            <div>
                <label class="form-label">Full Name</label>
                <p><?php echo $fullname;?></p>
            </div>
            <hr>
            <div>
                <label class="form-label">Gender</label>
                <p><?php echo $gender;?></p>

            </div>
            <hr>
            <div>
                <label class="form-label">Email Address</label>
                <p><?php echo $email;?></p>
            </div>
            <hr>
            <div>
                <label class="form-label">Date of Birth</label>
                <p><?php echo $dob;?></p>

            </div>

        </div>
    </div>
</div>
<?php

            } else {
                echo "No record was found";
            }


        } else {
            echo "error executing query $sql" . mysqli_error($link);
        }


    } else {
        echo "id value not picked";
    }


?>