<div class="col-md-4">
    <h2><strong>Signup</strong></h2>
    <form id="registration_form" action="registration.php" method="post">

        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
        </div>
        <div class="form-group">
            <label for="username">Choose username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit" class="btn-primary" id="signup" data-dismiss="modal">Signup</button>
        <input type="hidden" name="csrf_token" value="">

    </form>
    <?php if(isset($_GET['signup'])){
    ?>
    <div class="signup_message"></div>
    <?php }?>
</div>

<!--
<script>
    $('document').ready(function(){
        $('#signup').click(function(event){
            event.preventDefault();
            var signup_info = $('#registration_form').serializeArray();
            $.post(
                $('#registration_form').attr('action'),
                signup_info,

                function(data)
                {
                    $('.signup_message').html(data);
                    $('.signup_message').fadeOut(20000);
                    $('input').val("");

                }

            );
        });
    });
</script>
-->
