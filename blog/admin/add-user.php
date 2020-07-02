<?php //include config
require_once('../includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }
?>
<?php include 'header.php';
include 'menu.php';  ?>

	<?php

	//if form has been submitted process it
	if(isset($_POST['submit'])){

		//collect form data
		extract($_POST);

		//very basic validation
		if($username ==''){
			$error[] = 'Please enter the username.';
		}

		if($password ==''){
			$error[] = 'Please enter the password.';
		}

		if($passwordConfirm ==''){
			$error[] = 'Please confirm the password.';
		}

		if($password != $passwordConfirm){
			$error[] = 'Passwords do not match.';
		}

		if($email ==''){
			$error[] = 'Please enter the email address.';
		}

		if(!isset($error)){

			$hashedpassword = $user->hash_password($password);

			try {

				//insert into database
				$stmt = $db->prepare('INSERT INTO blog_members (username,password,email) VALUES (:username, :password, :email)') ;
				$stmt->execute(array(
					':username' => $username,
					':password' => $hashedpassword,
					':email' => $email
				));

				//redirect to index page
				header('Location: users.php?action=added');
				exit;

			} catch(PDOException $e) {
			    echo $e->getMessage();
			}

		}

	}

	//check for any errors
	if(isset($error)){
		foreach($error as $error){
			echo '<p class="error">'.$error.'</p>';
		}
	}
	?>
<div class="container">
<div class="card-body">
	<form action='' method='post'>

		<p><label>Username</label><br />
		<input type='text' name='username' class="form-control" value='<?php if(isset($error)){ echo $_POST['username'];}?>'></p>

		<p><label>Password</label><br />
		<input type='password' name='password' class="form-control" value='<?php if(isset($error)){ echo $_POST['password'];}?>'></p>

		<p><label>Confirm Password</label><br />
		<input type='password' name='passwordConfirm'class="form-control"  value='<?php if(isset($error)){ echo $_POST['passwordConfirm'];}?>'></p>

		<p><label>Email</label><br />
		<input type='text' name='email' class="form-control" value='<?php if(isset($error)){ echo $_POST['email'];}?>'></p>
		
		<button type='submit' name='submit' class="btn btn-primary">Add User</button>

	</form>
</div>
</div>
</div>

<?php include 'footer.php'; ?>
