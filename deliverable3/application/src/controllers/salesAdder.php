
<?php
session_start();

require '../dbconfig.php';
require '../models/User.php';
require '../models/PhosphateQueries.php';

$phosphateModel = new PhosphateQueries($conn);

$query = $conn->prepare("INSERT INTO temporary_full_table
    SET region = :region,
        tdate = :tdate,
        tquarter = :tquarter,
        tyear = :tyear,
        country = :country,
        discharging_port = :discharging_port,
        delivery_mode = :delivery_mode,
        customer_name = :customer_name,
        customer_group = :customer_group,
        category = :category,
        pid = :pid,
        pallets = :pallets,
        branding = :branding,
        total_volume = :total_volume,
        volume_per_container = :volume_per_container,
        number_of_TC = :number_of_TC,
        incoterm = :incoterm,
        status1 = :status1,
        status2 = :status2,
        payment_terms = :payment_terms,
        payment_terms_days = :payment_terms_days,
        estimated_freight = :estimated_freight,
        estimated_fob = :estimated_fob
    WHERE od = :od");



$query->execute([
    'region' => $_POST["region"],
    'tdate' => $_POST["tdate"],
    'tquarter' => $phosphateModel->getQuarter($_POST["tdate"]),
    'tyear' => $phosphateModel->getYear($_POST["tdate"]),
    'country' => $_POST["country"],
    'discharging_port' => $_POST["discharging_port"],
    'delivery_mode' => $_POST["delivery_mode"],
    'customer_name' => $_POST["customer_name"],
    'customer_group' => $_POST["customer_group"],
    'category' => $_POST["category"],
    'pid' => $_POST["pid"],
    'pallets' => $_POST["pallets"],
    'branding' => $_POST["branding"],
    'total_volume' => $_POST["total_volume"],
    'volume_per_container' => $_POST["volume_per_container"],
    'number_of_TC' => $phosphateModel->calculateNumberOfTc($_POST["total_volume"], $_POST["volume_per_container"]),
    'incoterm' => $_POST["incoterm"],
    'status1' => $_POST["status1"],
    'status2' => $_POST["status2"],
    'payment_terms' => $_POST["payment_terms"],
    'payment_terms_days' => $_POST["payment_terms_days"],
    'estimated_freight' => $_POST["estimated_freight"],
    'estimated_fob' => $_POST["estimated_fob"],
    'od' => $_POST["od"]
]);

header("Location: /src/views/salesdatabaseview.php");
?>
