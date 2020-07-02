<?php //include config
require_once('includes/config.php');

	$stmt1 = $db->prepare('SELECT * FROM blog_posts WHERE postCat = :postID');
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
	<link href="common-css/swiper.css" rel="stylesheet">
	<link href="common-css/ionicons.css" rel="stylesheet">
	<link href="index/css/styles.css" rel="stylesheet">
	<link href="index/css/responsive.css" rel="stylesheet">
	<style type="text/css">
		.current{
			border-bottom: 3px solid red;
		}
	</style>

</head>
<body >

	<header>
		<div class="container-fluid position-relative no-side-padding">

			<a href="#" class="logo"><b>MIFTAUN</b></a>

			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

			<ul class="main-menu visible-on-click" id="main-menu">
                <li class="active"><a href="../blog/index.php">Library</a></li>
                <li><a href="../quran.php#!#/quran-wordbyword/1">Quran</a></li>
                <li><a href="../hadith.php">Hadith</a></li>
                <li><a href="../madrasa.php">Madrasah</a></li>
                <li><a href="../misconceptions.php">Misconceptions</a></li>
                <li><a href="../fun.php">Fun</a></li>
                <li><a href="../contact-us.php">Contact</a></li>
			</ul><!-- main-menu -->

		</div><!-- conatiner -->
	</header>

	<section class="blog-area section">
		<div class="container">

			<div class="row">

				<div class="col-lg-12 col-md-12 filter article">
					<div class="card h-100">
						<div class="single-post post-style-2">

							<div class="blog-image"><img src="images/wall.jpeg" alt="Blog Image"></div>

							<div class="blog-info">

								<h6 class="pre-title"><a href="#"><b>SPEAKERS</b></a></h6>

								<ul class="list-group">
									<?php 
										$stmt = $db->prepare('SELECT * FROM lecturers') ;
										$stmt->execute();
										while ($row = $stmt->fetch(PDO::FETCH_ASSOC) ) { ?>
											<li class="list-group-item d-flex justify-content-between align-items-center">
								    			<a href="category.php?id=<?= $row['id']?>"><?= $row['name'] ?></a>
								    			<!-- <span class="badge badge-primary badge-pill">14</span> -->
								  			</li>
									<?php	}
									 ?>
								  
								</ul>

								<!-- <ul class="post-footer">
									<li><a href="#"><i class="ion-heart"></i>57</a></li>
									<li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
									<li><a href="#"><i class="ion-eye"></i>138</a></li>
								</ul> -->

							</div><!-- blog-right -->

						</div><!-- single-post extra-blog -->

					</div><!-- card -->
				</div><!-- col-lg-4 col-md-6 -->


			</div><!-- row -->


		</div><!-- container -->
	</section><!-- section -->

<?php include 'footer.php'; ?>

	<script type="text/javascript">
		
		$(document).ready(function(){
			$('.swiper-slide').click(function(){
				var value = $(this).attr('data-filter')
				if (value == 'all') {
					$('.filter').show('1000')
				}else{

				$('.filter').not('.'+value).hide('1000')
				$('.filter').filter('.'+value).show('1000')

				$('.swiper-slide').click(function(){
					$(this).find('b').addClass('active')
				})
			}
			
			})
		})
	</script>