<?php
session_start();

include '../models/User.php';
include '../dbconfig.php';

class RegistrationController
{
    private $userModel;
    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }
    public function register()
    {
        try{
            $user = $this->userModel->register($_POST['email'], $_POST['username'], $_POST['password'], $_POST['role']);
        }
        catch(Exception $e)
        {
            echo $e->getMessage();
        }
        if ($user) {
            $_SESSION['user'] = $user;
            header("Location: ../views/SalesDashboard.php");
        } else{
            header("Location: ../views/loginform.php");
        }
    }
}


$user= new User($conn);
$regController = new RegistrationController($user);
if(isset($_POST['email']))
{
    $regController->register();
}






?>