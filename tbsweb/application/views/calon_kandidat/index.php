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
			<div>
				<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target=<?php echo "'#".$key->id."'"; ?>>Edit</button>
			</div>
			</p>
		</div>
		<!-- Modal -->
			  <div class="modal fade" id=<?php echo "'".$key->id."'"; ?> role="dialog">
			    <div class="modal-dialog">
			    
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <h4 class="modal-title">Modal Header</h4>
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			        </div>
			        <div class="modal-body">
			          <form method="post" action="http://localhost/tbsweb/login/update_kandidat">
			          	<input type="hidden" name="id" value=<?php echo "'".$key->id."'"; ?>>
			          	<div class="form-group">
			          		<label for="nama">Nama</label>
			          		<input type="text" name="nama" value=<?php echo "'".$key->nama."'"; ?> class='form-control'>
			          	</div>
			          	<div class="form-group">
			          		<label for="partai">Partai</label>
			          		<input type="text" name="partai" value=<?php echo "'".$key->partai."'"; ?> class='form-control'>
			          	</div>
			          	<div class="form-group">
			          		<label for="visimisi">Visi dan Misi</label>
			          		<textarea name="visimisi" class='form-control'><?php echo $key->visimisi; ?></textarea>
			          	</div>
			        </div>
			        <div class="modal-footer">
			          <button type="submit" class="btn btn-default btn-primary">Simpan</button>
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        </div>
			         </form>
			      </div>
			      
			    </div>
			   </div>
	</div>
	<?php 
		endforeach;
	 ?>
</div>

<?php include('footer.php'); ?>
</body>
</html>