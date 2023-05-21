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

    $sql = "SELECT * FROM temporary_full_table";
    $result = $conn->query($sql);
    if ($result->rowCount() > 0){
        $paid = array();
        $notpaid = array();
        while ($row = $result->fetch()){
            if (strstr($row["Payment_status"],"Paid") && !(strstr($row["Payment_status"],"Not")))
            {
                $paid[] = $row["Payment_status"];

            }
            else{
                $notpaid[] = $row["Payment_status"];
            }
            
        }
    }
    
?>
<div class="chartBox">
  <canvas id="myChart"></canvas>
</div>

<script>
    // Setup Block
    
    
    const paid = <?php echo json_encode($paid) ?>;
    const notpaid = <?php echo json_encode($notpaid) ?>;

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
        
   
</script>
    
    
</body>
</html>

