<?php
include"config.php";

if(isset($_POST['submit']))
{
$userEmail = $_POST["email"];
$userPass = $_post["password"];



//compare
$sql = "SELECT * FROM `user` WHERE email='$userEmail'";


$result= mysqli_query($link,$sql);

if($result){

    $data = mysqli_num_rows($result);
    if($data==1){

        while($row=mysqli_fetch_array($result)){
            $id = $row['id'];
            $email = $row["email"];
            $password = $row["password"];
            $firstname = $row["firstname"];
            

            //verifying password
            if(password_verify($userPass, $password)){

                session_start();
                $_SESSION["loggedin"]=true;
                $_SESSION["id"] = $id;
                $_SESSION["username"]=$fisrtname;

                header("location:Dashboard.php");

                
            }else{
                echo"Wrong Password";
            }
        }
    }else{
        echo"No such email or password found";

    }
}

}

?>