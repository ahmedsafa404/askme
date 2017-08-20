<?php

require_once ("../../vendor/autoload.php");
use Askme\Askme\Askme;

if($_POST)
{
    //Filter

    $title       = htmlspecialchars(htmlentities(stripslashes(strip_tags($_POST['title']))));
    $description = htmlspecialchars(htmlentities(stripslashes(strip_tags($_POST['description']))));

    $userId      = htmlspecialchars(htmlentities(stripslashes(strip_tags($_POST['userid']))));

    $update = new Askme();
    $update->add_question($_POST);



}


