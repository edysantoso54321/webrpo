<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<title>Home</title>
	<!-- CSS-->
	<link rel="stylesheet" type="text/css" href="home/css/style.css">
	<link rel="stylesheet" href="home/css/bootstrap.min.css">
	<!-- javascript dan jquery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="home/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="home/js/propper.min.js"></script>

</head>
<body>
<?php 
	include('header.php');
 ?>

	<div class="berita">
		<div id="slidesaya" class="carousel slide" data-ride="carousel" style="padding: 0px; margin: 0px;">
		<ul class="carousel-indicators">
			<li data-target="#slidesaya" data-slide-to="0" class="active"></li>
			<li data-target="#slidesaya" data-slide-to="1"></li>
			<li data-target="#slidesaya" data-slide-to="2"></li>
		</ul>
		  	<div class="carousel-inner">
		    	<div class="carousel-item active">
		      		<img src="home/img/slide-img1.jpg" alt="Slide1"  width="100%" height="500">
		      		<div class="carousel-caption">
						<h3>Ketua KPU Ajak Mahasiswa Sosialisasikan Pilkada dan Pemilu</h3>
						<p>Ketua Komisi Pemilihan Umum (KPU), Arief Budiman mengajak kepada seluruh mahasiswa yang hadir untuk menjadi agen dalam penyebaran informasi pemilu</p>
					</div> 
		    	</div>
			    <div class="carousel-item">
					<img src="home/img/slide-img2.jpg" alt="Slide2" width="100%" height="500">
					<div class="carousel-caption">
						<h3>Buka Bimtek Tungsura III, Arief: Jaga Kemurnian Suara</h3>
						<p>Bimbingan Teknis (Bimtek) Pemungutan, Perhitungan Suara dan Rekapitulasi Hasil Perhitungan Suara serta Sosialisasi Sistem Informasi Penghitungan (Situng) Pemilihan Serentak Gelombang</p>
					</div>
				</div>

				<div class="carousel-item">
					<img src="home/img/slide-img3.jpg" alt="Slide3" width="100%" height="500">
					<div class="carousel-caption">
						<h3>Rapat Pimpinan I KPU, Tingkatkan Kordinasi dan Antisipasi Pilkada dan Pemilu</h3>
						<p>Arief juga menekankan pentingnya pelayanan lembaga KPU dalam upaya meningkatkan kinerja bagi masyarakat. Tagline KPU Melayani menurut dia harus mencerminkan…</p>
					</div>
				</div>
		  	</div>
		  	<a class="carousel-control-prev" href="#slidesaya" data-slide="prev">
		    	<span class="carousel-control-prev-icon"></span>
		  	</a>
		  	<a class="carousel-control-next" href="#slidesaya" data-slide="next">
		    	<span class="carousel-control-next-icon"></span>
		  	</a>
		</div>
	</div>



	<div class="container-fluid">
		<div class="kandidat row">
			<div class="col" align="center">
				<h1>Kandidat</h1>
			</div>
		</div>
		
		<div class="kandidat row">
			<?php 
				foreach ($data as $key):
			 ?>
			<div class="col">
				<div class="col-md-12" style="text-align: center">
					<h1><?php echo $key->id; ?></h1>
					<a href="http://localhost/pemilih/calonkandidat"><img class="rounded-circle" src=<?php echo "'home/img/calon".$key->id.".jpg '"; ?> width="300px" height="300px">
					</a>
					<h3 style="text-align: center; width: 100%"><?php echo $key->nama; ?></h3>
				</div>
				<div class="col-md-12" style="text-align: left; width: 100%">
					<form action="http://localhost/pemilih/main/koment" method="post">
    					<div class="form-group">
      						<label for="comment">Komen:</label>
      						<input type="hidden" name="capres" value=<?php echo "'$key->id'"; ?>>
						    <textarea name='komen' class="form-control" rows="5" id="comment" placeholder="berikan koment untuk calon presiden ini" style=""></textarea>
						</div>
						<button type="submit" class="btn btn-primary ">komen</button>
					</form>
				</div>
			</div>
			<?php 
				endforeach;
			 ?>
		</div>
	</div>



	
	<div class="container-fluid">	

			<div class="row">
				<div class="berita col-sm">
					<div class="berita row">
						<div class="col berita-thumb" align="center">
							<img class="rounded" src="home/img/gaben1.jpg" width="300">
						</div>
						<div class=" col-md berita-content">
							<a href=""><h4>Berita 1</h4></a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							<a href="">Read more...</a>
						</p>
						</div>
					</div>
					<div class="berita row">
						<div class="col-md berita-thumb" align="center">
							<img class="rounded" src="home/img/gaben2.jpg" width="300">
						</div>
						<div class=" col berita-content">
							<a href=""><h4>Berita 2</h4></a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							<a href="">Read more...</a>
							</p>
						</div>
					</div>
					<div class="berita row">
						<div class="col-md berita-thumb" align="center">
							<img class="rounded" src="home/img/gaben3.jpg" width="300">
						</div>
						<div class=" col berita-content">
							<a href=""><h4>Berita 3</h4></a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							<a href="">Read more...</a>
						</p>
						</div>
					</div>
				</div>

				<div class="col d-none d-sm-block" id="kalender">
					<div class="month"> 
						<ul>
							<li class="prev">&#10094;</li>
							<li class="next">&#10095;</li>
							<li>March<br><span style="font-size:18px">2018</span></li>
						</ul>
					</div>

					<ul class="weekdays">
						<li>Mo</li>
						<li>Tu</li>
						<li>We</li>
						<li>Th</li>
						<li>Fr</li>
						<li>Sa</li>
						<li>Su</li>
					</ul>

					<ul class="days"> 
						<li>1</li>
						<li>2</li>
						<li>3</li>
						<li>4</li>
						<li>5</li>
						<li>6</li>
						<li>7</li>
						<li>8</li>
						<li>9</li>
						<li><span class="active">10</span></li>
						<li>11</li>
						<li>12</li>
						<li>13</li>
						<li>14</li>
						<li>15</li>
						<li>16</li>
						<li>17</li>
						<li>18</li>
						<li>19</li>
						<li>20</li>
						<li>21</li>
						<li>22</li>
						<li>23</li>
						<li>24</li>
						<li>25</li>
						<li>26</li>
						<li>27</li>
						<li>28</li>
						<li>29</li>
						<li>30</li>
						<li>31</li>
					</ul>
				</div>

			</div>

	</div>

<?php 
	include('footer.php');

 ?>


</body>
</html>