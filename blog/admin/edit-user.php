<?php //include config
require_once('../includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }
?>
<?php include 'header.php';
include 'menu.php'; ?>


	<?php

	//if form has been submitted process it
	if(isset($_POST['submit'])){

		//collect form data
		extract($_POST);

		//very basic validation
		if($username ==''){
			$error[] = 'Please enter the username.';
		}

		if( strlen($password) > 0){

			if($password ==''){
				$error[] = 'Please enter the password.';
			}

			if($passwordConfirm ==''){
				$error[] = 'Please confirm the password.';
			}

			if($password != $passwordConfirm){
				$error[] = 'Passwords do not match.';
			}

		}
		

		if($email ==''){
			$error[] = 'Please enter the email address.';
		}

		if(!isset($error)){

			try {

				if(isset($password)){

					$hashedpassword = $user->password_hash($password, PASSWORD_BCRYPT);

					//update into database
					$stmt = $db->prepare('UPDATE blog_members SET username = :username, password = :password, email = :email WHERE memberID = :memberID') ;
					$stmt->execute(array(
						':username' => $username,
						':password' => $hashedpassword,
						':email' => $email,
						':memberID' => $memberID
					));


				} else {

					//update database
					$stmt = $db->prepare('UPDATE blog_members SET username = :username, email = :email WHERE memberID = :memberID') ;
					$stmt->execute(array(
						':username' => $username,
						':email' => $email,
						':memberID' => $memberID
					));

				}
				

				//redirect to index page
				header('Location: users.php?action=updated');
				exit;

			} catch(PDOException $e) {
			    echo $e->getMessage();
			}

		}

	}

	?>


	<?php
	//check for any errors
	if(isset($error)){
		foreach($error as $error){
			echo $error.'<br />';
		}
	}

		try {

			$stmt = $db->prepare('SELECT memberID, username, email FROM blog_members WHERE memberID = :memberID') ;
			$stmt->execute(array(':memberID' => $_GET['id']));
			$row = $stmt->fetch(); 

		} catch(PDOException $e) {
		    echo $e->getMessage();
		}

	?>
<div class="container">
<div class="card-body">
	<form action='' method='post'>
		<input type='hidden' name='memberID' value='<?php echo $row['memberID'];?>'>
		<div class="form-group">
			<p><label>Username</label><br />
			<input type='text' name='username' value='<?php echo $row['username'];?>' class="form-control"></p>
	    </div>
	    <div class="form-group">
			<p><label>Password (only to change)</label><br />
			<input type='password' name='password' value='' class="form-control"></p>
		</div>
		<div class="form-group">
			<p><label>Confirm Password</label><br />
			<input type='password' name='passwordConfirm' value='' class="form-control"></p>
		</div>
		<div class="form-group">
			<p><label>Email</label><br />
			<input type='text' name='email' value='<?php echo $row['email'];?>' class="form-control"></p>
		</div>
		<button type='submit' name='submit' class="btn btn-primary">Update User</button>

	</form>
</div>
</div>
<?php include 'footer.php'; ?>
