<?php
	if(!isset($_SESSION))
	{
		session_start();
	}


  if (!isset($_SESSION["role"])) {
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
            <h1>Full Table </h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                
          
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                    <?php 
                    
    require '../dbconfig.php';
    require '../models/User.php';
    require '../models/PhosphateQueries.php';
   $userModel = new User($conn);
   //$tableName = "Sales_Transaction";
   
    $fetchData = $userModel->selectAll();

        foreach($fetchData[0] as $colname => $val){
          if (!is_numeric($colname)){
            echo "<th>$colname</th>";
          }
          
        }

                    ?>
                    </tr>
                </thead>
    
    
        
   
    <tbody>
    <?php
    foreach($fetchData as $row){
      echo "<tr>";
      $counter = 0;
      $arr =  array();
      //print_r($row);
      foreach($row as $entry){
        if ($counter%2 == 0 && $counter != 58){
          echo "<td>$entry</td>";
          
        }
        $counter++;
      }
      
      if (strstr($row['payment_status'],"Paid") && !(strstr($row['payment_status'],"Not")))
        echo '<td ><p class="status paid">'.$row['payment_status'].'</p></td>';
      else{
        echo '<td ><p class="status notpaid">'.$row['payment_status'].'</p></td>';

      }
      echo "<tr>";
    }
    ?>
    </tbody>
          </table>
        </section>
   

</div>
  </main>
</body>
</html>