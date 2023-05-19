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
      <td><?php echo $data['od']??''; ?></td>
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
      <td><?php echo $phosphateModel->getMoisFacturation($data['$clearance_date'])??''; ?></td>  


     </tr>
     <?php
      }}else{ ?>
      <tr>
        <td colspan="37">
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

