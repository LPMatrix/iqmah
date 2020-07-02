<?php
require_once('../includes/config.php');

if(!$user->is_logged_in()){ header('Location: login.php'); }

//show message from add / edit page
if(isset($_GET['delpost'])){ 

	$stmt = $db->prepare('DELETE FROM blog_posts WHERE postID = :postID') ;
	$stmt->execute(array(':postID' => $_GET['delpost']));

	header('Location: index.php?action=deleted');
	exit;
} 

?>
<?php include 'header.php'; 
include 'menu.php'; ?>

  <script language="JavaScript" type="text/javascript">
  function delpost(id, title)
  {
	  if (confirm("Are you sure you want to delete '" + title + "'"))
	  {
	  	window.location.href = 'index.php?delpost=' + id;
	  }
  }
  </script>

	<?php 
	//show message from add / edit page
	if(isset($_GET['action'])){ 
		echo '<h3>Post '.$_GET['action'].'.</h3>'; 
	} 
	?>

<div class="container-fluid">
<div class="row">
<div class="col-md-9">
	<div class="card">
	<table class="table table-striped">
	<thead class="thead-inverse">
	<tr>
		<th>#</th>
		<th>Title</th>
		<th>Date</th>
		<th>Action</th>
	</tr>
	</thead>
	<?php
		try {

			$stmt = $db->query('SELECT * FROM lecturers ORDER BY id DESC');
			while($row = $stmt->fetch()){ ?>
				
				<tr>
				<td><?= $row['id'] ?></td>
				<td><?= $row['name'] ?></td>
				<td><?= date('jS M Y', strtotime($row['date_created'])) ?></td>
				

				<td>
					<a href="edit-post.php?id=<?php echo $row['id'];?>" class="btn btn-primary">Edit</a>
					<a href="javascript:delpost('<?php echo $row['id'];?>','<?php echo $row['name'];?>')" class="btn btn-danger">Delete</a>
				</td>
				</tr>
				<?php 
				

			}

		} catch(PDOException $e) {
		    echo $e->getMessage();
		}
	?>
	</table>
	</div>
</div>
<?php include 'side.php'; ?>
</div>
</div>

<?php include 'footer.php'; ?>
