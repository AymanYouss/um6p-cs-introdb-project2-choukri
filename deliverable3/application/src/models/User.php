<?php
 class User {
    private $connection;
    public function __construct($conn)
    {
        $this->connection=$conn;
    }
    public function login($email, $password) {
        $query = $this->connection->prepare("SELECT * FROM user_credentials WHERE email = :email");
        $query->execute([
            "email" => $email,
        ]);
        $user = $query->fetch();
        if ($user && password_verify($password, $user["upassword"])) {
            //pass arguments to session in user variable
            $_SESSION["user"]=$user;
            $_SESSION["role"]=$user["urole"];
            return true;
        }
        else {
            return false;
        }
    }
    public function register($email, $username, $password, $role) {
        $query = $this->connection->prepare("INSERT INTO user_credentials (username, upassword, email, urole) VALUES (:username, :upassword, :email, :urole)");
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);
        $query->execute([
            "email" => $email,
            "username" => $username,
            "upassword" => $password_hashed,
            "urole" => $role
        ]);
        return $this->login($email, $password);
    }

    public function selectSales(){
        $query = $this->connection->prepare("SELECT t.od, t.freight_invoice, t.freight_invoice2, t.freight_invoice3, t.sales_order, t.payment_terms, t.clearance_date, t.payment_terms_days, t.incoterm, t.total_volume, t.invoice, t.userComment, t.estimated_fob, t.real_fob, t.tdate, t.payment_status FROM temporary_full_table AS t");
        
        $query->execute([
        
        ]);
        return $query->fetchAll() ;
    }

    public function selectSalesOd($od){
        $query = $this->connection->prepare("SELECT t.od, t.freight_invoice, t.freight_invoice2, t.freight_invoice3, t.sales_order, t.payment_terms, t.clearance_date, t.payment_terms_days, t.incoterm, t.total_volume, t.invoice, t.userComment, t.estimated_fob, t.real_fob, t.tdate, t.payment_status FROM temporary_full_table AS t WHERE od = $od");
        
        $query->execute([
            
        ]);
        return $query->fetchAll() ;
    }

    public function selectAll(){
        $query = $this->connection->prepare("SELECT * FROM temporary_full_table LIMIT 5");
        
        $query->execute([
        
        ]);
        return $query->fetchAll() ;
    }

    

    //if adding a functionality, public function etc..
    
}
?>











