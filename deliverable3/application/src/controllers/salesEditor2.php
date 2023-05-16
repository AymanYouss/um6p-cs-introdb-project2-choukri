<?php
session_start();

require '../dbconfig.php';
require '../models/User.php';


$query = $conn->prepare("UPDATE temporary_full_table
    SET freight_invoice = '".$_POST["freight_invoice"]."',
        freight_invoice2 = '".$_POST["freight_invoice2"]."',
        freight_invoice3 = '".$_POST["freight_invoice3"]."',
        sales_order = '".$_POST["sales_order"]."',
        payment_terms = '".$_POST["payment_terms"]."',
        clearance_date = '".$_POST["clearance_date"]."',
        payment_terms_days = '".$_POST["payment_terms_days"]."',
        incoterm = '".$_POST["incoterm"]."',
        total_volume = '".$_POST["total_volume"]."',
        invoice = '".$_POST["invoice"]."',
        userComment = '".$_POST["userComment"]."',
        estimated_fob = '".$_POST["estimated_fob"]."',
        real_fob = '".$_POST["real_fob"]."',
        tdate = '".$_POST["tdate"]."',
        payment_status = '".$_POST["payment_status"]."'WHERE od = '".$_POST["od"]."';");

    $query->execute([
        
    ]);
    header("Location: /src/views/salesdatabaseview.php");




    

?>