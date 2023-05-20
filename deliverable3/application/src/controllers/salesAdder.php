
<?php
session_start();

require '../dbconfig.php';
require '../models/User.php';
require '../models/PhosphateQueries.php';

$phosphateModel = new PhosphateQueries($conn);

$query = $conn->prepare("INSERT INTO temporary_full_table(od,region,
tdate,
country,
discharging_port,
delivery_mode,
customer_name,
customer_group,
category,
pid,
pallets,
branding,
total_volume,
volume_per_container,
incoterm,
status1,
status2,
payment_terms,
payment_terms_days,
estimated_freight,
estimated_fob)
    VALUES (:od,:region,
        :tdate,
        :country,
        :discharging_port,
        :delivery_mode,
        :customer_name,
        :customer_group,
        :category,
        :pid,
        :pallets,
        :branding,
        :total_volume,
        :volume_per_container,
        :incoterm,
        :status1,
        :status2,
        :payment_terms,
        :payment_terms_days,
        :estimated_freight,
        :estimated_fob)");



$query->execute([
    'region' => $_POST["region"],
    'tdate' => $_POST["tdate"],
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

    'incoterm' => $_POST["incoterm"],
    'status1' => $_POST["status1"],
    'status2' => $_POST["status2"],
    'payment_terms' => $_POST["payment_terms"],
    'payment_terms_days' => $_POST["payment_terms_days"],
    'estimated_freight' => $_POST["estimated_freight"],
    'estimated_fob' => $_POST["estimated_fob"],
    'od' => $_POST["od"]
]);

header("Location: ../views/salesdatabaseview.php");
?>
