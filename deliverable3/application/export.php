<?php
require '../dbconfig.php';
require '../models/User.php';
require '../models/PhosphateQueries.php';
require 'vendor/autoload.php';


$userModel = new User($conn);
$fetchData = $userModel->selectAll();

// Create a new Excel file
$spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Set the column headers
$colIndex = 1;
foreach ($fetchData[0] as $colname => $val) {
    if (!is_numeric($colname)) {
        $columnName = ucwords(str_replace('_', ' ', $colname)); // Modify column names if needed
        $sheet->setCellValueByColumnAndRow($colIndex, 1, $columnName);
        $colIndex++;
    }
}

// Set the data rows
$rowIndex = 2;
foreach ($fetchData as $row) {
    $colIndex = 1;
    foreach ($row as $entry) {
        if ($colIndex % 2 == 0 && $colIndex != 58) {
            $sheet->setCellValueByColumnAndRow($colIndex, $rowIndex, $entry);
        }
        $colIndex++;
    }
    $rowIndex++;
}

// Generate and save the Excel file
$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
$filename = 'full_database_view.xlsx';
$writer->save($filename);

// Set the appropriate headers for file download
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . $filename . '"');
header('Cache-Control: max-age=0');

// Output the file to the browser
readfile($filename);

// Delete the temporary file
unlink($filename);

?>
`
