<?php
require_once ("vendor/autoload.php");
use Askme\Askme\Askme;



if(isset($_POST))
{


<<<<<<< HEAD
    $username = $_POST['username'];
    $password = $_POST['password'];


    if(empty($username) or empty($password))
    {
        echo "<script>alert('Fields are required!')</script>";
    }
    else
    {
        $loginObject = new Askme();
        $loginObject->login($_POST);
    }

=======
    $email = $_POST['email'];
    $password = $_POST['password'];



        if (!empty($email) && !empty($password))
        {
                $loginObject = new Askme();
                $loginObject->login($_POST);


        }
>>>>>>> a08234425a1ce3dca45d2219f90299990a0e0273



}