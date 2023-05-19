<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">

   <div class="">
    
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead>
        <?php 
        //Create new user (just for testing , the user will be in the session array)
    require '../dbconfig.php';
    require '../models/User.php';
   $userModel = new User($conn);
   //$tableName = "Sales_Transaction";
   
    $fetchData = $userModel->selectAll();

        foreach($fetchData[0] as $colname => $val){
          if (!is_numeric($colname)){
            echo "<th>$colname</th>";
          }
          
        }
        ?>
        
    </thead>
    <tbody>
    <?php
    foreach($fetchData as $row){
      echo "<tr>";
      $counter = 0;
      $arr =  array();
      foreach($row as $entry){
        if ($counter%2 == 0){
          echo "<td>$entry</td>";
          
        }
        $counter++;
      }
      echo "<tr>";
    }
    ?>
   </div>
 
</div>

</div>
</body>
</html>