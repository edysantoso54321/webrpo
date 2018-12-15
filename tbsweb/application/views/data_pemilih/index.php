<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<title>Data Pemilih</title>
	<link rel="stylesheet" type="text/css" href="data_pemilih/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="data_pemilih/css/jquery.css">
	<link rel="stylesheet" type="text/css" href="data_pemilih/css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="data_pemilih/js/bootstrap.min.js"></script>
	<script type="text/javascript" language="javascript" src="data_pemilih/js/jquery-1.js"></script>
	<script type="text/javascript" language="javascript" src="data_pemilih/js/jquery-2.js"></script>
	<script type="text/javascript" class="init" src="data_pemilih/js/jquery.js"></script>
</head>
<body>
<?php 

	include('header.php');
 ?>

	<div class="container-fluid">
		<div class="fw-body">

			<div class="row">
				<!--data tables-->
				<div class="col-md-8" style="background-color: #c2c1cb">
					<br>
					<div class="content">
						<div id="example_wrapper" class="dataTables_wrapper">
							<table id="data" class="display dataTable table-striped" style="width:100%" role="grid" aria-describedby="example_info">
								<thead>
									<tr role="row">
										<th class="sorting_asc" tabindex="0" aria-controls="data" rowspan="1" colspan="1" style="width: 136px;" aria-label="Column 1: activate to sort column descending" aria-sort="ascending">No KTP</th>
										<th class="sorting" tabindex="0" aria-controls="data" rowspan="1" colspan="1" style="width: 136px;" aria-label="Column 2: activate to sort column ascending">Nama</th>
										<th class="sorting" tabindex="0" aria-controls="data" rowspan="1" colspan="1" style="width: 136px;" aria-label="Column 3: activate to sort column ascending">Tgl Lahir</th>
										<th class="sorting" tabindex="0" aria-controls="data" rowspan="1" colspan="1" style="width: 136px;" aria-label="Column 4: activate to sort column ascending">Jns Kelamin</th>
										<th class="sorting" tabindex="0" aria-controls="data" rowspan="1" colspan="1" style="width: 136px;" aria-label="Column 5: activate to sort column ascending">Status</th>
										<th class="sorting_asc" tabindex="0" aria-controls="data" rowspan="1" colspan="1" style="width: 136px;" aria-label="Column 1: activate to sort column descending" aria-sort="ascending">Alamat</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										foreach ($data as $key):
									 ?>
									 <tr noktp=<?php echo "'$key->noktp'"; ?>>
									 	<td ><?php echo $key->noktp; ?></td>
									 	<td><?php echo $key->nama; ?></td>
									 	<td><?php echo $key->tgl; ?></td>
									 	<td><?php echo $key->jk; ?></td>
									 	<td><?php echo $key->status; ?></td>
									 	<td><?php echo $key->alamat; ?></td>
									 </tr>
									 <?php 
									 	endforeach;
									  ?>
								</tbody>
							</table>
						</div>		
					</div>
				</div>
				<!--form-->
				<div class="col-md-4" style="background-color: #c2c1cb; padding: 20px; border: 1px solid #fff;">
					<form id="form_data" method="post"> <!-- form untuk input data-->
			            <br>
			            <center>
			            	<div style="width: 100%; height: 50px;">
			            		<strong><h3 id="menu">Menu</h3><h3 id="add">Tambah Data</h3><h3 id="edit">Edit Data</h3></strong>
			            	</div>
			            	<div style="width: 100%; height: 230px;">
			            		<div id="tombolutama">
			            			<button type="button" class="btn btn-default" id="_tambah" style="width: 100%">TAMBAH DATA</button><br><br>
									<button type="button" class="btn btn-default" id="_hapus" style="width: 100%">HAPUS DATA</button><br><br>
									<button type="button" class="btn btn-default" id="_edit" style="width: 100%">EDIT DATA</button>
			            		</div>
			            		<div id="form">
			            			<table border="0">
			                			<tr>
			                  				<td>No Ktp</td>
			                  				<td>: <input type="text" name="noktp" placeholder="No Ktp"></td>
			                			</tr>
						                <tr>
											<td>Nama</td>
											<td>: <input type="text" name="nama" placeholder="Nama"></td>
						                </tr>
										<tr>
											<td>Tgl</td>
											<td>: <input type="date" name="tgl"></td>
										</tr>
										<tr>
											<td>JK</td>
											<td>: <input type="radio" name="jk" value="Laki-laki" id="jk1" checked>Laki-laki
											<input type="radio" name="jk" value="Perempuan" id="jk2">Perempuan
										</td>
										</tr>
										<tr>
											<td>Status</td>
											<td>: <input type="text" name="status" placeholder="Status"></td>
										</tr>
										<tr>
											<td>Alamat</td>
											<td>: <input type="text" name="alamat" placeholder="Alamat"></td>
										</tr>
										<tr>
											<td></td>
										</tr>
										<tr>
											<td></td>
										</tr>
										<tr>
											<td></td>
										</tr>
										<tr>
											<td></td>
										</tr>
										<tr>
											<td colspan="2">
												<button type="button" class="btn btn-primary" id="submit" style="width: 45%">simpan</button>
												<button type="button" class="btn btn-default batal" style="width: 45%; float: right;">batal</button>
											</td>
										</tr>
			              			</table>
			            		</div>
			            	</div>
			              	<br>
			              	<div id="pesan" style="width: 300px; height: 70px;">
			              		<div id="gagal">
			                		maaf ada kesalahan <img src="data_pemilih/img/gagal.png" width="20px" height="20px">
			              		</div>
			              		<div id="sukses">
			                		berhasil <img src="data_pemilih/img/sukses.png" width="20px" height="20px">
			              		</div>
			              	</div>
			            </center>
			            <br>
		        	</form>
				</div>
			</div><!--batas row-->
		</div>
	</div>

<?php 
	include('footer.php');

 ?>

</body>
</html>