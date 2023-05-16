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
		<form action="../controllers/salesEditor2.php" method="POST">

            
			<label for="freight_invoice">Freight Invoice 1:</label>
            <?php 
            echo "<input type='text' id='freight_invoice' name='freight_invoice' value='".$_SESSION["fetch_sales"][0]["freight_invoice"]."'>";
            ?>
			

			<label for="freight_invoice_2">Freight Invoice 2:</label>
			<?php 
    echo "<input type='text' id='freight_invoice2' name='freight_invoice2' value='".$_SESSION["fetch_sales"][0]["freight_invoice2"]."'>";
?>


			<label for="freight_invoice_3">Freight Invoice 3:</label>
			<?php
    echo "<input type='text' id='freight_invoice3' name='freight_invoice3' value='".$_SESSION["fetch_sales"][0]["freight_invoice3"]."'>";
?>

			<label for="sales_order">Sales order:</label>
			<?php
    echo "<input type='text' id='sales_order' name='sales_order' value='".$_SESSION["fetch_sales"][0]["sales_order"]."'>";
?>

			<label for="payment_terms">Payment terms:</label>
			<?php
    echo "<input type='text' id='payment_terms' name='payment_terms' value='".$_SESSION["fetch_sales"][0]["payment_terms"]."'>";
?>

		

            <label for="clearance_date">Clearance Date:</label>
            <?php
    echo "<input type='date' id='clearance_date' name='clearance_date' value='".$_SESSION["fetch_sales"][0]["clearance_date"]."'>";
?>

            <label for="payment_terms_days">Payment Terms Days:</label>
            <?php
    echo "<input type='number' id='payment_terms_days' name='payment_terms_days' value='".$_SESSION["fetch_sales"][0]["payment_terms_days"]."'>";
?>

            <label for="incoterm">Incoterm:</label>
            <?php
    echo "<input type='text' id='incoterm' name='incoterm' value='".$_SESSION["fetch_sales"][0]["incoterm"]."'>";
?>

            <label for="total_volume">Total Volume:</label>
            <?php
    echo "<input type='number' id='total_volume' name='total_volume' value='".$_SESSION["fetch_sales"][0]["total_volume"]."'>";
?>

            <label for="invoice">Invoice:</label>
            <?php
    echo "<input type='text' id='invoice' name='invoice' value='".$_SESSION["fetch_sales"][0]["invoice"]."'>";
?>

            <label for="userComment">User Comment:</label>
            <?php
    echo "<input type='text' id='userComment' name='userComment' value='".$_SESSION["fetch_sales"][0]["userComment"]."'>";
?>


            <label for="estimated_fob">Estimated FOB:</label>
            <?php
    echo "<input type='text' id='estimated_fob' name='estimated_fob' value='".$_SESSION["fetch_sales"][0]["estimated_fob"]."'>";
?>

            <label for="real_fob">Real FOB:</label>
            <?php
    echo "<input type='text' id='real_fob' name='real_fob' value='".$_SESSION["fetch_sales"][0]["real_fob"]."'>";
?>

            <label for="tdate">Transaction Date:</label>
            <?php
    echo "<input type='date' id='tdate' name='tdate' value='".$_SESSION["fetch_sales"][0]["tdate"]."'>";
?>

            <label for="payment_status">Payment Status:</label>
            <?php
    echo "<input type='text' id='payment_status' name='payment_status' value='".$_SESSION["fetch_sales"][0]["payment_status"]."'>";
?>

      <input type="submit" value="Submit">

<?php 
include '../models/User.php';
?>