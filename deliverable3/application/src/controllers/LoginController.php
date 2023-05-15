<?php
session_start();
require '../models/User.php';
require '../dbconfig.php';
class LoginController
{
    private $userModel;
    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }
    public function login()
    {
        try
        {
            echo 1;
            $user=$this->userModel->login($_POST['email'], $_POST['password']);
        }
        catch(Exception $e)
        {
            echo 2;
            echo $e->getMessage();
        }
        if (isset($_SESSION["user"])) {
            echo 3;
            header("location: ../views/Dashboard.php");
        } else {
            echo 4;
            echo "Wrong username or password";
        }
    }

}


$user= new User($conn);
$loginController = new LoginController($user);
if(isset($_POST['email']))
{
    $loginController->login();
}
else
{
    if(isset($_GET['logout']))
    {
        session_destroy();
        header('Location: ../views/loginform.php');
    }
}









?>