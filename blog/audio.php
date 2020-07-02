<?php 
require('includes/config.php');

	$stmt1 = $db->prepare('SELECT * FROM audio WHERE id = :postID');
	$stmt1->execute(array(':postID' => $_GET['id']));

	$id = @$_GET['id'];
	$stmt = $db->prepare('SELECT * FROM sections WHERE id = :id');
	$stmt->bindParam('id',$id);
	$stmt->execute();
	$list = $stmt->fetch();

	if($list['id'] == ''){
	header('Location: ./');
	exit;
}
 ?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>miftaun</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">


	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">


	<!-- Stylesheets -->

	<link href="common-css/bootstrap.css" rel="stylesheet">

	<link href="common-css/ionicons.css" rel="stylesheet">


	<link href="category/css/styles.css" rel="stylesheet">

	<link href="category/css/responsive.css" rel="stylesheet">
	<style type="text/css">
		.slider{
			background-image: url('images/moscow.jpeg');
		}
	</style>

</head>
<body >

	<header>
		<div class="container-fluid position-relative no-side-padding">

			<a href="#" class="logo">MIFTAUN</a>

			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

			<ul class="main-menu visible-on-click" id="main-menu">
				<li class="active"><a href="index.php">Home</a></li>
                <li><a href="../blog/index.php">Library</a></li>
                <li><a href="../quran.php#!#/quran-wordbyword/1">Quran</a></li>
                <li><a href="../hadith.php">Hadith</a></li>
                <li><a href="../sermon.php">Sermon</a></li>
                <li><a href="../madrasa.php">Madrasah</a></li>
                <li><a href="../misconceptions.php">Misconceptions</a></li>
                <li><a href="../fun.php">Fun</a></li>
                <li><a href="../contact-us.php">Contact</a></li>
			</ul><!-- main-menu -->

			<div class="src-area">
				<form>
					<button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
					<input class="src-input" type="text" placeholder="Type of search">
				</form>
			</div>

		</div><!-- conatiner -->
	</header>

	<div class="slider display-table center-text">
		<h1 class="title display-table-cell"><b><?= $list['title']; ?></b></h1>
	</div><!-- slider -->

	<section class="blog-area section">
		<div class="container">

			<div class="row">

				<?php 
					while ($row = $stmt1->fetch(PDO::FETCH_ASSOC)) { ?>
						<div class="col-lg-4 col-md-6">
					<div class="card h-100">
						<div class="single-post post-style-1">

							<div class="blog-image"><img src="images/mosk.jpg" alt="Blog Image"></div>

							<a class="avatar" href="#"><img src="images/omar.jpg" alt="Profile Image"></a>

							<div class="blog-info">

								<h4 class="title"><a href="single-post.php?id=<?= $row['postID'] ?>"><b><?= $row['postTitle'] ?></b></a></h4>

								<!-- <ul class="post-footer">
									<li><a href="#"><i class="ion-heart"></i>57</a></li>
									<li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
									<li><a href="#"><i class="ion-eye"></i>138</a></li>
								</ul> -->

							</div><!-- blog-info -->
						</div><!-- single-post -->
					</div><!-- card -->
				</div><!-- col-lg-4 col-md-6 -->
				<?php	}
				 ?>


			</div><!-- row -->

			<a class="load-more-btn" href="#"><b>LOAD MORE</b></a>

		</div><!-- container -->
	</section><!-- section -->


	<?php include 'footer.php'; ?>