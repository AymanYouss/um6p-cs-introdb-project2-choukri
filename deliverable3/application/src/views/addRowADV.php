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
		<form action="../controllers/advAdder.php" method="POST">
			<label for="od">Outbound delivery:</label>
			<input type="text" id="od" name="od">

			<label for="ac_status">Avis de Chargement Status:</label>
			<input type="text" id="ac_status" name="ac_status">

			<label for="contract_id">Contract ID:</label>
			<input type="text" id="contract_id" name="contract_id">

			<label for="contract_status">Contract Status:</label>
			<input type="text" id="contract_status" name="contract_status">

			<label for="invoice">Invoice:</label>
			<input type="text" id="invoiced" name="invoiced">

			<label for="invoiced_amount">Incoiced Amount:</label>
			<input type="text" id="invoiced_amount" name="invoiced_amount">

		

            <label for="payment_deadline">Payment Deadline:</label>
            <input type="date" id="payment_deadline" name="payment_deadline">

            <label for="payment_status">Payment Status:</label>
            <input type="number" id="payment_status" name="payment_status">

            
            <!--<label for="payment_status">Payment Status:</label>
            <select id="payment_status" name="payment_status">
                <option value="pending">Pending</option>
                <option value="paid">Paid</option>
                <option value="late">Late</option>
            </select>-->

      <input type="submit" value="Submit">

<?php 
include '../models/User.php';
?>