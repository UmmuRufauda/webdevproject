<?php

include"config.php";

if(isset($_POST["register"])){
    $firstname =  $_POST["firstname"];
    $secondname =  $_POST["secondname"];
    $email =  $_POST["email"];
    $password =  $_POST["password"];
    $cpassword =  $_POST["cpassword"];

    //validate

    if (strlen($password)<6){
        $passError = "Password must have more than 6 characters";
        echo $passError;

    }else{
        $storePass = password_hash($password, PASSWORD_DEFAULT);
    }
    if($cpassword!=$password){
        $conPassErr = "Password do not match";
        echo $conPassErr;
    }
    if(empty($passError) and empty($conPassErr)){
     
        $sql = "INSERT INTO `user`(`firstname`, `secondname`, `email`, `password`)
        VALUES ('$firstname','$secondname','$email',' $storePass')";

$result = mysqli_query($link, $sql);

if($result){
    echo"You have been registered";
    header("location:Login.php");
}else{
    echo"Error executing query".mysqli_error($link);
}

 
}
mysqli_close($link);
}



?>