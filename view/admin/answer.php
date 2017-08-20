<?php

require_once ("../../vendor/autoload.php");

use Askme\Askme\Askme;


if ($_POST['answer'])
{
    $answer     = $_POST['answer'];
    $questionID = $_POST['questionID'];
    $userID     = $_POST['userID'];

    if(empty($answer))
    {
        echo "Write an answer";
    }

    $postAnswer = new Askme();
    $postAnswer->Answer($_POST);

}

