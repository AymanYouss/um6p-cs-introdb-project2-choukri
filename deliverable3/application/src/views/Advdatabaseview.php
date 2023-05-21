<?php
	if(!isset($_SESSION))
	{
		session_start();
	}


  if (!isset($_SESSION) || $_SESSION["role"] != "adv") {
    include_once '../controllers/redirect.php';
  }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../../assets/css/tables.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.svg"/>
    <link rel="stylesheet" href="../../assets/css/bootstrap-5.0.0-alpha-2.min.css" />
    <link rel="stylesheet" href="../../assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="../../assets/css/animate.css" />
    <link rel="stylesheet" href="../../assets/css/main.css" />
    <title>ADV Database view</title>
    <?php include 'head.html' ?>
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
<body>
<main class="table">
        <section class="table__header">
            <h1>Administrateurs De Vente </h1>
            <div class="input-group">
                <input type="search"  id = "search" placeholder="Search Data by OD...">
                
          
        </section>
        <section class="table__body">
            <table id="table">
                <thead>
                    <tr>
                    <th>Outbound delivery</th>
                    <th>Avis de chargement status</th>
                    <th>Contract ID</th>
                    <th>Contract Status</th>
                    <th>Invoice</th>
                    <th>Invoiced amount</th>
                    <th>Payment deadline</th>
                    <th>Payment status</th>
                    </tr>
                </thead>

    <tbody>
    
    <?php
    //Create new user (just for testing , the user will be in the session array)
    require '../dbconfig.php';
    require '../models/User.php';
    require '../models/PhosphateQueries.php';
    $phosphateUser= new PhosphateQueries($conn);
    $userModel = new User($conn);
   
   $tableName = 'temporary_full_table';
  // print_r();
    $fetchData = $userModel->selectADV();
    if(is_array($fetchData)){      
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><strong><?php echo $data['od']??''; ?></strong></td>
      <td><?php echo $data['ac_status']??''; ?></td>
      <td><?php echo $data['contract_id']??''; ?></td>
      <td><?php echo $data['contract_status']??''; ?></td>
      <td><?php echo $data['invoice']??''; ?></td>
      <td><?php echo $phosphateUser->getInvoicedAmount($data['net_quantity'],$data['total_volume'])??''; ?></td>
      <td><?php echo $phosphateUser->getEta($data['payment_terms_days'],$data['bldate']) ??''; ?></td>
      
      
      <?php
      if (strstr($data['payment_status'],"Paid") && !(strstr($data['payment_status'],"Not Paid")))
        echo '<td ><p class="status paid">Paid</p></td>';
      else{
        echo '<td ><p class="status notpaid">Not Paid</p></td>';

      }
      ?>
      
           
     </tr>
     <?php
      }}else{ ?>
      <tr>
        <td colspan="17">
        <?php echo $fetchData; ?>
        </td>
      </tr>
    <?php
    }?>
            </tbody>
          </table>
        </section>
    </main>
    
  <script src="/application/assets/js/searchFirst.js">
  </script>
    
    
   
 



</body>
</html>