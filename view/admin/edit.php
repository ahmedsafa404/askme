<?php
require_once ("../../vendor/autoload.php");
use Askme\Askme\Askme;


if($_POST)
{
<<<<<<< HEAD

=======
    //Filter
>>>>>>> a08234425a1ce3dca45d2219f90299990a0e0273
    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $location  = $_POST['location'];
    $email     = $_POST['email'];
    $phone     = $_POST['phone'];


    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        echo "Invalid Email";
    }
<<<<<<< HEAD
=======
    elseif (strlen($phone) < 10 )
    {
        echo "Invalid Phone Number";
    }




>>>>>>> a08234425a1ce3dca45d2219f90299990a0e0273

    $update = new Askme();
    $update->update($_POST);
}