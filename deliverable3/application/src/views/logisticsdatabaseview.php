






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
                      <a class="page-scroll" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#feature">Actions</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#tracking" id="abt" onmouseover="showabt1()" onmouseout="showabt()">About us</a>
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
            <h1>Logistics </h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                
          
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                    <th>Outbound delivery</th>
                    <th>Supplier</th>
                    <th>Transporter</th>
                    <th>Inspection</th>
                    <th>Sphipping Line</th>
                    <th>Shipped Via</th>
                    <th>Loading date at Plant</th>
                    <th>Quantity removed from the site</th>
                    <th>Stuffing date</th>
                    <th>Real freight</th>
                    <th>Real FOB</th>
                    <th>BL N°</th>
                    <th>Sequence Date </th>
                    <th>Transit Time </th>
                    <th>ETA(Estimated Time of Arrival) </th>
                    <th>BL date estimated </th>
                    <th>BL Month</th>
                    <th>BL Quarter</th>
                    <th>BL Year</th>
                    <th>Net Quantity</th>
                    <th>CLearance Date</th>
                    <th>Comment</th>
                    <th>Type TC</th>
                    <th>Port Loading</th>
                    <th>Freight Invoice 1</th>
                    <th>Freight Invoice 2</th>
                    <th>Freight Invoice 3</th>
                    <th>Days of Storage</th>
                    <th>Storage Cost</th>
                    <th>Days of Storage 2</th>
                    <th>Storage Cost 2</th>
                    <th>Days of Storage 3</th>
                    <th>Storage Cost 3</th>
                    <th>1/2 Jours</th>
                    <th>1 Jours</th>
                    <th>2 Jours</th>
                    <th>3 Jours</th>
                    <th>Mois Facturation</th>

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
   $tableName = 'temporary_full_table';
   
  
  // print_r();
    $fetchData = $userModel->selectAll();
    if(is_array($fetchData)){      
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><strong><?php echo $data['od']??''; ?></strong></td>
      <td><?php echo $data['supplier']??''; ?></td>
      <td><?php echo $data['transporter']??''; ?></td>
      <td><?php echo $data['inspection']??''; ?></td>
      <td><?php echo $data['shipping_line']??''; ?></td>
      <td><?php echo $data['shipped_via']??''; ?></td>
      <td><?php echo $data['loading_date_at_plant']??''; ?></td>
      <td><?php echo $data['quantity_removed_from_the_site']??''; ?></td>
      <td><?php echo $data['stuffing_date']??''; ?></td>
      <td><?php echo $data['real_freight']??''; ?></td>
      <td><?php echo $data['real_fob']??''; ?></td>
      <td><?php echo $data['blno']??''; ?></td> 
      <td><?php echo $data['sequence_date']??''; ?></td> 
      <td><?php echo $data['transit_time']??''; ?></td>
      <td><?php echo $phosphateModel->getEta($data['transit_time'],$data['bldate'])??''; ?></td>  
      <td><?php echo $data['bldate']??''; ?></td> 
      <td><?php echo $phosphateModel->getBlMonth($data['bldate'])??''; ?></td>  
      <td><?php echo $phosphateModel->getQuarter($data['bldate'])??''; ?></td>      
      <td><?php echo $phosphateModel->getYear($data['bldate'])??''; ?></td>      
      <td><?php echo $data['net_quantity']??''; ?></td>      
      <td><?php echo $data['clearance_date']??''; ?></td>      
      <td><?php echo $data['userComment']??''; ?></td>      
      <td><?php echo $data['type_tc']??''; ?></td>      
      <td><?php echo $data['port_loading']??''; ?></td>      
      <td><?php echo $data['freight_invoice']??''; ?></td>      
      <td><?php echo $data['freight_invoice2']??''; ?></td>      
      <td><?php echo $data['freight_invoice3']??''; ?></td>   
      <td><?php echo $data['days_of_storage']??''; ?></td>      
      <td><?php echo $data['storage_cost']??''; ?></td>      
      <td><?php echo $data['days_of_storage2']??''; ?></td>      
      <td><?php echo $data['storage_cost2']??''; ?></td>      
      <td><?php echo $data['days_of_storage3']??''; ?></td>      
      <td><?php echo $data['storage_cost3']??''; ?></td>      
      <td><?php echo $data['jours_half']??''; ?></td>      
      <td><?php echo $data['jours_1']??''; ?></td>
      <td><?php echo $data['jours_2']??''; ?></td>  
      <td><?php echo $data['jours_3']??''; ?></td>  
      <td><?php echo $phosphateModel->getMoisFacturation($data['clearance_date'])??''; ?></td>
      
      
     
      
           
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
