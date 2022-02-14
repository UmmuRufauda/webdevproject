<?php
$link = mysqli_connect("localhost","root", "","chromium");

if($link == false){
    die("error connecting to server".mysqli_connect_error($link));
}