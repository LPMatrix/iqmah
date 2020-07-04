<?php //include config
require_once('includes/config.php');

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>IQMAH</title>
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

			<a href="#" class="logo"><b>IQMAH</b></a>

			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

			<ul class="main-menu visible-on-click" id="main-menu">
                <li class="active"><a href="../blog/index.php">Blog</a></li>
                <li><a href="../quran.php">Quran</a></li>
                <li><a href="../hadith.php">Hadith</a></li>
                <li><a href="../madrasa.php">Madrasah</a></li>
                <li><a href="../misconceptions.php">Misconceptions</a></li>
                <li><a href="../fun.php">Fun</a></li>
                <li><a href="../contact-us.php">Contact</a></li>
			</ul><!-- main-menu -->

		</div><!-- conatiner -->
	</header>

	<div class="main-slider">
		<div class="swiper-container position-static" data-slide-effect="slide" data-autoheight="false"
			data-swiper-speed="500" data-swiper-autoplay="10000" data-swiper-margin="0" data-swiper-slides-per-view="4"
			data-swiper-breakpoints="true" data-swiper-loop="true" >
			<div class="swiper-wrapper">

				<div class="swiper-slide" data-filter = "all">
					<a class="slider-category" href="#">
						<div class="blog-image"><img src="images/all.png" alt="Blog Image"></div>

						<div class="category">
							<div class="display-table center-text">
								<div class="display-table-cell">
									<h3><b class="current">ALL</b></h3>
								</div>
							</div>
						</div>

					</a>
				</div><!-- swiper-slide -->

				<div class="swiper-slide" data-filter = "audio">
					<a class="slider-category" href="#">
						<div class="blog-image"><img src="images/audio.jpg" alt="Blog Image"></div>

						<div class="category">
							<div class="display-table center-text">
								<div class="display-table-cell">
									<h3><b>AUDIO</b></h3>
								</div>
							</div>
						</div>

					</a>
				</div><!-- swiper-slide -->

				<div class="swiper-slide" data-filter = "video">
					<a class="slider-category" href="#">
						<div class="blog-image"><img src="images/call.jpg" alt="Blog Image"></div>

						<div class="category">
							<div class="display-table center-text">
								<div class="display-table-cell">
									<h3><b>VIDEO</b></h3>
								</div>
							</div>
						</div>

					</a>
				</div><!-- swiper-slide -->

				<div class="swiper-slide" data-filter = "book">
					<a class="slider-category" href="#">
						<div class="blog-image"><img src="images/book.jpg" alt="Blog Image"></div>

						<div class="category">
							<div class="display-table center-text">
								<div class="display-table-cell">
									<h3><b>BOOKS</b></h3>
								</div>
							</div>
						</div>

					</a>
				</div><!-- swiper-slide -->

				<div class="swiper-slide" data-filter = "article">
					<a class="slider-category" href="#">
						<div class="blog-image"><img src="images/art.png" alt="Blog Image"></div>

						<div class="category">
							<div class="display-table center-text">
								<div class="display-table-cell">
									<h3><b>ARTICLES</b></h3>
								</div>
							</div>
						</div>

					</a>
				</div><!-- swiper-slide -->


			</div><!-- swiper-wrapper -->

		</div><!-- swiper-container -->
		

	</div><!-- slider -->

	<section class="blog-area section">
		<div class="container">

			<div class="row">

				<div class="col-lg-12 col-md-12 filter article">
					<div class="card h-100">
						<div class="single-post post-style-2">

							<div class="blog-image"><img src="images/wall.jpeg" alt="Blog Image"></div>

							<div class="blog-info">

								<h6 class="pre-title"><a href="#"><b>ARTICLE</b></a></h6>

								<ul class="list-group">
									<?php 
										$stmt = $db->prepare('SELECT * FROM sections') ;
										$stmt->execute();
										while ($row = $stmt->fetch(PDO::FETCH_ASSOC) ) { ?>
											<li class="list-group-item d-flex justify-content-between align-items-center">
								    			<a href="category.php?id=<?= $row['id']?>"><?= $row['title'] ?></a>
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

				<div class="col-lg-12 col-md-12 filter video">
					<div class="card h-100">
						<div class="single-post post-style-2">

							<div class="blog-image"><img src="images/wmosk.jpg" alt="Blog Image"></div>

							<div class="blog-info">

								<h6 class="pre-title"><a href="#"><b>VIDEO</b></a></h6>

								<ul class="list-group">
								  <?php 
										$stmt = $db->prepare('SELECT * FROM sections') ;
										$stmt->execute();
										while ($row = $stmt->fetch(PDO::FETCH_ASSOC) ) { ?>
											<li class="list-group-item d-flex justify-content-between align-items-center">
								    			<a href="speakers.php?id=<?= $row['id']?>"><?= $row['title'] ?></a>
								    			<!-- <span class="badge badge-primary badge-pill">14</span> -->
								  			</li>
									<?php	}
									 ?>
								</ul>
<!-- 								<ul class="post-footer">
									<li><a href="#"><i class="ion-heart"></i>57</a></li>
									<li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
									<li><a href="#"><i class="ion-eye"></i>138</a></li>
								</ul> -->

							</div><!-- blog-right -->

						</div><!-- single-post extra-blog -->

					</div><!-- card -->
				</div><!-- col-lg-4 col-md-6 -->

				<div class="col-lg-12 col-md-12 filter audio">
					<div class="card h-100">
						<div class="single-post post-style-2">

							<div class="blog-image"><img src="images/mas.jpg" alt="Blog Image"></div>

							<div class="blog-info">

								<h6 class="pre-title"><a href="#"><b>AUDIO</b></a></h6>

								<ul class="list-group">
								  <?php 
										$stmt = $db->prepare('SELECT * FROM sections') ;
										$stmt->execute();
										while ($row = $stmt->fetch(PDO::FETCH_ASSOC) ) { ?>
											<li class="list-group-item d-flex justify-content-between align-items-center">
								    			<a href="speakers.php?id=<?= $row['id']?>"><?= $row['title'] ?></a>
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

				<!-- books -->

				<div class="col-lg-12 col-md-12 filter book">
					<div class="card h-100">
						<div class="single-post post-style-2">

							<div class="blog-image"><img src="images/min.jpg" alt="Blog Image"></div>

							<div class="blog-info">

								<h6 class="pre-title py-3"><a href="#"><b>BOOKS</b></a></h6>

								<ul class="list-group mx-2">
									<?php 
										$stmt = $db->prepare('SELECT * FROM sections') ;
										$stmt->execute();
										while ($row = $stmt->fetch(PDO::FETCH_ASSOC) ) { ?>
											<li class="list-group-item d-flex justify-content-between align-items-center">
								    			<a href="books.php?id=<?= $row['id']?>"><?= $row['title'] ?></a>
								    			<!-- <span class="badge badge-primary badge-pill">14</span> -->
								  			</li>
									<?php	}
									 ?>
								  
								</ul>


							</div><!-- blog-right -->

						</div><!-- single-post extra-blog -->

					</div><!-- card -->
				</div><!-- col-lg-8 col-md-12 -->


				<!-- books -->


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