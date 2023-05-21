<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style type="text/css">
    .chartBox{
        width: 500px;
    }
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

    
    $sql= "SELECT COUNT(*) as count, country FROM temporary_full_table GROUP BY country";
    $result = $conn->query($sql);
    if ($result->rowCount() > 0){
       $country= array();
       $howMuch = array();
        while ($row = $result->fetch()){
            $country[] = $row["country"];
            $howMuch[] = $row ["count"];
            
        }
    }
    
    
?>
<div class="chartBox">
  <canvas id="myChart"></canvas>
</div>

<script>
    // Setup Block
    
    
    const country = <?php echo json_encode($country) ?>;
    const howMuch = <?php echo json_encode($howMuch) ?>;
    

   
    const data = {
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
    const config = {
        type: 'pie',
        data: data,
        
    };
    const myChart = new Chart(
        document.getElementById('myChart'),
        config

    );
        
   
</script>
    
    
</body>
</html>

