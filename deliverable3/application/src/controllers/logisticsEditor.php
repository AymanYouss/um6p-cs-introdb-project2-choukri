<?php
session_start();

require '../dbconfig.php';
require '../models/User.php';



$user= new User($conn);
$_SESSION["fetch_logistics"] = $user->selectLogisticsOd($_POST["od"]);

header("Location: ../views/editrowslogistics2.php");





    


    

    





?>