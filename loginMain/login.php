<?php

require_once("includes/header.php");?>


<div class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 my-5">
                <div class="card my-5">
                    <div class="card-header bg-light">
                        <h5>Login form</h5>
                    </div>
                    <div class="card-body">
                        <form action="loginMain/admin.php" method="POST" id="login_form">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control" id="username"
                                    placeholder="Username">
                                <div for="error" id="username_error" class="error"></div>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Password">
                                <div for="error" id="password_error" class="error"></div>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="login_btn" id="login_btn"
                                    class="btn btn-primary btn-block">Login</button>
                            </div>
                            <div class="text-center">
                                <p>Not a member? <a href="loginMain/register.php">Register</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// function onSubmitForm(e) {
//     e.preventDefault();
//     var error = 0;
//     $('.error').hide();
//     if (!$('#username').val()) {
//         $('#username_error').show().html("please fill username");
//         error++;
//     }
//     if (!$('#password').val()) {
//         $('#password_error').show().html("please fill password");
//         error++;
//     }

//     if (error == 0) {
//         var username = $('#username').val();
//         var password = $('#password').val();
//         $.ajax({
//             url: "logincheck.php",
//             type: "post",
//             data: {
//                 username: username,
//                 password: password
//             },
//             success: function(data) {
//                 if (data.status == 200) {
//                     window.location = 'admin.php';
//                 } else {
//                     $('#password_error').show().html(data.message);
//                 }
//             }
//         });
//     }
// }
</script>







<?php
require_once("includes/footer.php");

?>