<?php 
            session_start();
            
    ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Form</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}

		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0 2px 5px rgba(0,0,0,0.3);
		}

		h1 {
			font-size: 24px;
			text-align: center;
			margin-bottom: 30px;
		}

		form {
			display: grid;
			grid-template-columns: 1fr 1fr;
			grid-row-gap: 20px;
			grid-column-gap: 30px;
			align-items: center;
		}

		label {
			font-weight: bold;
			margin-bottom: 10px;
			display: block;
		}

		input,
		select {
			padding: 10px;
			border-radius: 5px;
			border: 1px solid #ccc;
			font-size: 16px;
			width: 100%;
			box-sizing: border-box;
			background-color: #f9f9f9;
			margin-top: 5px;
			margin-bottom: 15px;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
			margin-top: 20px;
		}

		input[type="submit"]:hover {
			background-color: #3e8e41;
		}

		@media screen and (max-width: 600px) {
			form {
				grid-template-columns: 1fr;
			}
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>My Form</h1>
		<form action="../controllers/adminEditor2.php" method="POST">

        <label for="od">Outbound Delivery:</label>
        <input type="text" id="od" name="od" value="<?php echo $_SESSION["fetch_admin"][0]["od"]; ?>"><br>
            
        <label for="region">Region:</label>
        <?php 
        
        ?>
<input type="text" id="region" name="region" value="<?php

echo $_SESSION["fetch_admin"][0]["region"]; ?>"><br>

<label for="tdate">Tdate:</label>
<input type="text" id="tdate" name="tdate" value="<?php echo $_SESSION["fetch_admin"][0]["tdate"]; ?>"><br>

<label for="country">Country:</label>
<input type="text" id="country" name="country" value="<?php echo $_SESSION["fetch_admin"][0]["country"]; ?>"><br>

<label for="discharging_port">Discharging Port:</label>
<input type="text" id="discharging_port" name="discharging_port" value="<?php echo $_SESSION["fetch_admin"][0]["discharging_port"]; ?>"><br>

<label for="delivery_mode">Delivery Mode:</label>
<input type="text" id="delivery_mode" name="delivery_mode" value="<?php echo $_SESSION["fetch_admin"][0]["delivery_mode"]; ?>"><br>

<label for="customer_name">Customer Name:</label>
<input type="text" id="customer_name" name="customer_name" value="<?php echo $_SESSION["fetch_admin"][0]["customer_name"]; ?>"><br>

<label for="customer_group">Customer Group:</label>
<input type="text" id="customer_group" name="customer_group" value="<?php echo $_SESSION["fetch_admin"][0]["customer_group"]; ?>"><br>

<label for="category">Category:</label>
<input type="text" id="category" name="category" value="<?php echo $_SESSION["fetch_admin"][0]["category"]; ?>"><br>

<label for="pid">PID:</label>
<input type="text" id="pid" name="pid" value="<?php echo $_SESSION["fetch_admin"][0]["pid"]; ?>"><br>

<label for="pallets">Pallets:</label>
<input type="text" id="pallets" name="pallets" value="<?php echo $_SESSION["fetch_admin"][0]["pallets"]; ?>"><br>

<label for="branding">Branding:</label>
<input type="text" id="branding" name="branding" value="<?php echo $_SESSION["fetch_admin"][0]["branding"]; ?>"><br>

<label for="total_volume">Total Volume:</label>
<input type="text" id="total_volume" name="total_volume" value="<?php echo $_SESSION["fetch_admin"][0]["total_volume"]; ?>"><br>

<label for="volume_per_container">Volume per Container:</label>
<input type="text" id="volume_per_container" name="volume_per_container" value="<?php echo $_SESSION["fetch_admin"][0]["volume_per_container"]; ?>"><br>

<label for="incoterm">Incoterm:</label>
<input type="text" id="incoterm" name="incoterm" value="<?php echo $_SESSION["fetch_admin"][0]["incoterm"]; ?>"><br>

<label for="status1">Status 1:</label>
<input type="text" id="status1" name="status1" value="<?php echo $_SESSION["fetch_admin"][0]["status1"]; ?>"><br>

<label for="status2">Status 2:</label>
<input type="text" id="status2" name="status2" value="<?php echo $_SESSION["fetch_admin"][0]["status2"]; ?>"><br>

<label for="payment_terms">Payment Terms:</label>
<input type="text" id="payment_terms" name="payment_terms" value="<?php echo $_SESSION["fetch_admin"][0]["payment_terms"]; ?>"><br>

<label for="payment_terms_days">Payment Terms Days:</label>
<input type="text" id="payment_terms_days" name="payment_terms_days" value="<?php echo $_SESSION["fetch_admin"][0]["payment_terms_days"]; ?>"><br>

<label for="price">Price:</label>
<input type="text" id="price" name="price" value="<?php echo $_SESSION["fetch_admin"][0]["price"]; ?>"><br>

<label for="estimated_freight">Estimated Freight:</label>
<input type="text" id="estimated_freight" name="estimated_freight" value="<?php echo $_SESSION["fetch_admin"][0]["estimated_freight"]; ?>"><br>

<label for="estimated_fob">Estimated FOB:</label>
<input type="text" id="estimated_fob" name="estimated_fob" value="<?php echo $_SESSION["fetch_admin"][0]["estimated_fob"]; ?>"><br>

<label for="sales_order">Sales Order:</label>
<input type="text" id="sales_order" name="sales_order" value="<?php echo $_SESSION["fetch_admin"][0]["sales_order"]; ?>"><br>

<label for="supplier">Supplier:</label>
<input type="text" id="supplier" name="supplier" value="<?php echo $_SESSION["fetch_admin"][0]["supplier"]; ?>"><br>

<label for="transporter">Transporter:</label>
<input type="text" id="transporter" name="transporter" value="<?php echo $_SESSION["fetch_admin"][0]["transporter"]; ?>"><br>

<label for="inspection">Inspection:</label>
<input type="text" id="inspection" name="inspection" value="<?php echo $_SESSION["fetch_admin"][0]["inspection"]; ?>"><br>

<label for="shipping_line">Shipping Line:</label>
<input type="text" id="shipping_line" name="shipping_line" value="<?php echo $_SESSION["fetch_admin"][0]["shipping_line"]; ?>"><br>

<label for="shipped_via">Shipped Via:</label>
<input type="text" id="shipped_via" name="shipped_via" value="<?php echo $_SESSION["fetch_admin"][0]["shipped_via"]; ?>"><br>

<label for="loading_date_at_plant">Loading Date at Plant:</label>
<input type="text" id="loading_date_at_plant" name="loading_date_at_plant" value="<?php echo $_SESSION["fetch_admin"][0]["loading_date_at_plant"]; ?>"><br>

<label for="quantity_removed_from_the_site">Quantity Removed from the Site:</label>
<input type="text" id="quantity_removed_from_the_site" name="quantity_removed_from_the_site" value="<?php echo $_SESSION["fetch_admin"][0]["quantity_removed_from_the_site"]; ?>"><br>

<label for="stuffing_date">Stuffing Date:</label>
<input type="text" id="stuffing_date" name="stuffing_date" value="<?php echo $_SESSION["fetch_admin"][0]["stuffing_date"]; ?>"><br>

<label for="real_freight">Real Freight:</label>
<input type="text" id="real_freight" name="real_freight" value="<?php echo $_SESSION["fetch_admin"][0]["real_freight"]; ?>"><br>

<label for="real_fob">Real FOB:</label>
<input type="text" id="real_fob" name="real_fob" value="<?php echo $_SESSION["fetch_admin"][0]["real_fob"]; ?>"><br>

<label for="blno">BL No:</label>
<input type="text" id="blno" name="blno" value="<?php echo $_SESSION["fetch_admin"][0]["blno"]; ?>"><br>

<label for="sequence_date">Sequence Date:</label>
<input type="text" id="sequence_date" name="sequence_date" value="<?php echo $_SESSION["fetch_admin"][0]["sequence_date"]; ?>"><br>

<label for="transit_time">Transit Time:</label>
<input type="text" id="transit_time" name="transit_time" value="<?php echo $_SESSION["fetch_admin"][0]["transit_time"]; ?>"><br>

<label for="bldate">BL Date:</label>
<input type="text" id="bldate" name="bldate" value="<?php echo $_SESSION["fetch_admin"][0]["bldate"]; ?>"><br>

<label for="net_quantity">Net Quantity:</label>
<input type="text" id="net_quantity" name="net_quantity" value="<?php echo $_SESSION["fetch_admin"][0]["net_quantity"]; ?>"><br>

<label for="clearance_date">Clearance Date:</label>
<input type="text" id="clearance_date" name="clearance_date" value="<?php echo $_SESSION["fetch_admin"][0]["clearance_date"]; ?>"><br>

<label for="userComment">User Comment:</label>
<input type="text" id="userComment" name="userComment" value="<?php echo $_SESSION["fetch_admin"][0]["userComment"]; ?>"><br>

<label for="type_tc">Type TC:</label>
<input type="text" id="type_tc" name="type_tc" value="<?php echo $_SESSION["fetch_admin"][0]["type_tc"]; ?>"><br>

<label for="port_loading">Port Loading:</label>
<input type="text" id="port_loading" name="port_loading" value="<?php echo $_SESSION["fetch_admin"][0]["port_loading"]; ?>"><br>

<label for="freight_invoice">Freight Invoice:</label>
<?php 
echo "<input type='text' id='freight_invoice' name='freight_invoice' value='".$_SESSION["fetch_admin"][0]["freight_invoice"]."'>";
?><br>

<label for="freight_invoice2">Freight Invoice 2:</label>
<?php 
echo "<input type='text' id='freight_invoice2' name='freight_invoice2' value='".$_SESSION["fetch_admin"][0]["freight_invoice2"]."'>";
?><br>

<label for="freight_invoice3">Freight Invoice 3:</label>
<?php 
echo "<input type='text' id='freight_invoice3' name='freight_invoice3' value='".$_SESSION["fetch_admin"][0]["freight_invoice3"]."'>";
?><br>

<label for="days_of_storage">Days of Storage:</label>
<input type="text" id="days_of_storage" name="days_of_storage" value="<?php echo $_SESSION["fetch_admin"][0]["days_of_storage"]; ?>"><br>

<label for="storage_cost">Storage Cost:</label>
<input type="text" id="storage_cost" name="storage_cost" value="<?php echo $_SESSION["fetch_admin"][0]["storage_cost"]; ?>"><br>

<label for="days_of_storage2">Days of Storage 2:</label>
<input type="text" id="days_of_storage2" name="days_of_storage2" value="<?php echo $_SESSION["fetch_admin"][0]["days_of_storage2"]; ?>"><br>

<label for="storage_cost2">Storage Cost 2:</label>
<input type="text" id="storage_cost2" name="storage_cost2" value="<?php echo $_SESSION["fetch_admin"][0]["storage_cost2"]; ?>"><br>

<label for="days_of_storage3">Days of Storage 3:</label>
<input type="text" id="days_of_storage3" name="days_of_storage3" value="<?php echo $_SESSION["fetch_admin"][0]["days_of_storage3"]; ?>"><br>

<label for="storage_cost3">Storage Cost 3:</label>
<input type="text" id="storage_cost3" name="storage_cost3" value="<?php echo $_SESSION["fetch_admin"][0]["storage_cost3"]; ?>"><br>

<label for="jours_half">Jours Half:</label>
<input type="text" id="jours_half" name="jours_half" value="<?php echo $_SESSION["fetch_admin"][0]["jours_half"]; ?>"><br>

<label for="jours_1">Jours 1:</label>
<input type="text" id="jours_1" name="jours_1" value="<?php echo $_SESSION["fetch_admin"][0]["jours_1"]; ?>"><br>

<label for="jours_2">Jours 2:</label>
<input type="text" id="jours_2" name="jours_2" value="<?php echo $_SESSION["fetch_admin"][0]["jours_2"]; ?>"><br>

<label for="jours_3">Jours 3:</label>
<input type="text" id="jours_3" name="jours_3" value="<?php echo $_SESSION["fetch_admin"][0]["jours_3"]; ?>"><br>

<label for="ac_status">AC Status:</label>
<input type="text" id="ac_status" name="ac_status" value="<?php echo $_SESSION["fetch_admin"][0]["ac_status"]; ?>"><br>

<label for="contract_id">Contract ID:</label>
<input type="text" id="contract_id" name="contract_id" value="<?php echo $_SESSION["fetch_admin"][0]["contract_id"]; ?>"><br>

<label for="contract_status">Contract Status:</label>
<input type="text" id="contract_status" name="contract_status" value="<?php echo $_SESSION["fetch_admin"][0]["contract_status"]; ?>"><br>

<label for="invoice">Invoice:</label>
<input type="text" id="invoice" name="invoice" value="<?php echo $_SESSION["fetch_admin"][0]["invoice"]; ?>"><br>

<label for="payment_status">Payment Status:</label>

<input type="text" id="payment_status" name="payment_status" value="<?php echo $_SESSION["fetch_admin"][0]["payment_status"]; ?>"><br>


      <input type="submit" value="Submit">

<?php 
include '../models/User.php';
?>