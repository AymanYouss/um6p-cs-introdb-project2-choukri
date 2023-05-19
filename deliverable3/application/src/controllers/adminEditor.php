<?php
session_start();

require '../dbconfig.php';
require '../models/User.php';



$user= new User($conn);
$_SESSION["fetch_admin"] = $user->selectAllOd($_POST["od"]);

header("Location: ../views/editrowadmin2.php");





    


    

    





?>