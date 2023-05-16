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


public function getTransactionYear($date)
{
    $query = "SELECT YEAR($date) AS year FROM sales_transaction";
    $result = $this->connection->query($query);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $year = $row['year'];
        $result->free_result();
        return $year;
    } else {
        return null; 
}
}

public function calculateNumberOfTc()
{
    $query = "SELECT total_volume,volume_per_container  
              FROM temporary_full_table ";
    
    $result = $this->connection->query($query);
    
    if ($result) {
        $row = $result->fetch_assoc();
        $total_volume = $row['total_volume'];
        $volume_per_container = $row['volume_per_container'];

        $number_of_tc = $total_volume / $volume_per_container;

        $result->free_result();
        return $number_of_tc;
    } else {
        return null; 
    }
}

public function getPriceExw()
    {
        $query = "SELECT price, estimated_freight, estimated_fob, estimated_insurance 
                  FROM temporary_full_table ";
        
        $result = $this->connection->query($query);
        
        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $price = $row['price'];
            $estimated_freight = $row['estimated_freight'];
            $estimated_fob = $row['estimated_fob'];
            $estimated_insurance = $row['estimated_insurance'];
            
            $price_exw = $price - $estimated_freight - $estimated_fob - $estimated_insurance;
            
            $result->free_result();
            return $price_exw;
        } else {
            return null; 
        }
    }

    public function getPriceFOB()
    {
        $query = "SELECT price, estimated_freight, estimated_insurance 
                  FROM temporary_full_table ";
        
        $result = $this->connection->query($query);
        
        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $price = $row['price'];
            $estimated_freight = $row['estimated_freight'];
            $estimated_fob = $row['estimated_fob'];
            $estimated_insurance = $row['estimated_insurance'];
            
            $price_fob = $price - $estimated_freight- $estimated_insurance;
            
            $result->free_result();
            return $price_fob;
        } else {
            return null; 
        }
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
    $result = $net_quantity * $total_volume;
    
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $invoiced_amount = $row['invoiced_amount'];
        $result->free_result();
        return $invoiced_amount;
    } else {
        return null; 
    }
}

public function getPaymentDeadline($bldate, $payment_terms_days)
    {
        $bldateObj = DateTime::createFromFormat('d-m-Y', $bldate);
        $payment_deadlineObj = $bldateObj->add(new DateInterval("P{$payment_terms_days}D"));
        $payment_deadline = $payment_deadlineObj->format('d-m-Y');
        
        return $payment_deadline;
    }


}

?>