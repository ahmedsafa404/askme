<?php
require_once ("lib/header.php");
require_once ("vendor/autoload.php");
use Askme\Askme\Askme;

<<<<<<< HEAD
error_reporting(0);
=======

>>>>>>> a08234425a1ce3dca45d2219f90299990a0e0273

if(isset($_GET['id']))
{


    $id = (int)htmlspecialchars(htmlentities(stripslashes(strip_tags($_GET['id']))));

    $question = new Askme();
    $ask = $question->Question($id);


}

    $userID = $_SESSION['user']['id'];

    $answer = new Askme();
    $getAnswer = $answer->getAnswer($id);

    $question_answer_count = new Askme();
    $question_answer_count = $question_answer_count->question_answer_count($id);

    $most_view_question = new Askme();
    $most_view_question->most_viewed_Question($id);

    $question = new Askme();
    $question_count = $question->Question_count();

    $answer = new Askme();
    $answer_count = $answer->Answer_count();

    $user = new Askme();
    $user_count =$user->User_count();

    $most_viewed_question = new Askme();
    $most_viewed_question = $most_viewed_question->get_most_viewed_Question();




?>




<div class="container">
    <div class="col-md-8">

        <li class="list-group-item">
            <a href="index.php">Back to Home</a>
            <div class="panel panel-primary">

                <div class="panel-heading">
                    <font color="#f0f8ff" size="4"><strong><?php echo $ask['question'];?></strong></font></div>
                <div class="panel-body">
                    <p>
                        <strong>Posted at : <?php echo $ask['created_at'];?></strong>
                    </p>
                    <p><?php echo $ask['description'];?></p>
                </div>
            </div>

            <?php

<<<<<<< HEAD
            if(isset($_SESSION['user']) && $_SESSION['user']['confirmed'] == 1)
            { ?>

                <form method="post" id="answer" action="view/admin/answer.php">
                    <div class="form-group">
                        <span class="glyphicon glyphicon-comment"></span> <label for="answer"><font size="4" color="#ff512a">Reply</font></label>

                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" cols="50" id="answer" name="answer"></textarea>
                    </div>

                    <button type="submit" id="submit" class="form-control btn-success" style="float: right;width: 20%">Post Your Answer</button>
=======
            if(isset($_SESSION['user']))
            { ?>

                <form method="post" action="view/admin/answer.php">
                    <div class="form-group">
                        <span class="glyphicon glyphicon-comment"></span> <label for="answer"><font size="4" color="#a52a2a">Answer this question</font></label>
                        <textarea class="form-control" id="answer" name="answer"></textarea>
                    </div>

                    <button type="submit" class="form-control btn-info">Post Your Answer</button>
>>>>>>> a08234425a1ce3dca45d2219f90299990a0e0273
                    <input type="hidden" name="questionID" value="<?php echo $ask['id'];?>">
                    <input type="hidden" name="userID" value="<?php echo $_SESSION['user']['id'];?>">


                </form>
<<<<<<< HEAD
                <div class="success" style="color: #00bf00;"></div>
=======
>>>>>>> a08234425a1ce3dca45d2219f90299990a0e0273
            <?php }?>
                <hr>

        <font color="#d2691e" size="4" style="text-align: left">Answers</font>
            <p style="text-align: right"> <?php echo $question_answer_count['Answer_count'];?> Answers</p>
                <hr>





                <?php
<<<<<<< HEAD

                    foreach ($getAnswer as $answer => $value) {


                        ?>
                        <div class="panel panel-primary">
                            <div class="panel-body" id="reply">


                                <h5><strong><img src=/askme/view/admin/<?php echo $value['profile_pic']; ?> height="50"
                                                 id="picture" class="img-circle" width="50">
                                        <?php echo $value['firstname'] . " " . $value['lastname']; ?></strong></h5>

                                <p><?php echo $value['answer']; ?></p>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

=======
                    foreach ($getAnswer as $answer => $value)
                    {


                ?>
                <div class="panel panel-primary">
                    <div class="panel-body">





                        <h5><strong><img src=/askme/view/admin/<?php echo $value['profile_pic'];?> height="50" class="img-circle" width="50">
                                <?php  echo $value['firstname']." ".$value['lastname'];?></strong></h5>

                        <p><?php echo $value['answer'];?></p>
                    </div>
                </div>
                <?php }?>
>>>>>>> a08234425a1ce3dca45d2219f90299990a0e0273



        </li>

    </div>
<<<<<<< HEAD
    <?php require_once ("lib/sidebar.php");?>
    </div>

</div>

</div>

<script>
    $(document).ready(function(){

    });

    $('#submit').click(function(event){
        event.preventDefault();
        var reply = $('#answer').serializeArray();
        $.post(
            $('#answer').attr('action'),
            reply,

            function(data)
            {
                $('.success').html(data);
                $('.success').fadeOut(5000);
                $('textarea').val("");

            }

        );
    });


</script>
=======

        <div class="col-md-4">
            <h2><font color="#d2691e">Most Viewed Question</font></h2>
            <div class="">
                <ul class="list-group">

                    <?php
                    foreach ($most_viewed_question as $most => $view) { ?>
                        <li class="list-group-item">
                            <div class="">
                                <a href="question.php?id=<?php echo htmlspecialchars(htmlentities(stripslashes(strip_tags($view['id']))));?>"><?php echo $view['question'];?></a>

                            </div>
                        </li>

                    <?php }?>


                </ul>
            </div>


            <h2><font color="green">Website Status</font></h2>
            <hr>
            <div class="count">
                <font color="black" size="2"><strong>Total Question :</strong></font><?php echo $question_count['Question'];?>
                <br>
                <font color="black" size="2"><strong>Total Answer :</strong></font><?php echo $answer_count['Answer'];?>
                <br>
                <font color="black" size="2"><strong>Total User :</strong></font><?php echo $user_count['User'];?>

            </div>
        </div>



    </div>

</div>

</div>
>>>>>>> a08234425a1ce3dca45d2219f90299990a0e0273


<?php require_once('lib/footer.php') ?>












