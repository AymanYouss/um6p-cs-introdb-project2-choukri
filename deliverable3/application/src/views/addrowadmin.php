<?php
	if(!isset($_SESSION))
	{
		session_start();
	}


  if (!isset($_SESSION) || $_SESSION["role"] != "admin") {
    include_once '../controllers/redirect.php';
  }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Row (admin)</title>
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

        .pick{
            position: relative;
            z-index: 1;
            padding: 15% 0 50px;
            
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/css/tables.css">
  <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.svg"/>
    <link rel="stylesheet" href="../../assets/css/bootstrap-5.0.0-alpha-2.min.css" />
    <link rel="stylesheet" href="../../assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="../../assets/css/animate.css" />
    <link rel="stylesheet" href="../../assets/css/main.css" />
</head>

<body>
<header class="header">
  
  <!-- Place favicon.ico in the root directory -->

  <!-- ========================= CSS here ========================= -->
  
    <div class="navbar-area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand" href="../../index.php">
                <img src="../../assets/img/logo/lg.webp" style="width:80%" alt="Logo" />
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                <ul id="nav" class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="page-scroll" href="../controllers/redirect.php">Home</a>
                  </li>
            
                  <li class="nav-item">
                    <a href="../controllers/logout.php">logout</a>
                  </li>
                  
                </ul>
              </div>
              
              <!-- navbar collapse -->
            </nav>
            <!-- navbar -->
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
    <!-- navbar area -->
    
  </header>
  <section id="home" class="pick">
	<div class="container">
		<h1>Add a row (admin)</h1>
		<form action="../controllers/adminAdder.php" method="POST">
			<label for="od">Outbound delivery:</label>
			<input type="text" id="od" name="od">

			<label for="region">Region:</label>
  <input type="text" id="region" name="region">

  <label for="tdate">Tdate:</label>
  <input type="text" id="tdate" name="tdate">

  <label for="country">Country:</label>
  <input type="text" id="country" name="country">

  <label for="discharging_port">Discharging Port:</label>
  <input type="text" id="discharging_port" name="discharging_port">

  <label for="delivery_mode">Delivery Mode:</label>
  <input type="text" id="delivery_mode" name="delivery_mode">

  <label for="customer_name">Customer Name:</label>
  <input type="text" id="customer_name" name="customer_name">

  <label for="customer_group">Customer Group:</label>
  <input type="text" id="customer_group" name="customer_group">

  <label for="category">Category:</label>
  <input type="text" id="category" name="category">

  <label for="pid">PID:</label>
  <input type="text" id="pid" name="pid">

  <label for="pallets">Pallets:</label>
  <input type="text" id="pallets" name="pallets">

  <label for="branding">Branding:</label>
  <input type="text" id="branding" name="branding">

  <label for="total_volume">Total Volume:</label>
  <input type="text" id="total_volume" name="total_volume">

  <label for="volume_per_container">Volume per Container:</label>
  <input type="text" id="volume_per_container" name="volume_per_container">

  <label for="incoterm">Incoterm:</label>
  <input type="text" id="incoterm" name="incoterm">

  <label for="status1">Status 1:</label>
  <input type="text" id="status1" name="status1">

  <label for="status2">Status 2:</label>
  <input type="text" id="status2" name="status2">

  <label for="payment_terms">Payment Terms:</label>
  <input type="text" id="payment_terms" name="payment_terms">

  <label for="payment_terms_days">Payment Terms Days:</label>
  <input type="text" id="payment_terms_days" name="payment_terms_days">

  <label for="price">Price:</label>
  <input type="text" id="price" name="price">

  <label for="estimated_freight">Estimated Freight:</label>
  <input type="text" id="estimated_freight" name="estimated_freight">

  <label for="estimated_fob">Estimated FOB:</label>
  <input type="text" id="estimated_fob" name="estimated_fob">

  <label for="sales_order">Sales Order:</label>
  <input type="text" id="sales_order" name="sales_order">

  <label for="supplier">Supplier:</label>
  <input type="text" id="supplier" name="supplier">

  <label for="transporter">Transporter:</label>
  <input type="text" id="transporter" name="transporter">

  <label for="inspection">Inspection:</label>
  <input type="text" id="inspection" name="inspection">

  <label for="shipping_line">Shipping Line:</label>
  <input type="text" id="shipping_line" name="shipping_line">

  <label for="shipped_via">Shipped Via:</label>
  <input type="text" id="shipped_via" name="shipped_via">

  <label for="loading_date_at_plant">Loading Date at Plant:</label>
  <input type="text" id="loading_date_at_plant" name="loading_date_at_plant">

  <label for="quantity_removed_from_the_site">Quantity Removed from the Site:</label>
  <input type="text" id="quantity_removed_from_the_site" name="quantity_removed_from_the_site">

  <label for="stuffing_date">Stuffing Date:</label>
  <input type="text" id="stuffing_date" name="stuffing_date">

  <label for="real_freight">Real Freight:</label>
  <input type="text" id="real_freight" name="real_freight">

  <label for="real_fob">Real FOB:</label>
  <input type="text" id="real_fob" name="real_fob">

  <label for="blno">BL No:</label>
  <input type="text" id="blno" name="blno">

  <label for="sequence_date">Sequence Date:</label>
  <input type="text" id="sequence_date" name="sequence_date">

  <label for="transit_time">Transit Time:</label>
  <input type="text" id="transit_time" name="transit_time">

  <label for="bldate">BL Date:</label>
  <input type="text" id="bldate" name="bldate">

  <label for="net_quantity">Net Quantity:</label>
  <input type="text" id="net_quantity" name="net_quantity">

  <label for="clearance_date">Clearance Date:</label>
  <input type="text" id="clearance_date" name="clearance_date">

  <label for="userComment">User Comment:</label>
  <input type="text" id="userComment" name="userComment">

  <label for="type_tc">Type TC:</label>
  <input type="text" id="type_tc" name="type_tc">

  <label for="port_loading">Port Loading:</label>
  <input type="text" id="port_loading" name="port_loading">

  <label for="freight_invoice">Freight Invoice:</label>
  <input type="text" id="freight_invoice" name="freight_invoice">

  <label for="freight_invoice2">Freight Invoice 2:</label>
  <input type="text" id="freight_invoice2" name="freight_invoice2">

  <label for="freight_invoice3">Freight Invoice 3:</label>
  <input type="text" id="freight_invoice3" name="freight_invoice3">

  <label for="days_of_storage">Days of Storage:</label>
  <input type="text" id="days_of_storage" name="days_of_storage">

  <label for="storage_cost">Storage Cost:</label>
  <input type="text" id="storage_cost" name="storage_cost">

  <label for="days_of_storage2">Days of Storage 2:</label>
  <input type="text" id="days_of_storage2" name="days_of_storage2">

  <label for="storage_cost2">Storage Cost 2:</label>
  <input type="text" id="storage_cost2" name="storage_cost2">

  <label for="days_of_storage3">Days of Storage 3:</label>
  <input type="text" id="days_of_storage3" name="days_of_storage3">

  <label for="storage_cost3">Storage Cost 3:</label>
  <input type="text" id="storage_cost3" name="storage_cost3">

  <label for="jours_half">Jours Half:</label>
  <input type="text" id="jours_half" name="jours_half">

  <label for="jours_1">Jours 1:</label>
  <input type="text" id="jours_1" name="jours_1">

  <label for="jours_2">Jours 2:</label>
  <input type="text" id="jours_2" name="jours_2">

  <label for="jours_3">Jours 3:</label>
  <input type="text" id="jours_3" name="jours_3">

  <label for="ac_status">AC Status:</label>
  <input type="text" id="ac_status" name="ac_status">

  <label for="contract_id">Contract ID:</label>
  <input type="text" id="contract_id" name="contract_id">

  <label for="contract_status">Contract Status:</label>
  <input type="text" id="contract_status" name="contract_status">

  <label for="invoice">Invoice:</label>
  <input type="text" id="invoice" name="invoice">

  <label for="Payment_status">Payment Status:</label>
  <input type="text" id="Payment_status" name="Payment_status">

      <input type="submit" value="Submit">

    </div>
    </section>

<?php 
include '../models/User.php';
?>