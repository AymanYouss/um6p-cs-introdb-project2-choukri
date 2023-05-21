<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style type="text/css">
    
</style>

<body>
    


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

    $sql = "SELECT * FROM sales_transaction";
    $result = $conn->query($sql);
    if ($result->rowCount() > 0){
        $total_volume = array();
        while ($row = $result->fetch()){
            $total_volume[] = $row["total_volume"];
        }
    }
?>
<div class="chartBox">
  <canvas id="myChart"></canvas>
</div>

<script>
    // Setup Block
    
    
    const total_volume = <?php echo json_encode($total_volume) ?>;
    document.write(total_volume.length);
    labelsi = new Array();
    for (let i = 0; i < total_volume.length; i++) {
        labelsi[i]=" ";
    }
    const data ={
        
        labels: labelsi,
        datasets: [{
            label: '# of Votes',
            data: total_volume,
            borderWidth: 1
            
        }]
        };
    // Config Block

    const config = {
        type: 'bar',
        data,
        options: {
        scales: {
            y: {
            beginAtZero: true
            }
        }
        }

    }
    // Render Block

    const myChart = new Chart(
        document.getElementById('myChart'),
        config

    );
        
        
   
</script>
    
    
</body>
</html>

