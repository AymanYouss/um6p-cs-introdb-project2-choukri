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
			margin-left: 50%;
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
	<?php
	 
	 //Create new user (just for testing , the user will be in the session array)
	 require '../dbconfig.php';
	 require '../models/User.php';
	 require '../models/PhosphateQueries.php';
	 $phosphateUser= new PhosphateQueries($conn);
	 $userModel = new User($conn);
	
	 $fetchData = $userModel->selectADV();
	 
	 ?>
	
	<div class="container">
		<h1>My Form</h1>
		<form action="../controllers/advEditor2.php" method="POST">

            
			<label for="ac_status">Avis de Chargement Status:</label>
            <?php 
            echo "<input type='text' id='ac_status' name='ac_status' value='".$_SESSION["fetch_adv"][0]["ac_status"]."'>";
            ?>
			

			<label for="contract_id">Contract Id:</label>
			<?php echo "<input type='text' id='contract_id' name='contract_id' value='".$_SESSION["fetch_adv"][0]["contract_id"]."'>";
			?>


			<label for="contract_status">Contract Status:</label>
			<?php echo "<input type='text' id='contract_status' name='contract_status' value='".$_SESSION["fetch_adv"][0]["contract_status"]."'>";
?>

			<label for="invoice">Invoice:</label>
			<?php echo "<input type='text' id='invoice' name='invoice' value='".$_SESSION["fetch_adv"][0]["invoice"]."'>";
?>

			<label for="invoiced_amount">Invoiced Amount:</label>
			<?php
			 	if(is_array($fetchData)){      
					foreach($fetchData as $data){
				  		if ( $data["od"] == $_SESSION["fetch_adv"][0]["od"]) {
					  		echo "<input type='text' id='invoiced_amount' name='invoiced_amount' value='".$phosphateUser->getInvoicedAmount($data["net_quantity"],$data["total_volume"])."'>";
						}
						

				}
			}
			?>

			


	

            <label for="payment_deadline">Payment Deadline:</label>
            <?php
			if(is_array($fetchData)){      
				foreach($fetchData as $data){
					  if ( $data["od"] == $_SESSION["fetch_adv"][0]["od"]) {
						  echo "<input type='text' id='payment_deadline' name='payment_deadline' value='".$phosphateUser->getEta($data['payment_terms_days'],$data['bldate'])."'>";
					}
					

			}
		}
    
			?>

            <label for="payment_status">Payment Status:</label>
            <?php
    echo "<input type='text' id='payment_status' name='payment_status' value='".$_SESSION["fetch_adv"][0]["payment_status"]."'>";
	
?>
<input type="submit" value="Submit">

           

            
		</form>
	</div>
</body>
</html>
