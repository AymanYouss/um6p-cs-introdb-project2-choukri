<?php



class PhosphateQueries 
{
    private $connection;
    public function __construct($conn)
    {
        $this->connection=$conn;
    }


    public function getQuarter($date)
    {
        $month = date('n', strtotime($date));
        
        if ($month >= 1 && $month <= 3) {
            $quarter = 'Q1';
        } elseif ($month >= 4 && $month <= 6) {
            $quarter = 'Q2';
        } elseif ($month >= 7 && $month <= 9) {
            $quarter = 'Q3';
        } elseif ($month >= 10 && $month <= 12) {
            $quarter = 'Q4';
        } else {
            $quarter = '';
        }
        
        return $quarter;
    }


public function getYear($date)
{

    $datetime = DateTime::createFromFormat('Y-m-d', $date);
    $a = $datetime->format('y');

    if ($a < 0){
        return 0;
    }
    return $datetime->format('y');
   
}

public function calculateNumberOfTc($total_volume,$volume_per_container)
{
    try{
        $res =  $total_volume / $volume_per_container;
    }
    catch (DivisionByZeroError){
        return 0;
    }
    return $res;
    

}

public function getPriceExw($price , $estimated_freight , $estimated_fob , $estimated_insurance)
    {
        return $price - $estimated_freight - $estimated_fob - $estimated_insurance;
         
    }

    public function getPriceFOB( $price , $estimated_freight, $estimated_insurance)
    {
        return $price - $estimated_freight- $estimated_insurance;
     
    }


    public function getCaFOB($price_fob,$net_quantity){
        return $price_fob*$net_quantity;

    }


    public function getBlYear($bldate)
{
    $query = "SELECT YEAR($bldate) AS year FROM temporary_full_table ";
    $result = $this->connection->query($query);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $bl_year = $row['year'];
        $result->free_result();
        return $bl_year;
    } else {
        return null; 
}
}

public function getBlMonth($bldate)
{
    $query = "SELECT MONTH($bldate) AS month FROM temporary_full_table";
    $result = $this->connection->query($query);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $bl_month = $row['month'];
        $result->free_result();
        return $bl_month;
    } else {
        return null; 
}
}

public function getBlQuarter($bldate)
{
    $month = date('n', strtotime($bldate));
    
    if ($month >= 1 && $month <= 3) {
        $bl_quarter = 'Q1';
    } elseif ($month >= 4 && $month <= 6) {
        $bl_quarter = 'Q2';
    } elseif ($month >= 7 && $month <= 9) {
        $bl_quarter = 'Q3';
    } elseif ($month >= 10 && $month <= 12) {
        $bl_quarter = 'Q4';
    } else {
        $bl_quarter = '';
    }
    
    return $bl_quarter;
}


public function getInvoicedAmount($net_quantity, $total_volume)
{
    return $net_quantity * $total_volume;

}

public function getPaymentDeadline($bldate, $payment_terms_days)
    {
        $bldateObj = DateTime::createFromFormat('d-m-Y', $bldate);
        $payment_deadlineObj = $bldateObj->add(new DateInterval("P{$payment_terms_days}D"));
        $payment_deadline = $payment_deadlineObj->format('d-m-Y');
        
        return $payment_deadline;
    }
    

    
    public function getEstimatedInsurance($incoterm){
        if ($incoterm == "CIF"){
            return 2;
        }
        else{
            return 0;
        }
    }
    public function getCA_EXW($price_EXW,$net_quantity){
        return $price_EXW * $net_quantity;
    }
    public function getCA_CFR($net_quantity,$price){
        return $net_quantity*$price;
        
    }
    public function getEta($transit_time,$bldate){
        $numer = (string) $transit_time;
        return date('Y-m-d', strtotime($bldate. ' + '.$numer.' days'));
        
    }
    public function getMoisFacturation($clearance_date){
        
        $month = date('F', strtotime($clearance_date));
        $year = date('Y', strtotime($clearance_date));
        return $month.' '.$year;
  
        
    }


}


?>