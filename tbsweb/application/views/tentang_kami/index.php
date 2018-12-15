<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<title>Tentang Kami</title>
	<!-- CSS-->
	<link rel="stylesheet" type="text/css" href="tentang_kami/css/style.css">
	<link rel="stylesheet" href="tentang_kami/css/bootstrap.min.css">
	<!-- javascript dan jquery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	
	<script src="tentang_kami/js/bootstrap.min.js"></script>
	<script type="text/javascript" class="init">
	$(document).ready(function(){
		var i=1;
		$.getJSON('tentang_kami/json/file.json',function(jd){
			$.each(jd.tentangkami,function(index,value){
				var isi='<img src="tentang_kami/img/profil'+i+'.jpg" class="rounded-circle _margin" width="200">'+
					'<table  class="table table-striped _margin">'+
					'<tr class="odd"><th>Nama</th><th>:</th><td>'+value.nama+'</td></tr>'+
					'<tr class="even"><th>NIM</th><th>:</th><td>'+value.nim+'</td></tr>'+
					'<tr class="odd"><th>MOTO</th><th>:</th><td>'+value.moto+'</td></tr>'+
					'<tr class="even"><th>Visi</th><th>:</th><td>'+value.ket+'</td></tr>'+
					'</table>';
				$('#data'+i).html(isi);
				i++;
			});
		});
	});
	</script>
</head>
<body>
<?php 
	include('header.php');
 ?>

	<div class="container-fluid">
		<div class="container">
		  	<div class="row">
		  		<div class="col-md-3 _align" id="data1">
		  		</div>
		  		<div class="col-md-3 _align" id="data2">
		  		</div>
		  		<div class="col-md-3 _align" id="data3">
		  		</div>
		  		<div class="col-md-3 _align" id="data4">
		  		</div>
		  	</div>
		</div>
	</div>
<?php 
	include('footer.php');
 ?>
</body>
</html>