<section class="mt-3">
	<div class="container">
		<div class="bulat right grey accent-4" style="margin-top: 1.5em; margin-right:0.7em"></div>
		<div class="bulat right grey accent-4 mr-1" style="margin-top: 1.5em;"></div>
		<div class="bulat right grey accent-4 mr-1" style="margin-top: 1.5em"></div>
		<h5 class="pl-1 pr-1 pt-1">Dashboard</h5>
		<div class="variasi indigo accent-4 ml-1 mr-1 mb-1"></div>

		<div class="center mt-3">
			<img class="circle responsive-img" src="<?php echo base_url(); ?>assets/img/icon/user.png" width="150px" height="150px">
			<h5>Hai, <?php echo $pengguna['nama']; ?></h5>
			<h6>(<?php echo $pengguna['username']; ?>)</h6>
		</div>

		<div class="row mt-3 mb-3">
			<div class="col s12">
				<ul class="tabs">
					<li class="tab s12"><a href="#">Deskripsi Akun</a></li>
				</ul>
			</div>
			<div class="col s12">
				Nama Lengkap: <?php echo $pengguna['nama']; ?><br>
				Username: <?php echo $pengguna['username']; ?><br>
				Email: <?php echo $pengguna['email']; ?><br>
				No HP: <?php echo $pengguna['nohp']; ?><br>
				Alamat: <?php echo $pengguna['alamat']; ?><br>
			</div>
			<div class="col s6 offset-s6 mt-1">
				<a href="<?php echo base_url(); ?>akun/editakun" class="waves-effect waves-light btn green accent-4"><i class="material-icons">edit</i> Edit
					Akun</i></a>
			</div>
		</div>
	</div>
</section>
