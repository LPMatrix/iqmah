<?php include 'header.php'; ?>
<script type="text/javascript">
   newUrl = decodeURI(location.href).split('/')[3].split(' ')[1]

   switch(newUrl){
      case "1":
         var volume = 0;
         break;
      case "2":
         var volume = 1;
         break;
      case "3":
         var volume = 2;
         break;
      case "4":
         var volume = 3;
         break;
      case "5":
         var volume = 4;
         break;
      case "6":
         var volume = 5;
         break;
      case "7":
         var volume = 6;
         break;
      case "8":
         var volume = 7;
         break;
      case "9":
         var volume = 8;
         break;
      default:
         var volume = 1;
   }
</script>
	<div class="container" id="topics">
		<!-- <div id="items" class="col-sm-3 well" style="margin-top: 30px"></div> -->
	</div>
<?php	include 'footer.php'; ?>
<script type="text/javascript">
         $(document).ready(function(){
         	$.getJSON('sahih_bukhari.json', function(data){
         			for (var i = 0; i < 24; i++) {
                     var id = data[volume].books[i].name.split('.')[0]
                        $('#topics').append(`<div class="col-sm-3" style="margin-top: 30px"><div class="panel panel-default"><div class="panel-body"><a href="single.php?id=${id}&v=${newUrl}">${data[volume].books[i].name}</a></div></div></div>`);
                        //console.log(id)
         			}
         	});
         });
</script>
