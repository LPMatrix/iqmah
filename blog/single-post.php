<?php require('includes/config.php'); 

$stmt = $db->prepare('SELECT * FROM blog_posts JOIN blog_members ON lecturer = memberID WHERE postID = :postID');
$stmt->execute(array(':postID' => $_GET['id']));
$row = $stmt->fetch();

$stmt1 = $db->prepare('SELECT * FROM sections WHERE id = :id');
$stmt1->execute(array(':id' => $row['postCat']));
$sect = $stmt1->fetch();

//if post does not exists redirect user.
if($row['postID'] == ''){
	header('Location: ./');
	exit;
}

?>
<?php include 'header.php'; ?>

	<div class="slider" style="background-image: url('images/moscow.jpeg');">

	</div><!-- slider -->

	<section class="post-area">
		<div class="container">

			<div class="row">

				<div class="col-lg-1 col-md-0"></div>
				<div class="col-lg-10 col-md-12">

					<div class="main-post">

						<div class="post-top-area">

							<h5 class="pre-title text-uppercase"><?= $sect['title'] ?></h5>

							<h3 class="title"><a href="#"><b><?php echo $row['postTitle'];?></b></a></h3>

							<div class="post-info">

								<div class="left-area">
									<a class="avatar" href="#"><img src="images/avatar-1-120x120.jpg" alt="Profile Image"></a>
								</div>

								<div class="middle-area">
									<a class="name" href="#"><b><?php echo $row['username'];?></b></a>
									<h6 class="date">on <?= date('jS M Y', strtotime($row['postDate'])) ?></h6>
								</div>

							</div><!-- post-info -->

							<p class="para"><?php echo $row['postCont'];?></p>

						</div><!-- post-top-area -->


						<div class="post-bottom-area">

<!-- 							<ul class="tags">
								<li><a href="#">Ramadhan</a></li>
								<li><a href="#">Sawmu</a></li>
								<li><a href="#">Zakat</a></li>
								<li><a href="#">Fasting</a></li>
							</ul> -->

							<div class="post-icons-area">
								<!-- <ul class="post-icons">
									<li><a href="#"><i class="ion-heart"></i>57</a></li>
									<li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
									<li><a href="#"><i class="ion-eye"></i>138</a></li>
								</ul> -->

								<ul class="icons">
									<li>SHARE : </li>
									<li><a href="#"><i class="ion-social-facebook"></i></a></li>
									<li><a href="#"><i class="ion-social-twitter"></i></a></li>
									<li><a href="#"><i class="ion-social-pinterest"></i></a></li>
								</ul>
							</div>

							<div class="post-footer post-info">

								<div class="left-area">
									<a class="avatar" href="#"><img src="images/avatar-1-120x120.jpg" alt="Profile Image"></a>
								</div>

								<div class="middle-area">
									<a class="name" href="#"><b><?php echo $row['username'];?></b></a>
									<h6 class="date">on <?= date('jS M Y', strtotime($row['postDate'])) ?></h6>
								</div>

							</div><!-- post-info -->

						</div><!-- post-bottom-area -->

					</div><!-- main-post -->
				</div><!-- col-lg-8 col-md-12 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- post-area -->


<!-- 	<section class="recomended-area section">
		<div class="container">
			<div class="row">

				<div class="col-lg-4 col-md-6">
					<div class="card h-100">
						<div class="single-post post-style-1">

							<div class="blog-image"><img src="images/ank.jpg" alt="Blog Image"></div>

							<a class="avatar" href="#"><img src="images/ank.jpg" alt="Profile Image"></a>

							<div class="blog-info">

								<h4 class="title"><a href="#"><b>The smell of Jannah</b></a></h4>

								<ul class="post-footer">
									<li><a href="#"><i class="ion-heart"></i>57</a></li>
									<li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
									<li><a href="#"><i class="ion-eye"></i>138</a></li>
								</ul>

							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="card h-100">
						<div class="single-post post-style-1">

							<div class="blog-image"><img src="images/bilal.jpg" alt="Blog Image"></div>

							<a class="avatar" href="#"><img src="images/bilal.jpg" alt="Profile Image"></a>

							<div class="blog-info">
								<h4 class="title"><a href="#"><b>The smell of Jannah</b></a></h4>

								<ul class="post-footer">
									<li><a href="#"><i class="ion-heart"></i>57</a></li>
									<li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
									<li><a href="#"><i class="ion-eye"></i>138</a></li>
								</ul>
							</div>

						</div>

					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="card h-100">
						<div class="single-post post-style-1">

							<div class="blog-image"><img src="images/omar.jpg" alt="Blog Image"></div>

							<a class="avatar" href="#"><img src="images/omar.jpg" alt="Profile Image"></a>

							<div class="blog-info">
								<h4 class="title"><a href="#"><b>The smell of Jannah</b></a></h4>

								<ul class="post-footer">
									<li><a href="#"><i class="ion-heart"></i>57</a></li>
									<li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
									<li><a href="#"><i class="ion-eye"></i>138</a></li>
								</ul>
							</div>
						</div>

					</div>
				</div>

			</div>

		</div>
	</section> -->

	<!-- <section class="comment-section center-text">
		<div class="container">
			<h4><b>POST COMMENT</b></h4>
			<div class="row">

				<div class="col-lg-2 col-md-0"></div>

				<div class="col-lg-8 col-md-12">
					<div class="comment-form">
						<form method="post">
							<div class="row">

								<div class="col-sm-6">
									<input type="text" aria-required="true" name="contact-form-name" class="form-control"
										placeholder="Enter your name" aria-invalid="true" required >
								</div>
								<div class="col-sm-6">
									<input type="email" aria-required="true" name="contact-form-email" class="form-control"
										placeholder="Enter your email" aria-invalid="true" required>
								</div>

								<div class="col-sm-12">
									<textarea name="contact-form-message" rows="2" class="text-area-messge form-control"
										placeholder="Enter your comment" aria-required="true" aria-invalid="false"></textarea >
								</div>
								<div class="col-sm-12">
									<button class="submit-btn" type="submit" id="form-submit"><b>POST COMMENT</b></button>
								</div>
							</div>
						</form>
					</div>

					<h4><b>COMMENTS(12)</b></h4>

					<div class="commnets-area text-left">

						<div class="comment">

							<div class="post-info">

								<div class="left-area">
									<a class="avatar" href="#"><img src="images/avatar-1-120x120.jpg" alt="Profile Image"></a>
								</div>

								<div class="middle-area">
									<a class="name" href="#"><b>IbIbn Qayyim</b></a>
									<h6 class="date">on Sep 29, 2017 at 9:48 am</h6>
								</div>

								<div class="right-area">
									<h5 class="reply-btn" ><a href="#"><b>REPLY</b></a></h5>
								</div>

							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
								ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur
								Ut enim ad minim veniam</p>

						</div>

						<div class="comment">
							<h5 class="reply-for">Reply for <a href="#"><b>Katy Lui</b></a></h5>

							<div class="post-info">

								<div class="left-area">
									<a class="avatar" href="#"><img src="images/avatar-1-120x120.jpg" alt="Profile Image"></a>
								</div>

								<div class="middle-area">
									<a class="name" href="#"><b>IbIbn Qayyim</b></a>
									<h6 class="date">on Sep 29, 2017 at 9:48 am</h6>
								</div>

								<div class="right-area">
									<h5 class="reply-btn" ><a href="#"><b>REPLY</b></a></h5>
								</div>

							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
								ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur
								Ut enim ad minim veniam</p>

						</div>

					</div>
					<div class="commnets-area text-left">

						<div class="comment">

							<div class="post-info">

								<div class="left-area">
									<a class="avatar" href="#"><img src="images/avatar-1-120x120.jpg" alt="Profile Image"></a>
								</div>

								<div class="middle-area">
									<a class="name" href="#"><b>IbIbn Qayyim</b></a>
									<h6 class="date">on Sep 29, 2017 at 9:48 am</h6>
								</div>

								<div class="right-area">
									<h5 class="reply-btn" ><a href="#"><b>REPLY</b></a></h5>
								</div>

							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
								ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur
								Ut enim ad minim veniam</p>

						</div>

					</div>
					<a class="more-comment-btn" href="#"><b>VIEW MORE COMMENTS</a>

				</div>

			</div>

		</div>
	</section> -->
<?php include 'footer.php'; ?>