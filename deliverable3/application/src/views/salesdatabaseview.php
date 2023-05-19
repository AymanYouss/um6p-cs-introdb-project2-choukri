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
      <td><?php echo $data['od']??''; ?></td>
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
        <td colspan="24">
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