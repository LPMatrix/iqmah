<?php 
      $stmt = $db->prepare('SELECT COUNT(*) FROM lecturers');
      $stmt->execute();
      $cats = $stmt->fetchColumn();

      $stmt = $db->prepare('SELECT COUNT(*) FROM blog_posts');
      $stmt->execute();
      $posts = $stmt->fetchColumn();

      $stmt = $db->prepare('SELECT COUNT(*) FROM blog_members');
      $stmt->execute();
      $members = $stmt->fetchColumn();
 ?>

<div class="col-md-3">
  <div class="card text-center bg-primary text-white mb-3">
    <div class="card-body">
      <h3>Posts</h3>
      <h1 class="display-4">
        <i class="fa fa-pencil"></i> <?= $posts ?>
      </h1>
      <a href="index.php" class="btn btn-outline-light btn-sm">View</a>
    </div>
  </div>

  <div class="card text-center bg-success text-white mb-3">
    <div class="card-body">
      <h3>Lecturers</h3>
      <h1 class="display-4">
        <i class="fa fa-folder-open-o"></i> <?= $cats ?>
      </h1>
      <a href="lecturers.php" class="btn btn-outline-light btn-sm">View</a>
    </div>
  </div>

  <div class="card text-center bg-warning text-white mb-3">
    <div class="card-body">
      <h3>Users</h3>
      <h1 class="display-4">
        <i class="fa fa-users"></i> <?= $members ?>
      </h1>
      <a href="users.php" class="btn btn-outline-light btn-sm">View</a>
    </div>
  </div>
</div>