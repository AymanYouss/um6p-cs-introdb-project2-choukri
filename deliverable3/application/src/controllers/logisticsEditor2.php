<?php
session_start();

require '../dbconfig.php';
require '../models/User.php';
require '../models/PhosphateQueries.php';

$phosphateModel = new PhosphateQueries($conn);

$query = $conn->prepare("UPDATE temporary_full_table
    SET supplier = :supplier,
        transporter = :transporter,
        inspection = :inspection,
        shipping_line = :shipping_line,
        shipped_via = :shipped_via,
        loading_date_at_plant = :loading_date_at_plant,
        quantity_removed_from_the_site = :quantity_removed_from_the_site,
        stuffing_date = :stuffing_date,
        real_freight = :real_freight,
        real_fob = :real_fob,
        blno = :blno,
        transit_time = :transit_time,
        bldate = :bldate,
        net_quantity = :net_quantity,
        clearance_date = :clearance_date,
        userComment = :userComment,
        type_tc = :type_tc,
        port_loading = :port_loading,
        freight_invoice = :freight_invoice,
        freight_invoice2 = :freight_invoice2,
        freight_invoice3 = :freight_invoice3,
        days_of_storage = :days_of_storage,
        storage_cost = :storage_cost,
        days_of_storage2 = :days_of_storage2,
        storage_cost2 = :storage_cost2,
        days_of_storage3 = :days_of_storage3,
        storage_cost3 = :storage_cost3,
        jours_half = :jours_half,
        jours_1 = :jours_1,
        jours_2 = :jours_2,
        jours_3 = :jours_3
    WHERE od = :od");

$query->execute([
    'od' => $_POST["od"],
    'supplier' => $_POST["supplier"],
    'transporter' => $_POST["transporter"],
    'inspection' => $_POST["inspection"],
    'shipping_line' => $_POST["shipping_line"],
    'shipped_via' => $_POST["shipped_via"],
    'loading_date_at_plant' => $_POST["loading_date_at_plant"],
    'stuffing_date' => $_POST["stuffing_date"],
    'quantity_removed_from_the_site' => $_POST["quantity_removed_from_the_site"],
    'real_freight' => $_POST["real_freight"],
    'real_fob' => $_POST["real_fob"],
    'blno' => $_POST["blno"],
    'transit_time' => $_POST["transit_time"],
    'bldate' => $_POST["bldate"],
    'net_quantity' => $_POST["net_quantity"],
    'clearance_date' => $_POST["clearance_date"],
    'userComment' => $_POST["userComment"],
    'type_tc' => $_POST["type_tc"],
    'port_loading' => $_POST["port_loading"],
    'freight_invoice' => $_POST["freight_invoice"],
    'freight_invoice2' => $_POST["freight_invoice2"],
    'freight_invoice3' => $_POST["freight_invoice3"],
    'days_of_storage' => $_POST["days_of_storage"],
    'storage_cost' => $_POST["storage_cost"],
    'days_of_storage2' => $_POST["days_of_storage2"],
    'storage_cost2' => $_POST["storage_cost2"],
    'days_of_storage3' => $_POST["days_of_storage3"],
    'storage_cost3' => $_POST["storage_cost3"],
    'jours_half' => $_POST["jours_half"],
    'jours_1' => $_POST["jours_1"],
    'jours_2' => $_POST["jours_2"],
    'jours_3' => $_POST["jours_3"]
  ]);

header("Location: ../views/logisticsdatabaseview.php");
?>
