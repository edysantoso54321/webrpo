<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<title>Data Pemilih</title>
	<link rel="stylesheet" type="text/css" href="pilihan/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="pilihan/css/jquery.css">
	<link rel="stylesheet" type="text/css" href="pilihan/css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="pilihan/js/bootstrap.min.js"></script>
	<script type="text/javascript" language="javascript" src="pilihan/js/jquery-1.js"></script>
	<script type="text/javascript" language="javascript" src="pilihan/js/jquery-2.js"></script>
	<script type="text/javascript" class="init" src="pilihan/js/jquery.js"></script>
</head>
<body>
<?php 

	include('header.php');
 ?>

	<div class="container-fluid">
		<div class="fw-body">

			<div class="row">
				<!--data tables-->
				
				<!--form-->
				<div class="col-md-4" style="background-color: #c2c1cb; padding: 20px; border: 1px solid #fff;">
					<form action="http://localhost/pemilih/main/pilihcapres" method="post"> <!-- form untuk input data-->
						<?php 
							if ($ismilih) echo "<h1>terima kasih telah menyumbangkan suara anda</h1>";
							else{
									echo '<div class="form-group">
									<label>capres</label>
									<select class="form-control" name="capres">';
										foreach ($data as $key){
											echo "<option value=".$key->id.">";
											echo $key->id.". ".$key->nama;
											echo "</option>";
										}
									echo "</select>
									</div>";

									echo '<input type="hidden" name="noktp" value="'.$this->session->userdata('user').'">
						 				  <input type="submit" name="submit" value="pilih" class="btn btn-primary btn-block">';
							}
						 ?>
			        </form>	
				</div>
				<div class="col-md-4" style="background-color: #c2c1cb; padding: 20px; border: 1px solid #fff;">
					<div style="text-align: center;"><h3>hasil perhitungan</h3>
					<h3>berdasarkan no urut capres</h3></div><br><br>
					<?php
						foreach ($hasil as $key) {
							$get = (($key->jumlah/$key->total)*100);
						 	echo $key->id." mendapatkan ".$key->jumlah." suara dari ".$key->total.'<div style="width: '.$get.'%; height: 20px; background-color: #dddddd; text-align:right">'.number_format($get,2).'%</div><br>';
						 } 
					 ?>
				</div>



				<div class="col-md-4" style="background-color: #c2c1cb; padding: 20px; border: 1px solid #fff; overflow: auto; height: 486px;">
					<div style="text-align: center;"><h3>Komen</h3></div>
					<?php 
						foreach ($pesan as $data):
							echo "<font style='font-weight:bold'>".$data->pemilih." -> ".$data->capres." :</font><div class='row col-md-12' style='margin-bottom: 15px; background-color: #dddddd; border-radius:5px;'>".$data->pesan."</div>";
						endforeach;
					 ?>
				</div>



			</div><!--batas row-->
		</div>
	</div>

<?php 
	include('footer.php');

 ?>

</body>
</html>