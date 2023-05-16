<?php
session_start();

require '../dbconfig.php';
require '../models/User.php';



$user= new User($conn);
$_SESSION["fetch_sales"] = $user->selectSalesOd($_POST["od"]);

header("Location: ../views/editrowssales2.php");





    


    

    





?>