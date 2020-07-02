
<?php include 'header.php'; ?>
	<div class="container" id="topics">
		<!-- <div id="items" class="col-sm-3 well" style="margin-top: 30px"></div> -->
	</div>
    <div class="container">
        <div class="well">
            <p class="lead-text">
                Ṣaḥīḥ al-Bukhārī is a collection of hadīth compiled by Abu Abdullāh Muhammad Ibn Ismā`īl al-Bukhārī(rahimahullāh). His collection is recognized by the overwhelming majority of the Muslim world to be one of the most authentic collections of the Sunnah of the Prophet(pbih). It contains roughly 7563 hadīth (with repetitions) in 98 books. The translation provided here is by Dr. M. Muhsin Khan. 
            </p>
            <p>
                There are a number of books compiled by Imām al-Bukhārī (rahimahullah). His Ṣaḥīḥ is regarded as the highest authority of the collection of hadīth. He named this book "Al-Jāmi` al-Musnad as-Ṣaḥīḥ al-Mukhtasar min Umuri Rasulullahi sallallāhu 'alaihi wa sallam wa Sunanihi wa Ayyāmihi." After he finished, he showed the manuscript to his teachers Imām Ahmad ibn Hanbal (rahimahullah) for approval, along with Ibn al-Madini, and lastly Ibn Ma`īn. It has also been recorded that it took Imām al-Bukhārī a period of 16 years to gather the ahādīth and to write the Ṣaḥīḥ, which sets the date back to 217 A.H. as the year in which he started the compilation; Imām al-Bukhārī (rahimahullah) being merely 23 years of age. 
            </p>
        </div>    

    </div>
<?php	include 'footer.php'; ?>
<script type="text/javascript">
	$(document).ready(function(){
        $.getJSON('sahih_bukhari.json', function(data){
            for (var i = 0; i < data.length; i++) {
                $('#topics').append(`<div class="col-sm-3" style="margin-top: 30px"><div class="panel panel-default"><div class="panel-body"><a href="topic.php?id=${data[i].name}">${data[i].name}</a></div></div></div>`);
                console.log(data[i])
            }
        }); 
    });
</script>