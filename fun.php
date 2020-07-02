<?php include 'header.php'; ?>
<section id="portfolio">
<div class="container-fluid">
<div class="center">
<h2>Fun</h2>
<p class="lead">Word Cloud of the surahs of the Qur'an</p>
</div>
<div class="row">
	
	<?php 
		$all_images = [];
		for ($i=0; $i < 114; $i++) { 
			array_push($all_images, $i);
		}
		$random_images = array_rand($all_images, 8);
		foreach ($random_images as $key => $value) { ?>
		  <div class="col-sm-6">
		  	<div class="panel panel-info">
		  		<div class="panel-heading text-center"><h2 class="panel-title">Which surah does this picture remind you of?</h2></div>
		  		<div class="panel-body">
					<img src="cloud/<?= $value ?>.png" class="img img-responsive">
				</div>
				<div class="panel-footer">
					<div class="checkbox">
					  <label>
					    <input type="checkbox" value="">
					    Surat Fathia
					  </label>
					</div>
					<div class="checkbox">
					  <label>
					    <input type="checkbox" value="">
					    Surat Fathia
					  </label>
					</div>
					<div class="checkbox">
					  <label>
					    <input type="checkbox" value="">
					    Surat Fathia
					  </label>
					</div>
					<div class="checkbox">
					  <label>
					    <input type="checkbox" value="">
					    Surat Fathia
					  </label>
					</div>
				</div>
			</div>
		  </div>
		<?php }
	 ?>

</div>
</div>
</section>
<?php include 'footer.php'; ?>

<script type="text/javascript">
	$(document).ready(function(){
        $.getJSON('quran.json', function(data){
            console.log(data)
        }); 
    });
</script>