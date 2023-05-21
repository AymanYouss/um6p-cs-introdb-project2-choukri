<?php
	if(!isset($_SESSION))
	{
		session_start();
	}


  if (!isset($_SESSION) || $_SESSION["role"] != "sales") {
    include_once '../controllers/redirect.php';
  }
?>


<!DOCTYPE html>
<html>
<head>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/css/tables.css">
  <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.svg"/>
    <link rel="stylesheet" href="../../assets/css/bootstrap-5.0.0-alpha-2.min.css" />
    <link rel="stylesheet" href="../../assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="../../assets/css/animate.css" />
    <link rel="stylesheet" href="../../assets/css/main.css" />
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
                <a class="navbar-brand" href="index.html">
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
<main class="table">
        <section class="table__header">
            <h1>Sales </h1>
            <div class="input-group">
                <input type="search" id="search" placeholder="Search Data by OD...">
                
          
        </section>
        <section class="table__body">
            <table id ="table">
                <thead>
                    <tr>
                    <th>Outbound delivery</th>
                    <th>Region</th>
                    <th>Tdate</th>
                    <th>Quarter</th>
                    <th>Year</th>
                    <th>Country</th>
                    <th>Discharching port</th>
                    <th>Delivery Mode</th>
                    <th>Customer name</th>
                    <th>Customer group</th>
                    <th>Category</th>
                    <th>Pid</th>
                    <th>Pallets</th>
                    <th>Branding</th>
                    <th>Total volume </th>
                    <th>Volume per container</th>
                    <th>Number of tc</th>
                    <th>Incoterm</th>
                    <th>Status 1</th>
                    <th>Status 2</th>
                    <th>Payment Terms</th>
                    <th>Payment Terms Days </th>
                    <th>EStimated Freight</th>
                    <th>Estimated FOB</th>
                </tr>
            </thead>

    <tbody>


    <?php
    //Create new user (just for testing , the user will be in the session array)
    require '../dbconfig.php';
    require '../models/User.php';
    require '../models/PhosphateQueries.php';
   $userModel = new User($conn);
   $phosphateModel = new PhosphateQueries($conn);
   $tableName = 'full_temporary_table';
  
    $fetchData = $userModel->selectAll();
    //var_dump($fetchData);
    if(is_array($fetchData)){      
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><strong><?php echo $data['od']??''; ?></strong></td>
      <td><?php echo $data['region']??''; ?></td>
      <td><?php echo $data['tdate']??''; ?></td>
      <td><?php echo $phosphateModel->getQuarter($data['tdate'])??''; ?></td>
      <td><?php echo $phosphateModel->getYear($data['tdate'])??''; ?></td>
      <td><?php echo $data['country']??''; ?></td>
      <td><?php echo $data['discharging_port']??''; ?></td>
      <td><?php echo $data['delivery_mode']??''; ?></td>
      <td><?php echo $data['customer_name']??''; ?></td>
      <td><?php echo $data['customer_group']??''; ?></td>
      <td><?php echo $data['category']??''; ?></td>
      <td><?php echo $data['pid']??''; ?></td>
      <td><?php echo $data['pallets']??''; ?></td>
      <td><?php echo $data['branding']??''; ?></td> 
      <td><?php echo $data['total_volume']??''; ?></td> 
      <td><?php echo $data['volume_per_container']??''; ?></td>
      <td><?php echo $phosphateModel->calculateNumberOfTc($data['total_volume'],$data['volume_per_container']) ??''; ?></td>
      <td><?php echo $data['incoterm']??''; ?></td>  
      <td><?php echo $data['status1']??''; ?></td>
      <td><?php echo $data['status2']??''; ?></td>  
      <td><?php echo $data['payment_terms']??''; ?></td> 
      <td><?php echo $data['payment_terms_days']??''; ?></td> 
      <td><?php echo $data['estimated_freight']??''; ?></td>   
      <td><?php echo $data['estimated_fob']??''; ?></td> 
     
     </tr>
     <?php
      }}else{ ?>
      <tr>
        <td colspan="17">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
 
</div>

</div>
</script>
<script src="/application/assets/js/searchFirst.js">
</script>
</body>
</html>