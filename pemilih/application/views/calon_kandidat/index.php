<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<title>Calon Kandidat</title>
	<!-- CSS-->
	<link rel="stylesheet" type="text/css" href="calon_kandidat/css/style.css">
	<link rel="stylesheet" href="calon_kandidat/css/bootstrap.min.css">
	<!-- javascript dan jquery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="calon_kandidat/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="calon_kandidat/js/jquery.js"></script>
</head>
<body>

<?php 
	include('header.php');
 ?>

<div class="container-fluid">
	
	 <?php 
		foreach ($data as $key):
	 ?>

	<div class="profil row">
		<div class="foto col-sm-4" align="center">
			<img src=<?php echo '"calon_kandidat/img/calon'.$key->id.'.jpg"'; ?> class="rounded-circle" width="40%">
		</div>
		<div class="biodata col-sm-8">
			<p>
				Nama : <?php echo " ".$key->nama; ?><br/>
				Partai : <?php echo " ".$key->partai; ?><br/>
				Visi & Misi : <?php echo " “".$key->visimisi."”"; ?><br/>
			</p>
		</div>
	</div>

	<?php 
		endforeach;
	 ?>
</div>
<?php include('footer.php'); ?>
</body>
</html>