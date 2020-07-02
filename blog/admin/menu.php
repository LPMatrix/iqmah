    <?php 

  if (isset($_POST['add'])) {
      $name = $_POST['name'];
      $date = date('Y-m-d H:i:s');


      $stmt = $db->prepare('INSERT INTO lecturers(name,date_created) VALUES(:name, :created)');
      $stmt->bindParam('name', $name);
      $stmt->bindParam('created', $date);
      $stmt->execute();

  }

  if (isset($_POST['addsection'])) {
      $title = $_POST['title'];
      $date = date('Y-m-d H:i:s');


      $stmt = $db->prepare('INSERT INTO sections(title,date_created) VALUES(:title, :created)');
      $stmt->bindParam('title', $title);
      $stmt->bindParam('created', $date);
      $stmt->execute();

  }

  if (isset($_POST['upload'])) {
    $folder = 'books/';
    $title = trim($_POST['title']);
    $floc = $_FILES['book']['tmp_name'];
    $name=basename($_FILES['book']['name']);
    $type = $_FILES['book']['type'];
    $dir = $folder.$name;
    if ($title == "") {
        $action = 'Book title is required';
    }elseif (empty($name)) {
        $action = 'Please choose a book';
        }elseif($type!="application/pdf"){
                  $action = 'Please upload a PDF';  
                }else{
                    
                    move_uploaded_file($floc, $dir);

        $upload_date = date('Y-m-d');
        $section = $_POST['section'];
        $user_id = $_SESSION['memberID'];

         $stmt = $db->prepare("INSERT INTO books(title, name, `date`, section, user_id) VALUES (:title, :name, :upload_date, :section, :user_id)");
         $stmt->bindParam("title", $title);
         $stmt->bindParam("upload_date", $upload_date);
         $stmt->bindParam("section", $section);
         $stmt->bindParam("name", $name);
         $stmt->bindParam("user_id", $user_id);
         $stmt->execute();

         $message = 'You have successfully uploaded a book';
                }
                
        

    }

      if (isset($_POST['video'])) {
    $folder = 'videos/';
    $title = trim($_POST['title']);
    $floc = $_FILES['book']['tmp_name'];
    $name=basename($_FILES['book']['name']);
    $type = $_FILES['book']['type'];
    $dir = $folder.$name;
    if ($title == "") {
        $action = 'Book title is required';
    }elseif (empty($name)) {
        $action = 'Please choose a book';
        }elseif($type!="application/pdf"){
                  $action = 'Please upload a PDF';  
                }else{
                    
                    move_uploaded_file($floc, $dir);

        $upload_date = date('Y-m-d');
        $section = $_POST['section'];
        $user_id = $_SESSION['memberID'];

         $stmt = $db->prepare("INSERT INTO video(title, name, `date`, section, user_id) VALUES (:title, :name, :upload_date, :section, :user_id)");
         $stmt->bindParam("title", $title);
         $stmt->bindParam("upload_date", $upload_date);
         $stmt->bindParam("section", $section);
         $stmt->bindParam("name", $name);
         $stmt->bindParam("user_id", $user_id);
         $stmt->execute();

         $message = 'You have successfully uploaded a book';
                }
                
        

    }

      if (isset($_POST['audio'])) {
    $folder = 'audios/';
    $title = trim($_POST['title']);
    $floc = $_FILES['book']['tmp_name'];
    $name=basename($_FILES['book']['name']);
    $type = $_FILES['book']['type'];
    $dir = $folder.$name;
    if ($title == "") {
        $action = 'Book title is required';
    }elseif (empty($name)) {
        $action = 'Please choose a book';
        }elseif($type!="application/pdf"){
                  $action = 'Please upload an Audio';  
                }else{
                    
                    move_uploaded_file($floc, $dir);

        $upload_date = date('Y-m-d');
        $section = $_POST['section'];
        $user_id = $_SESSION['memberID'];

         $stmt = $db->prepare("INSERT INTO video(title, name, `date`, section, user_id) VALUES (:title, :name, :upload_date, :section, :user_id)");
         $stmt->bindParam("title", $title);
         $stmt->bindParam("upload_date", $upload_date);
         $stmt->bindParam("section", $section);
         $stmt->bindParam("name", $name);
         $stmt->bindParam("user_id", $user_id);
         $stmt->execute();

         $message = 'You have successfully uploaded a book';
                }
                
        

    }

   ?>

  <header id="main-header" class="py-2 bg-success text-white">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1">
          <a href='index.php'><h1>Dashboard</h1></a>
        </div>
          <ul class="list ml-auto mr-3">
            <li class="">
            <p class="nav-link btn btn-success">
              <i class="fa fa-user"></i> Welcome <?= $_SESSION['username'] ?>
            </p>
          </li>
          <li>
              <a href="profile.php" class="dropdown-item">
                <i class="fa fa-user-circle"></i> Profile
              </a>
          </li>
          <li>
              <a href="logout.php" class="dropdown-item">
                <i class="fa fa-gear"></i> Logout
              </a>
          </li>
          </ul>
      </div>
    </div>
  </header>
  

<section id="action" class="py-4 mb-4 bg-light">
<div class="container">
<div class="mx-auto col-sm-8">
	<div class="col-sm-6 btn-group py-3" role="group">
		<button class="btn btn-primary" type="button"><a href='add-post.php'>Add Post</a></button>
    <button class="btn btn-info" type="button"><a data-toggle="modal" data-target="#addBookModal">Add Book</a></button>
    <button class="btn btn-warning" type="button"><a data-toggle="modal" data-target="#addVideoModal">Add Video</a></button>
    <button class="btn btn-primary" type="button"><a data-toggle="modal" data-target="#addAudioModal">Add Audio</a></button>
		<button class="btn btn-success"><a href='add-user.php'>Add User</a></button>
		<button class="btn btn-warning" type="button"><a href="../" target="_blank">View Blog</a></button>
    <button class="btn btn-info" type="button"><a data-toggle="modal" data-target="#addCategoryModal">Add Lecturer</a></button>
    <button class="btn btn-default" type="button"><a data-toggle="modal" data-target="#addSectionModal">Add Section</a></button>
	</div>
</div>
</div>
</section>

  <!-- CATEGORY MODAL -->
  <div class="modal fade" id="addCategoryModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title">Add Lecturer</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body">
          <form action="" method="POST">
            <div class="form-group">
              <label for="title">Name</label>
              <input type="text" class="form-control" name="name">
            </div>
            
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button class="btn btn-success" name="add" type="submit">Save Changes</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="addSectionModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title">Add Section</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body">
          <form action="" method="POST">
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title">
            </div>
            
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button class="btn btn-success" name="addsection" type="submit">Save</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="addBookModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title">Add Book</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body">
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Section</label>
                <select class="form-control" id="exampleFormControlSelect1" name="section">
                  <?php $stmt = $db->query('SELECT * FROM sections');
                  while($lec = $stmt->fetch()){ ?>
                  <option value="<?= $lec['id'] ?>"><?= $lec['title'] ?></option>

                   <?php } ?>
                </select>
            </div>
            <div class="form-group">
              <label for="title">Book</label>
              <input type="file" class="form-control" name="book">
            </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button class="btn btn-success" name="upload" type="submit">Save</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="addVideoModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title">Add Video</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body">
          <form action="" method="POST">
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="name" type="submit">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Section</label>
                <select class="form-control" id="exampleFormControlSelect1" name="section">
                  <?php $stmt = $db->query('SELECT * FROM sections');
                  while($lec = $stmt->fetch()){ ?>
                  <option value="<?= $lec['id'] ?>"><?= $lec['title'] ?></option>

                   <?php } ?>
                </select>
            </div>
            <div class="form-group">
              <label for="title">Video</label>
              <input type="file" class="form-control" name="book">
            </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button class="btn btn-success" name="video" type="submit">Save</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="addAudioModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title">Add Audio</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body">
          <form action="" method="POST">
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Section</label>
                <select class="form-control" id="exampleFormControlSelect1" name="section">
                  <?php $stmt = $db->query('SELECT * FROM sections');
                  while($lec = $stmt->fetch()){ ?>
                  <option value="<?= $lec['id'] ?>"><?= $lec['title'] ?></option>

                   <?php } ?>
                </select>
            </div>
            <div class="form-group">
              <label for="title">Audio</label>
              <input type="file" class="form-control" name="book">
            </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button class="btn btn-success" name="audio" type="submit">Save</button>
        </div>
        </form>
      </div>
    </div>
  </div>