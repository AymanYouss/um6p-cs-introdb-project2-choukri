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
		<form action="../controllers/logisticsAdder.php" method="POST">
			<label for="od">Outbound delivery:</label>
			<input type="text" id="od" name="od">

			<label for="supplier">Supplier</label>
			<input type="text" id="supplier" name="supplier">

			<label for="transporter">Transporter</label>
			<input type="text" id="transporter" name="freight_invoice2">

			<label for="inspection">Inspection</label>
			<input type="text" id="inspection" name="inspection">

			<label for="shipping_line">Shipping Line</label>
			<input type="text" id="shipping_line" name="shipping_line">

			<label for="shipped_via">Shipped via</label>
			<input type="text" id="shipped_via" name="shipped_via">


            <label for="loading_date_at_plant">Loading date at plant</label>
            <input type="date" id="loading_date_at_plant" name="loading_date_at_plant">

            <label for="quantity_removed_from_site">Quantity removed from the site</label>
            <input type="number" id="quantity_removed_from_site" name="quantity_removed_from_site">

            <label for="stuffing_date">Stuffing date:</label>
            <input type="date" id="stuffing_date" name="stuffing_date">

            <label for="real_freight">Real freight:</label>
            <input type="number" id="real_freight" name="real_freight">

			<label for="real_fob">Real FOB:</label>
            <input type="number" id="real_fob" name="real_fob">

            <label for="blno">BL N°:</label>
            <input type="text" id="blno" name="blno">

            <label for="transit_time">Transit Time:</label>
            <input type="number" id="transit_time" name="transit_time">

			<label for="eta">>ETA(Estimated Time of Arrival):</label>
            <input type="date" id="eta" name="eta">

			<label for="bldate">BL date estimated:</label>
            <input type="date" id="bldate" name="bldate">

			<label for="blmonth">BL Month:</label>
            <input type="text" id="blmonth" name="blmonth">

			<label for="blquarter">BL Quarter:</label>
            <input type="text" id="blquarter" name="blquarter">

			<label for="blyear">BL Year:</label>
            <input type="text" id="blyear" name="blyear">

			<label for="net_quantity">Net Quantity:</label>
            <input type="number" id="net_quantity" name="net_quantity">

		
            <label for="clearance_date">CLearance Date:</label>
            <input type="date" id="clearance_date" name="clearance_date">

			
       		<label for="userComment">Comment:</label>
            <input type="text" id="userComment" name="userComment">

					
            <label for="type_tc">Type TC:</label>
            <input type="text" id="type_tc" name="type_tc">
					
            <label for="port_loading">Port Loading:</label>
            <input type="text" id="port_loading" name="port_loading">
					
            <label for="freight_invoice">Freight Invoice 1:</label>
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

			<label for="jours_half">1/2 Jours:</label>
            <input type="number" id="jours_half" name="jours_half">

			<label for="jours_1">1 Jours:</label>
            <input type="number" id="jours_1" name="jours_1">

			<label for="jours_2">2 Jours:</label>
            <input type="number" id="jours_2" name="jours_2">

			<label for="jours_3">3 Jours:</label>
            <input type="number" id="jours_3" name="jours_3">

			<label for="mois_facturation">Mois de facturation:</label>
            <input type="date" id="mois_facturation" name="mois_facturation">

      <input type="submit" value="Submit">

<?php 
include '../models/User.php';
?>