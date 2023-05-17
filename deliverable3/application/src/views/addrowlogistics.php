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
		<form action="../controllers/salesAdder.php" method="POST">
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

		

            <label for="loading_day_at_plant">Loading day at plant</label>
            <input type="date" id="loading_day_at_plant" name="loading_day_at_plant">

            <label for="quantity_removed_from_site">Quantite enleve du site</label>
            <input type="number" id="quantity_removed_from_site" name="quantity_removed_from_site">

            <label for="inco">Stuffing date</label>
            <input type="text" id="incoterm" name="incoterm">

            <label for="total_volume">Total Volume:</label>
            <input type="number" id="total_volume" name="total_volume">

            <label for="invoice">Invoice:</label>
            <input type="text" id="invoice" name="invoice">

            <label for="userComment">User Comment:</label>
            <input type="text" id="userComment" name="userComment">

            <label for="estimated_fob">Estimated FOB:</label>
            <input type="text" id="estimated_fob" name="estimated_fob">

            <label for="real_fob">Real FOB:</label>
            <input type="text" id="real_fob" name="real_fob">

            <label for="tdate">Transaction Date:</label>
            <input type="date" id="tdate" name="tdate">

            <label for="payment_status">Payment Status:</label>
            <select id="payment_status" name="payment_status">
                <option value="pending">Pending</option>
                <option value="paid">Paid</option>
                <option value="late">Late</option>
            </select>

      <input type="submit" value="Submit">

<?php 
include '../models/User.php';
?>