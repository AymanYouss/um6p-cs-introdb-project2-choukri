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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <?php include 'head.html' ?>
    <style>body{
      display: flex;
      flex-direction: column;}
      .chartBox{
        width: 100%;
        display: flex;
        justify-content: space-evenly;
        flex-direction: row;
    }
    .chartBox div{
     width: 30%;
     display: flex;
     justify-content: center;
     text-align: center;
     flex-direction: column;
     border-radius: 14%;
    }

    .chartBox .div1:hover{
     transform: scale(1.05);
     background-color: lightblue;
     margin-left: 2%;
    }

    .chartBox .div2:hover{
     transform: scale(1.05);
     background-color: lightblue;
     margin-right: 2%;
    }
    .chartBox h3:hover{
      color: red;
    }
    </style>
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
                <a href="../controllers/export.php">Export to csv</a>
            </div>
          
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
      foreach($row as $k => $entry){
        if (!is_numeric($k) & $k != "payment_status"){
          echo "<td>$entry</td>";
          
        }
        $counter++;
      }
      
      if (strstr($row['payment_status'],"Paid") && !(strstr($row['payment_status'],"Not Paid")))
        echo '<td ><p class="status paid">Paid</p></td>';
      else{
        echo '<td ><p class="status notpaid">Not Paid</p></td>';

      }
      echo "<tr>";
    }
    ?>
    </tbody>
          </table>
        </section>
   

</div>

  </main>
  <?php

        $db_name='phosphatefeeds';
        $password="";
        $user="root";
        $host="localhost";
        $dsn="mysql:host=$host;port=3306;dbname=$db_name";
        $conn=null;
        try{
            $conn= new PDO($dsn,$user,$password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();

        }

    $sql = "SELECT * FROM temporary_full_table";
    $result = $conn->query($sql);
    if ($result->rowCount() > 0){
        $paid = array();
        $notpaid = array();
        while ($row = $result->fetch()){
            if (strstr($row["payment_status"],"Paid") && !(strstr($row["payment_status"],"Not")))
            {
                $paid[] = $row["payment_status"];

            }
            else{
                $notpaid[] = $row["payment_status"];
            }
            
        }
    }

    $sql2= "SELECT COUNT(*) as count, country FROM temporary_full_table GROUP BY country";
    $result2 = $conn->query($sql2);
    if ($result2->rowCount() > 0){
       $country= array();
       $howMuch = array();
        while ($row = $result2->fetch()){
            $country[] = $row["country"];
            $howMuch[] = $row ["count"];
        }
      }
    
?>
<div class="chartBox">
  <div class="div1">
    <h3>Countries Display</h3>
    <canvas id="myChart"></canvas>
  </div>
  <div class="div2">
    <h3>Paid Transactions</h3>
    <canvas id="myChart2"></canvas>
  </div>
  
  
</div>

<script>
    // Setup Block
    
    
    const paid = <?php echo json_encode($paid) ?>;
    const notpaid = <?php echo json_encode($notpaid) ?>;
    const country = <?php echo json_encode($country) ?>;
    const howMuch = <?php echo json_encode($howMuch) ?>;

    numP= paid.length;
    numN = notpaid.length;
   
    const data = {
            labels: [
            'Paid Transactions',
            'Not Paid Transactions',
            
        ],
        datasets: [{
            label: 'Number of transactions',
            data: [ numP, numN],
            backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            
            ],
            hoverOffset: 4
        }]
    };
    const config = {
        type: 'doughnut',
        data: data,
    };
    const myChart = new Chart(
        document.getElementById('myChart'),
        config

    );
    const data2 = {
            labels: country,
            datasets: 
            [{
                label: 'Number of Transactions made by the country',
                data: howMuch,
                backgroundColor: 
                [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)',
                    'rgb(255, 20, 8)',
                    'rgb(255, 2, 86)'
                ],
    
        }
  ]
    };
    const config2 = {
        type: 'pie',
        data: data2,
        
    };
    const myChart2 = new Chart(
        document.getElementById('myChart2'),
        config2

    );
        
   
</script>


 

  
</body>
</html>