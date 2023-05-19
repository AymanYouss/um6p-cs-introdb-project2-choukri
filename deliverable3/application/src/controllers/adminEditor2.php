<?php
session_start();

require '../dbconfig.php';
require '../models/User.php';


$query = $conn->prepare("UPDATE temporary_full_table
    SET 
    region = '" . $_POST["region"] . "', 
        tdate = '" . $_POST["tdate"] . "', 
        country = '" . $_POST["country"] . "', 
        discharging_port = '" . $_POST["discharging_port"] . "', 
        delivery_mode = '" . $_POST["delivery_mode"] . "', 
        customer_name = '" . $_POST["customer_name"] . "', 
        customer_group = '" . $_POST["customer_group"] . "', 
        category = '" . $_POST["category"] . "', 
        pid = '" . $_POST["pid"] . "', 
        pallets = '" . $_POST["pallets"] . "', 
        branding = '" . $_POST["branding"] . "', 
        total_volume = '" . $_POST["total_volume"] . "', 
        volume_per_container = '" . $_POST["volume_per_container"] . "', 
        incoterm = '" . $_POST["incoterm"] . "', 
        status1 = '" . $_POST["status1"] . "', 
        status2 = '" . $_POST["status2"] . "', 
        payment_terms = '" . $_POST["payment_terms"] . "', 
        payment_terms_days = '" . $_POST["payment_terms_days"] . "', 
        price = '" . $_POST["price"] . "', 
        estimated_freight = '" . $_POST["estimated_freight"] . "', 
        estimated_fob = '" . $_POST["estimated_fob"] . "', 
        sales_order = '" . $_POST["sales_order"] . "', 
        supplier = '" . $_POST["supplier"] . "', 
        transporter = '" . $_POST["transporter"] . "', 
        inspection = '" . $_POST["inspection"] . "', 
        shipping_line = '" . $_POST["shipping_line"] . "', 
        shipped_via = '" . $_POST["shipped_via"] . "', 
        loading_date_at_plant = '" . $_POST["loading_date_at_plant"] . "', 
        quantity_removed_from_the_site = '" . $_POST["quantity_removed_from_the_site"] . "', 
        stuffing_date = '" . $_POST["stuffing_date"] . "', 
        real_freight = '" . $_POST["real_freight"] . "', 
        real_fob = '" . $_POST["real_fob"] . "', 
        blno = '" . $_POST["blno"] . "', 
        sequence_date = '" . $_POST["sequence_date"] . "', 
        transit_time = '" . $_POST["transit_time"] . "', 
        bldate = '" . $_POST["bldate"] . "', 
        net_quantity = '" . $_POST["net_quantity"] . "', 
        clearance_date = '" . $_POST["clearance_date"] . "', 
        userComment = '" . $_POST["userComment"] . "', 
        type_tc = '" . $_POST["type_tc"] . "', 
        port_loading = '" . $_POST["port_loading"] . "', 
        freight_invoice = '" . $_POST["freight_invoice"] . "', 
        freight_invoice2 = '" . $_POST["freight_invoice2"] . "', 
        freight_invoice3 = '" . $_POST["freight_invoice3"] . "', 
        days_of_storage = '" . $_POST["days_of_storage"] . "', 
        storage_cost = '" . $_POST["storage_cost"] . "', 
        days_of_storage2 = '" . $_POST["days_of_storage2"] . "', 
        storage_cost2 = '" . $_POST["storage_cost2"] . "', 
        days_of_storage3 = '" . $_POST["days_of_storage3"] . "', 
        storage_cost3 = '" . $_POST["storage_cost3"] . "', 
        jours_half = '" . $_POST["jours_half"] . "', 
        jours_1 = '" . $_POST["jours_1"] . "', 
        jours_2 = '" . $_POST["jours_2"] . "', 
        jours_3 = '" . $_POST["jours_3"] . "', 
        ac_status = '" . $_POST["ac_status"] . "', 
        contract_id = '" . $_POST["contract_id"] . "', 
        contract_status = '" . $_POST["contract_status"] . "', 
        invoice = '" . $_POST["invoice"] . "', 
        payment_status = '".$_POST["payment_status"]."'WHERE od = '".$_POST["od"]."';"

    
    
    
    );

    $query->execute([
        
    ]);
    header("Location: /src/views/fulldatabaseview.php");




    

?>