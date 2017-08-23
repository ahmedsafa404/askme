<?php
require_once ("vendor/autoload.php");
use Askme\Askme\Askme;


<<<<<<< HEAD

if($_POST)
{
=======
$message ='';
if($_POST)
{
    //Filter

    $token = $_POST['token'];
>>>>>>> a08234425a1ce3dca45d2219f90299990a0e0273


    $firstname = htmlspecialchars(htmlentities(stripslashes(strip_tags($_POST['firstName']))));
    $lastname  = htmlspecialchars(htmlentities(stripslashes(strip_tags($_POST['lastName']))));
    $username  = htmlspecialchars(htmlentities(stripslashes(strip_tags($_POST['username']))));
    $email     = htmlspecialchars(htmlentities(stripslashes(strip_tags($_POST['email']))));
    $password  = htmlspecialchars(htmlentities(stripslashes(strip_tags($_POST['password']))));



   if($firstname == "" or $lastname == "" or $username == "" or $email == "" or $password == "")
    {
<<<<<<< HEAD
        exit("<script>alert('Fields are required')</script>");
    }
    elseif (!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        echo "<font color='red' size='4'>Invalid email format</font>";
    }
    else
=======
        $message =  "<label>All fields are required</label>";
    }
    elseif (!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        $message =  "<label>Invalid email format</label>";
    }

    if (Askme::Token() === $token)
>>>>>>> a08234425a1ce3dca45d2219f90299990a0e0273
    {
        $registrationObject = new Askme();
        $registrationObject->registration($_POST);
    }
<<<<<<< HEAD
=======
    else
    {
        die();
    }
>>>>>>> a08234425a1ce3dca45d2219f90299990a0e0273



}