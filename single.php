<?php include 'header.php'; ?>
<script type="text/javascript">
   volume = decodeURI(location.href).split('/')[3].split('=')[2] - 1
   hadith = decodeURI(location.href).split('/')[3].split('=')[1].split('&')[0] - 1
   console.log(volume)
   console.log(hadith)

</script>
	<div class="container" id="topics">
		<!-- <div id="items" class="col-sm-3 well" style="margin-top: 30px"></div> -->
	</div>
<?php	include 'footer.php'; ?>
<script type="text/javascript">
      $(document).ready(function(){
      	$.getJSON('sahih_bukhari.json', function(data){

      			for (var i = 0; i < data[volume].books.length; i++) {
                  var new_data = data[volume].books
      			}
               for (var i = 0; i < new_data.length; i++) {
                  for (var j = 0; j < new_data[i].hadiths.length; j++) {
                     var text = new_data[i].hadiths[j].text
                     var by = new_data[i].hadiths[j].by

                     $('#topics').append('<div class="col-sm-12" style="margin-top: 30px"><div class="panel panel-default"><div class="panel-body"><p>'+text+'</p></div><div class="panel-footer"><p>'+by+'</p></div></div></div>');
                  }
                  
                     
               }
      	});
      });
</script>
