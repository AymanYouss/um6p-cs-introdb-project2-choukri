<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
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
                      <a class="page-scroll" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#feature">Actions</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#tracking" id="abt" onmouseover="showabt1()" onmouseout="showabt()">About us</a>
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
            <h1>Avis de chargement </h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                
          
        </section>
        <section class="table__body">
            <table>
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
      if (strstr($data['payment_status'],"Paid") && !(strstr($data['payment_status'],"Not")))
        echo '<td ><p class="status paid">'.$data['payment_status'].'</p></td>';
      else{
        echo '<td ><p class="status notpaid">'.$data['payment_status'].'</p></td>';

      }
      ?>
      
           
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
        </section>
    </main>
    
    
   
 



</body>
</html>