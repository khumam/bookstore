<section class="mt-3">
	<div class="container">
		<div class="bulat right grey accent-4" style="margin-top: 1.5em; margin-right:0.7em"></div>
		<div class="bulat right grey accent-4 mr-1" style="margin-top: 1.5em;"></div>
		<div class="bulat right grey accent-4 mr-1" style="margin-top: 1.5em"></div>
		<h5 class="pl-1 pr-1 pt-1">Edit Akun</h5>
		<div class="variasi indigo accent-4 ml-1 mr-1 mb-3"></div>

		<?php if (validation_errors()) : ?>
		<div class="red lighten-1 white-text pt-1 pb-1 pr-2 pl-2 mb-3">
			<?php echo validation_errors(); ?>
		</div>
		<?php endif; ?>

		<form action="" method="post">
			<div class="row">
				<div class="input-field col s12">
					<input class="validate" type="text" id="name" name="nama" placeholder="Nama lengkap" value="<?php echo $pengguna['nama']; ?>">
					<label for="name">Nama lengkap</label>
				</div>
				<div class="input-field col s12">
					<input disabled class="validate" type="text" id="username" name="username" placeholder="Username" value="<?php echo $pengguna['username']; ?>">
					<label for="username">Username</label>
				</div>
				<div class="input-field col s12">
					<input class="validate" type="email" id="email" name="email" placeholder="Email" value="<?php echo $pengguna['email']; ?>">
					<label for="email">Email</label>
				</div>
				<div class="input-field col s12">
					<input class="validate" type="text" id="nohp" name="nohp" placeholder="No Hp" value="<?php echo $pengguna['nohp']; ?>">
					<label for="nohp">No Hp</label>
				</div>
				<div class="input-field col s12">
					<textarea class="materialize-textarea" id="alamat" name="alamat" placeholder="Alamat"><?php echo $pengguna['alamat']; ?></textarea>
					<label for="alamat">Alamat</label>
				</div>
				<div class="input-field col s12">
					<div class="center mt-2">
						<button class="waves-effect waves-light btn indigo accent-4" type="submit" name="daftar">Edit</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</section>
