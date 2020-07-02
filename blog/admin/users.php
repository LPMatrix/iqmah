<?php
require_once('../includes/config.php');

if(!$user->is_logged_in()){ header('Location: login.php'); }

//show message from add / edit page
if(isset($_GET['deluser'])){ 

	//if user id is 1 ignore
	if($_GET['deluser'] !='1'){

		$stmt = $db->prepare('DELETE FROM blog_members WHERE memberID = :memberID') ;
		$stmt->execute(array(':memberID' => $_GET['deluser']));

		header('Location: users.php?action=deleted');
		exit;

	}
} 

?>
<?php include 'header.php';
include 'menu.php';  ?>
  <script language="JavaScript" type="text/javascript">
  function deluser(id, title)
  {
	  if (confirm("Are you sure you want to delete '" + title + "'"))
	  {
	  	window.location.href = 'users.php?deluser=' + id;
	  }
  }
  </script>

	<div id="wrapper">

	<?php 
	//show message from add / edit page
	if(isset($_GET['action'])){ 
		echo '<h3>User '.$_GET['action'].'.</h3>'; 
	} 
	?>
	<div class="container">	
	<div class="card">
	<table class="table">
	<tr>
		<th>Username</th>
		<th>Email</th>
		<th>Action</th>
	</tr>
	<?php
		try {

			$stmt = $db->query('SELECT memberID, username, email FROM blog_members ORDER BY username');
			while($row = $stmt->fetch()){
				
				echo '<tr>';
				echo '<td>'.$row['username'].'</td>';
				echo '<td>'.$row['email'].'</td>';
				?>

				<td>
					<a href="edit-user.php?id=<?php echo $row['memberID'];?>" class="btn btn-primary">Edit</a> 
					<?php if($row['memberID'] != 1){?>
				    <a href="javascript:deluser('<?php echo $row['memberID'];?>','<?php echo $row['username'];?>')" class="btn btn-danger">Delete</a>
					<?php } ?>
				</td>
				
				<?php 
				echo '</tr>';

			}

		} catch(PDOException $e) {
		    echo $e->getMessage();
		}
	?>
	</table>
</div>
</div>
<?php include 'footer.php'; ?>
