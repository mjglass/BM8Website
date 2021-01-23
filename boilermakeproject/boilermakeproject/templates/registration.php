<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body> 
    <div>
        <?php
        if(isset($_POST['create'])){
            echo 'User submitted.';
        }
        ?>
    </div>

    <div>
        <form action="registration.php" method="POST">
            <div class ="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h1>Registration</h1>
                        <p>Fill out all fields:</p>
                        <hr class="mb-3">
                        <label for="firstname"><b>First Name</b></label>
                        <input type="text" name="firstname" required>
                        <label for="lastname"><b>Last Name</b></label>
                        <input type="text" name="lastname" required>
                        <label for="email"><b>Email</b></label>
                        <input type="email" name="email" required>
                        <label for="phonenumber"><b>Phone Number</b></label>
                        <input type="text" name="phonenumber" required>
                        <label for="password"><b>Password</b></label>
                        <input type="password" name="password" required>
                        <hr class="mb-3">
                        <input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
                    </div>
                </div>
            </div>
        </form>
    </div>

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
