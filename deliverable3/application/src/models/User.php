<?php
 class User {
    private $connection;
    public function __construct($conn)
    {
        $this->connection=$conn;
    }
    public function login($email, $password) {
        $query = $this->connection->prepare("SELECT * FROM user WHERE email = :email");
        $query->execute([
            "email" => $email,
        ]);
        $user = $query->fetch();
        if ($user && password_verify($password, $user["password"])) {
            //pass arguments to session in user variable
            $_SESSION["user"]=$user;
        }
        else {
            return false;
        }
    }
    public function register($email, $username,$password) {
        $query = $this->connection->prepare("INSERT INTO User (email,username, password) VALUES (:email,:username, :password)");
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);
        $query->execute([
            "email" => $email,
            "username" => $username,
            "password" => $password_hashed
        ]);
        return $this->login($email, $password);
    }

    public function selectSales(){
        $query = $this->connection->prepare("SELECT * FROM sales_transaction LIMIT 5");
        
        $query->execute([
        
        ]);
        return $query->fetchAll() ;
    }

    public function selectAll(){
        $query = $this->connection->prepare("SELECT * FROM shipment NATURAL JOIN is_loaded NATURAL JOIN delivery NATURAL JOIN fulfills NATURAL JOIN sales_transaction NATURAL JOIN contains   LIMIT 5");
        
        $query->execute([
        
        ]);
        return $query->fetchAll() ;
    }

    //if adding a functionality, public function etc..
    
}
?>











