<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../static/style.css">
    <link rel="stylesheet" type="text/css" href="../static/site.css">
</head>
<body> 
    <header>
        <div class="topbar">
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/challenges">Challenges</a>
            <a href="/login">Login</a>
            <a class="active" href="/register"> Register </a>
        </div>
        <div>
            <img src="../static/banner.png" class="center">
        </div>
    </header>
    <div>
        <?php
        if(isset($_POST['create'])){
            echo 'User submitted.';
        }
        ?>
    </div>


    <div class= "user_card">
    <div class="d-flex justify-content-center form_container ">
        <form action="registration.php" method="POST">
        <div class= "input-group mb-3">
            
                
                    <div class="form_cont">
                        <h1>Registration</h1>
                        <p>Fill out all fields:</p>
                        <hr class="mb-3">
                        <label for="firstname"><b>First Name</b></label>
                        <input type="text" class = "form-control input_user" name="firstname" required>
                        <label for="lastname" class = "form-control input_user"><b>Last Name</b></label>
                        <input type="text" name="lastname" required>
                        <label for="email"><b>Email</b></label>
                        <input type="email" name="email" required>
                        <label for="phonenumber"><b>Phone Number</b></label>
                        <input type="text" name="phonenumber" required>
                        <label for="password"><b>Password</b></label>
                        <input type="password" name="password" required>
                        <hr class="mb-3">
                         <input type="button" value="Sign Up!" class="btn login_btn" id="btnHome" 
                            onClick="document.location.href='/login'" />
                    </div>
                </div>
            
        </div><!-- end input group -->
        </form>
    </div> <!--end  class="d-flex justify-content-center form_container -->
    </div> <!-- user_card -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

        var valid = this.form.checkValidity();

        if(valid){


			var firstname = $('#firstname').val();
			var lastname = $('#lastname').val();
			var email = $('#email').val();
			var phonenumber = $('#phonenumber').val();
			var password = $('#password').val();
			

            e.preventDefault();	

            $.ajax({
                type: 'POST',
                url: 'process.php',
                data: {firstname: firstname,lastname: lastname,email: email,phonenumber: phonenumber,password: password},
                success: function(data){
                    Swal.fire({
                        'title': 'Successful',
                        'text': data,
                        'type': 'success'
                    })
                        
                },
                error: function(data){
                    Swal.fire({
                        'title': 'Errors',
                        'text': 'There were errors while saving the data.',
                        'type': 'error'
                    })
                }
		    });

				
        }else{
            
        }

			



	    });		

		
	});
	
</script>



</body>
</html>
