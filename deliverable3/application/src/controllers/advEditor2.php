<?php
session_start();

require '../dbconfig.php';
require '../models/User.php';


$query = $conn->prepare("UPDATE temporary_full_table
    SET ac_status = '".$_POST["ac_status"]."',
        contract_id = '".$_POST["contract_id"]."',
        contract_status = '".$_POST["contract_status"]."',
        invoice = '".$_POST["invoice"]."',
        
        payment_status = '".$_POST["payment_status"]."'WHERE od = '".$_POST["od"]."';");

    $query->execute([
        
    ]);
    header("Location: ../views/Advdatabaseview.php");




    

?>