<?php //include config
require_once('../includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }
?>
<?php include 'header.php'; 
include 'menu.php'; ?>
 <script src="../ckeditor/ckeditor.js"></script>
</head>
<body>

<div id="wrapper">


	<?php

	//if form has been submitted process it
	if(isset($_POST['submit'])){

		$_POST = array_map( 'stripslashes', $_POST );

		//collect form data
		extract($_POST);

		//very basic validation
		if($postID ==''){
			$error[] = 'This post is missing a valid id!.';
		}

		if($postTitle ==''){
			$error[] = 'Please enter the title.';
		}

		if($postCat ==''){
			$error[] = 'Please enter the Category.';
		}

		if($postCont ==''){
			$error[] = 'Please enter the content.';
		}

		if(!isset($error)){

			try {

				//insert into database
				$stmt = $db->prepare('UPDATE blog_posts SET postTitle = :postTitle, postCat = :postCat, lecturer = :lecturer, postCont = :postCont WHERE postID = :postID') ;
				$stmt->execute(array(
					':postTitle' => $postTitle,
					':postCat' => $postCat,
					':lecturer' => $lecturer,
					':postCont' => $postCont,
					':postID' => $postID
				));

				//redirect to index page
				header('Location: index.php?action=updated');
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

			$stmt = $db->prepare('SELECT * FROM blog_posts WHERE postID = :postID') ;
			$stmt->execute(array(':postID' => $_GET['id']));
			$row = $stmt->fetch(); 

		} catch(PDOException $e) {
		    echo $e->getMessage();
		}

	?>
<div class="card-body">
	<form action='' method='post'>
		<input type='hidden' name='postID' class="form-control" value='<?php echo $row['postID'];?>'>

		<p><label>Title</label><br />
		<input type='text' name='postTitle' class="form-control" value='<?php echo $row['postTitle'];?>'></p>

		<div class="form-group">
		    <label for="exampleFormControlSelect1">Category</label>
		    <select class="form-control" id="exampleFormControlSelect1" name="postCat">
		    	<?php $stmt = $db->query('SELECT id, title FROM categories');
					while($cat = $stmt->fetch()){ ?>
		      <option value="<?= $cat['id'] ?>"><?= $cat['title'] ?></option>

		       <?php } ?>
		    </select>
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlSelect1">Lecrurer</label>
		    <select class="form-control" id="exampleFormControlSelect1" name="lecturer">
		    	<?php $stmt = $db->query('SELECT * FROM lecturers');
					while($lec = $stmt->fetch()){ ?>
		      <option value="<?= $lec['id'] ?>"><?= $lec['name'] ?></option>

		       <?php } ?>
		    </select>
		  </div>

		<p><label>Content</label><br />
		<textarea name='postCont' cols='60' class="form-control" rows='10' id="editor"><?php echo $row['postCont'];?></textarea></p>

		<button type='submit' class="btn btn-primary my-3" name='submit'>Update</button>

	</form>
</div>

</div>

    <script>
          CKEDITOR.replace( 'editor' );
    </script>
<?php include 'footer.php'; ?>

