<div class="container mt-3 mb-3">

<div class="row">
			<div class="col s12">
				<ul class="tabs">
					<li class="tab s12"><a href="#">Deskripsi Aplikasi</a></li>
				</ul>
			</div>
			<div class="col s12">
				Nama Aplikasi: <?php echo $web['namaweb']; ?><br>
				Deskripsi: <?php echo $web['deskripsiweb']; ?><br>
				Pemilik: <?php echo $web['pemilikweb']; ?><br>
			</div>
			<div class="col s6 offset-s6 mt-1">
				<a href="<?php echo base_url(); ?>akun/admin_editapps" class=" right waves-effect waves-light btn green accent-4"><i class="material-icons">edit</i> Edit
					Aplikasi</i></a>
			</div>
		</div>
</div>