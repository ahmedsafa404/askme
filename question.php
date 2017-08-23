<?php
require_once ("lib/header.php");
require_once ("vendor/autoload.php");
use Askme\Askme\Askme;

error_reporting(0);

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
                    <input type="hidden" name="questionID" value="<?php echo $ask['id'];?>">
                    <input type="hidden" name="userID" value="<?php echo $_SESSION['user']['id'];?>">


                </form>
                <div class="success" style="color: #00bf00;"></div>
            <?php }?>
                <hr>

        <font color="#d2691e" size="4" style="text-align: left">Answers</font>
            <p style="text-align: right"> <?php echo $question_answer_count['Answer_count'];?> Answers</p>
                <hr>





                <?php

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




        </li>

    </div>
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


<?php require_once('lib/footer.php') ?>












