<?php
session_start();

require '../dbconfig.php';
require '../models/User.php';


$query = $conn->prepare("INSERT INTO temporary_full_table(
        od,
        ac_status, 
        contract_id, 
        contract_status, 
        invoice,  
        
        payment_status ) VALUES (:od,:ac_status,
:contract_id,
:contract_status,
:invoice,
:payment_status);");

    $query->execute([
        "od" => $_POST["od"],
        "ac_status" => $_POST["ac_status"], 
        "contract_id" => $_POST["contract_id"], 
        "contract_status" => $_POST["contract_status"], 
        "invoice" => $_POST["invoice"],  
        
        "payment_status" => $_POST["payment_status"]
    ]);
    header("Location: /src/views/Advdatabaseview.php");




    

?>