<?php
session_start();

require '../dbconfig.php';


    $query = $conn->prepare("INSERT INTO temporary_full_table (od, freight_invoice, freight_invoice2, freight_invoice3, sales_order, payment_terms, clearance_date, payment_terms_days, incoterm, total_volume, invoice, userComment, estimated_fob, real_fob, tdate, payment_status) VALUES ('".$_POST["od"]."', '".$_POST["freight_invoice"]."', '".$_POST["freight_invoice2"]."', '".$_POST["freight_invoice3"]."', '".$_POST["sales_order"]."', '".$_POST["payment_terms"]."', '".$_POST["clearance_date"]."', '".$_POST["payment_terms_days"]."', '".$_POST["incoterm"]."', '".$_POST["total_volume"]."', '".$_POST["invoice"]."', '".$_POST["userComment"]."', '".$_POST["estimated_fob"]."', '".$_POST["real_fob"]."', '".$_POST["tdate"]."', '".$_POST["payment_status"]."')");

    $query->execute([
        
    ]);


    header("Location: /src/views/salesdatabaseview.php");

    





?>