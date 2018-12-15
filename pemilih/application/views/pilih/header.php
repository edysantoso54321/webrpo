	<nav class="navbar navbar-expand-sm navbarkpu">
		<a class="navbar-brand" href="http://localhost/pemilih/homepage">
			<img src="home/img/logo.png" alt="Logo" style="width: 30px;">
		</a>
		<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span>menu</span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="http://localhost/pemilih/homepage" <?php if($this->session->userdata('hlm')=='home/index') echo "style='color: #ff24ff;'"; ?>>Beranda</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="http://localhost/pemilih/pilih/" <?php if($this->session->userdata('hlm')=='pilih/index') echo "style='color: #ff24ff;'"; ?>>Pilih</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="http://localhost/pemilih/calonkandidat/" <?php if($this->session->userdata('hlm')=='calon_kandidat/index') echo "style='color: #ff24ff;'"; ?>>Calon Kandidat</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="http://localhost/pemilih/tentangkami/" <?php if($this->session->userdata('hlm')=='tentang_kami/index') echo "style='color: #ff24ff;'"; ?>>Tentang Kami</a>
			</li>
		</ul>
		<ul class="navbar-nav ml-auto">
			<li>
				<a class="nav-link" href="http://localhost/pemilih/main/logout"> Keluar</a>
			</li>
			<li>
				<span class="nav-link" style="color: #ff24ff"> <?php echo $this->session->userdata('user'); ?></span>
			</li>
		</ul>
		</div>
  	</nav>