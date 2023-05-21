<?php
require '../dbconfig.php';
require '../models/User.php';
require '../models/PhosphateQueries.php';


$query = $conn->prepare("CALL ExportToCsv()");
        $query->execute([

        ]);

header("Location: ../views/fulldatabaseview.php");
   


?>
`
