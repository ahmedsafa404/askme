<div class="col-md-4">
    <h2><strong>Login</strong></h2>
    <form action="login.php" method="post" id="loginForm">

        <div class="form-group">
            <input type="hidden" name="login_token" value="">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>

        </div>

        <button type="submit" class="btn-success" id="login">Login</button>
        <p>
            <?php
            if(isset($_GET['error']))
            { ?>
                <span style="color: #ff030d">Invalid Username or Password.</span>

            <?php }?>
        </p>


    </form>

</div>
<!--
<script>
    $('document').ready(function(){
        $('#login').click(function(event){
            event.preventDefault();
            var login_info = $('#loginForm').serializeArray();
            $.post(
                $('#loginForm').attr('action'),
                login_info,

                function(data)
                {
                    $('.login_message').html(data);
                    $('.login_message').fadeOut(5000);
                    //$('input').val("");

                }

            );
        });
    });
</script>
-->


