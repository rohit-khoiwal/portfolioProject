<?php
// $host = "localhost";
// $username = "root";
// $password = "";
// $database = "adminsql";

// //connection

// $con = mysqli_connect($host, $username, $password, $database);

// // check connection
// if (!$con) {
//     die("database not connected");
// }

// function dd($data){
//     echo '<pre>';
//     print_r($data);
//     exit;
// }

echo($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin panel</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <style>
    .error{
      color: red;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<div class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 my-3">
                <div class="card my-5">
                    <div class="card-header bg-light">
                        <h5>Registration form</h5>
                    </div>
                    <div class="card-body">
                        <!-- <div id="message">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?php //echo $error; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div> -->
                        <form action="registration.php" id="frm"method="POST">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Name"
                                       value="<?php echo @$_POST['name']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="number" name="phone" class="form-control" placeholder="phone"
                                       value="<?php echo @$_POST['phone']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control" id="username"
                                       placeholder="Username" value="<?php echo @$_POST['username']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" id="password"
                                       placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="">Confirm Password</label>
                                <input type="password" name="confirmpassword" class="form-control"
                                       placeholder="Confirm Password" id='confirmpassword'>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit_btn" id="submit"
                                        class="btn btn-primary btn-block">Register
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js" ></script>
<script>
jQuery('#frm').validate({
	rules:{
		name:"required",
		username:{
			required:true,
			remote:{
				url:"check.php",
				// type:"post",
				// data:
				// {	
				// 	username: function(){
				// 	return $("#username").val();
				// 	}
				// }
			}
		},
		phone:{
			required:true,
		},
		password:{
			required:true,
			minlength:5
		},
		confirmpassword: {
			required: true,
			minlength: 5,
			equalTo: "#password" //for checking both passwords are same or not
		},
	},messages:{
		name:"Please enter your name",
		phone:{
			required:"Please enter email",
			phone:"Please enter valid email",
		},
		password:{
			required:"Please enter your password",
			minlength:"Password must be 5 char long",
		},
		confirmpassword:{
			required:"Please enter your password",
			minlength:"Password must be 5 char long",
			equalTo: " Please enter the same password as above"
		},
		username:{remote:"this username already exists",}
	},
});
</script>

<?php

require_once("includes/footer.php");?>