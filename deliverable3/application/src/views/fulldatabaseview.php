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
        <th>Outbound delivery</th>
         <th>Freight Invoice 1</th>
         <th>Freight Invoice 2</th>
         <th>Freight Invoice 3</th>
         <th>Sales order</th>
         <th>Payment terms</th>
         <th>Clearance Date</th>
         <th>Payment terms days</th>
         <th>Incoterm</th>
         <th>Total Volume</th>
         <th>Invoice</th>
         <th>UserComment</th>
         <th>Estimated FOB</th>
         <th>Real FOB</th>
         <th>Transaction Date</th>
         <th>Payment Status</th>
    </thead>
    <tbody>
    <?php
    //Create new user (just for testing , the user will be in the session array)
    require '../dbconfig.php';
    require '../models/User.php';
   $userModel = new User($conn);
   //$tableName = "Sales_Transaction";
  // print_r();
    $fetchData = $userModel->selectTable();
    if(is_array($fetchData)){      
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $data['od']??''; ?></td>
      <td><?php echo $data['freight_invoice']??''; ?></td>
      <td><?php echo $data['freight_invoice2']??''; ?></td>
      <td><?php echo $data['freight_invoice3']??''; ?></td>
      <td><?php echo $data['sales_order']??''; ?></td>
      <td><?php echo $data['payment_terms']??''; ?></td>
      <td><?php echo $data['clearance_date']??''; ?></td>
      <td><?php echo $data['payment_terms_days']??''; ?></td>
      <td><?php echo $data['incoterm']??''; ?></td>
      <td><?php echo $data['total_volume']??''; ?></td>
      <td><?php echo $data['invoice']??''; ?></td>
      <td><?php echo $data['userComment']??''; ?></td> 
      <td><?php echo $data['estimated_fob']??''; ?></td> 
      <td><?php echo $data['real_fob']??''; ?></td>
      <td><?php echo $data['tdate']??''; ?></td>  
      <td><?php echo $data['Payment_status']??''; ?></td>     
     </tr>
     <?php
      }}else{ ?>
      <tr>
        <td colspan="16">
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
</body>
</html>