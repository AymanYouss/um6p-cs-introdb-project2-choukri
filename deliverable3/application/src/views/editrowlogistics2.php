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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/css/tables.css">
  <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.svg"/>
    <link rel="stylesheet" href="../../assets/css/bootstrap-5.0.0-alpha-2.min.css" />
    <link rel="stylesheet" href="../../assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="../../assets/css/animate.css" />
    <link rel="stylesheet" href="../../assets/css/main.css" />
</head>
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
                        <a href="../controllers/logout.php" class="page-scroll">logout</a>
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
<body>
	<div class="container">
		<h1>My Form</h1>
		<form action="../controllers/logisticsEditor2.php" method="POST">

            <label for="supplier">Supplier</label>
            <?php 
            echo "<input type='text' id='supplier' name='supplier' value='".$_SESSION["fetch_logistics"][0]["supplier"]."'>";
            ?>
            <label for="transporter">Transporter</label>
            <?php 
            echo "<input type='text' id='transporter' name='transporter' value='".$_SESSION["fetch_logistics"][0]["transporter"]."'>";
            ?>
            <label for="inspection">Inspection:</label>
            <?php 
            echo "<input type='text' id='inspection' name='inspection' value='".$_SESSION["fetch_logistics"][0]["inspection"]."'>";
            ?>
			<label for="shipping_line">Shipping Line:</label>
            <?php 
            echo "<input type='text' id='shipping_line' name='shipping_line' value='".$_SESSION["fetch_logistics"][0]["shipping_line"]."'>";
            ?>
			<label for="shipped_via">Shipping Via:</label>
            <?php 
            echo "<input type='text' id='shipped_via' name='shipped_via' value='".$_SESSION["fetch_logistics"][0]["shipped_via"]."'>";
            ?>
            <label for="loading_date_at_plant">Loading date at plant:</label>
            <?php 
            echo "<input type='date' id='loading_date_at_plant' name='loading_date_at_plant' value='".$_SESSION["fetch_logistics"][0]["loading_date_at_plant"]."'>";
            ?>
            <label for="quantity_removed_from_site">Quantity removed from the site:</label>
            <?php 
            echo "<input type='number' id='quantity_removed_from_site' name='quantity_removed_from_site' value='".$_SESSION["fetch_logistics"][0]["quantity_removed_from_site"]."'>";
            ?>
            <label for="stuffing_date">Stuffing date:</label>
            <?php 
            echo "<input type='date' id='stuffing_date' name='stuffing_date' value='".$_SESSION["fetch_logistics"][0]["stuffing_date"]."'>";
            ?>
            <label for="real_freight">Real freight:</label>
            <?php 
            echo "<input type='number' id='real_freight' name='real_freight' value='".$_SESSION["fetch_logistics"][0]["real_freight"]."'>";
            ?>
            <label for="real_fob">Real FOB:</label>
            <?php 
            echo "<input type='number' id='real_fob' name='real_fob' value='".$_SESSION["fetch_logistics"][0]["real_fob"]."'>";
            ?>
            <label for="blno">BL N°::</label>
            <?php 
            echo "<input type='text' id='blno' name='blno' value='".$_SESSION["fetch_logistics"][0]["blno"]."'>";
            ?>
            <label for="transit_time">Transit Time:</label>
            <?php 
            echo "<input type='numebr' id='transit_time' name='transit_time' value='".$_SESSION["fetch_logistics"][0]["transit_time"]."'>";
            ?>
            <label for="eta">ETA(Estimated Time of Arrival)::</label>
            <?php 
            echo "<input type='date' id='eta' name='stuffingeta_date' value='".$_SESSION["fetch_logistics"][0]["eta"]."'>";
            ?>
            <label for="bldate">BL date estimated::</label>
            <?php 
            echo "<input type='date' id='bldate' name='bldate' value='".$_SESSION["fetch_logistics"][0]["bldate"]."'>";
            ?>
            <label for="blmonth">BL Month:</label>
            <?php 
            echo "<input type='text' id='blmonth' name='blmonth' value='".$_SESSION["fetch_logistics"][0]["blmonth"]."'>";
            ?>
            <label for="blquarter">BL Quarter:</label>
            <?php 
            echo "<input type='text' id='blquarter' name='blquarter' value='".$_SESSION["fetch_logistics"][0]["blquarter"]."'>";
            ?>
            <label for="blyear">BL Year:</label>
            <?php 
            echo "<input type='text' id='blyear' name='blyear' value='".$_SESSION["fetch_logistics"][0]["blyear"]."'>";
            ?>
            <label for="net_quantity">Net Quantity:</label>
            <?php 
            echo "<input type='number' id='net_quantity' name='net_quantity' value='".$_SESSION["fetch_logistics"][0]["net_quantity"]."'>";
            ?>
            <label for="userComment">Comment :</label>
            <?php 
            echo "<input type='text' id='userComment' name='userComment' value='".$_SESSION["fetch_logistics"][0]["userComment"]."'>";
            ?>
            <label for="type_tc">Type TC:</label>
            <?php 
            echo "<input type='text' id='type_tc' name='type_tc' value='".$_SESSION["fetch_logistics"][0]["type_tc"]."'>";
            ?>
            <label for="port_loading">Port Loading:</label>
            <?php 
            echo "<input type='text' id='port_loading' name='port_loading' value='".$_SESSION["fetch_logistics"][0]["port_loading"]."'>";
            ?>
            <label for="freight_invoice">Freight Invoice 1:</label>
            <?php 
            echo "<input type='text' id='freight_invoice' name='freight_invoice' value='".$_SESSION["fetch_logistics"][0]["freight_invoice"]."'>";
            ?>
            <label for="freight_invoice2">Freight Invoice 2:</label>
            <?php 
            echo "<input type='text' id='freight_invoice2' name='freight_invoice2' value='".$_SESSION["fetch_logistics"][0]["freight_invoice2"]."'>";
            ?>
            <label for="freight_invoice">Freight Invoice 3:</label>
            <?php 
            echo "<input type='text' id='freight_invoice3' name='freight_invoice3' value='".$_SESSION["fetch_logistics"][0]["freight_invoice3"]."'>";
            ?>
			<label for="days_of_storage">Days of Storage:</label>
			<?php
            echo "<input type='text' id='days_of_storage' name='days_of_storage' value='".$_SESSION["fetch_logistics"][0]["days_of_storage"]."'>";
            ?>
            <label for="storage_cost">Storage Cost:</label>
			<?php
            echo "<input type='text' id='storage_cost' name='storage_cost' value='".$_SESSION["fetch_logistics"][0]["storage_cost"]."'>";
            ?>
            <label for="days_of_storag2">Days of Storag2e:</label>
			<?php
            echo "<input type='text' id='days_of_storage2' name='days_of_storage2' value='".$_SESSION["fetch_logistics"][0]["days_of_storage2"]."'>";
            ?>
            <label for="storage_cost2">Storage Cost2:</label>
			<?php
            echo "<input type='text' id='storage_cost2' name='storage_cost2' value='".$_SESSION["fetch_logistics"][0]["storage_cost2"]."'>";
            ?>
			<label for="days_of_storage3">Days of Storage3:</label>
			<?php
            echo "<input type='text' id='days_of_storage3' name='days_of_storage3' value='".$_SESSION["fetch_logistics"][0]["days_of_storage3"]."'>";
            ?>
            <label for="storage_cost3">Storage Cost3:</label>
			<?php
            echo "<input type='text' id='storage_cost3' name='storage_cost3' value='".$_SESSION["fetch_logistics"][0]["storage_cost3"]."'>";
            ?>
            <label for="jours_half">1/2 Jours:</label>
            <?php
            echo "<input type='text' id='jours_half' name='jours_half' value='".$_SESSION["fetch_sales"][0]["jours_half"]."'>";
            ?>
            <label for="jours_1">1 Jours:</label>
            <?php
            echo "<input type='text' id='jours_1' name='jours_1' value='".$_SESSION["fetch_sales"][0]["jours_1"]."'>";
            ?>            
            <label for="jours_2">2 Jours:</label>
            <?php
            echo "<input type='text' id='jours_2' name='jours_2' value='".$_SESSION["fetch_sales"][0]["jours_2"]."'>";
            ?>
            <label for="jours_half">3 Jours:</label>
            <?php
            echo "<input type='text' id='jours_3' name='jours_3' value='".$_SESSION["fetch_sales"][0]["jours_3"]."'>";
            ?>
            
            <label for="mois_facturation">Mois de facturation:</label>
            <?php
            echo "<input type='date' id='mois_facturation' name='mois_facturation' value='".$_SESSION["fetch_sales"][0]["mois_facturation"]."'>";
            ?>



      <input type="submit" value="Submit">

<?php 
include '../models/User.php';
?>