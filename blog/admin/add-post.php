<?php //include config
require_once('../includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }
?>
<?php include 'header.php'; 
include 'menu.php'; ?>
  <script src="../ckeditor/ckeditor.js"></script>


	<?php

	//if form has been submitted process it
	if(isset($_POST['submit'])){

		$_POST = array_map( 'stripslashes', $_POST );
		$author = $_SESSION['memberID'];

		//collect form data
		extract($_POST);

		//very basic validation
		if($postTitle ==''){
			$error[] = 'Please enter the title.';
		}

		if($postCat ==''){
			$error[] = 'Please enter the description.';
		}

		if($content ==''){
			$error[] = 'Please enter the content.';
		}

		if(!isset($error)){

			try {

				//insert into database
				$stmt = $db->prepare('INSERT INTO blog_posts (postTitle,postCat, lecturer, postCont,postDate) VALUES (:postTitle, :postCat, :lecturer, :content, :postDate)') ;
				$stmt->execute(array(
					':postTitle' => $postTitle,
					':postCat' => $postCat,
					':lecturer' => $author,
					':content' => $content,
					':postDate' => date('Y-m-d H:i:s')
				));

				//redirect to index page
				header('Location: index.php?action=added');
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

		<p><label>Title</label><br />
		<input type='text' name='postTitle' class="form-control" value='<?php if(isset($error)){ echo $_POST['postTitle'];}?>'></p>

		<div class="form-group">
		    <label for="exampleFormControlSelect1">Category</label>
		    <select class="form-control" id="exampleFormControlSelect1" name="postCat">
		    	<?php $stmt = $db->query('SELECT * FROM sections');
					while($row = $stmt->fetch()){ ?>
		      <option value="<?= $row['id'] ?>"><?= $row['title'] ?></option>

		       <?php } ?>
		    </select>
		  </div>
<!-- 		  <div class="form-group">
		    <label for="exampleFormControlSelect1">Lecrurer</label>
		    <select class="form-control" id="exampleFormControlSelect1" name="lecturer">
		    	<?php $stmt = $db->query('SELECT * FROM lecturers');
					while($lec = $stmt->fetch()){ ?>
		      <option value="<?= $lec['id'] ?>"><?= $lec['name'] ?></option>

		       <?php } ?>
		    </select>
		  </div> -->
		<p><label>Content</label><br />
		<textarea name='content' cols='60' class="form-control" rows='10' id="editor"><?php if(isset($error)){ echo $_POST['content'];}?></textarea></p>

		<button class="btn btn-primary my-3" type="submit" name="submit">Submit</button>

	</form>
</div>
</div>
</div>

    <script>
          CKEDITOR.replace( 'editor' );
    </script>

<?php include 'footer.php'; ?>
