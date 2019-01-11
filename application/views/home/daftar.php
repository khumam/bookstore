<section class="mt-3">
	<div class="container">
		<div class="bulat right grey accent-4" style="margin-top: 1.5em; margin-right:0.7em"></div>
		<div class="bulat right grey accent-4 mr-1" style="margin-top: 1.5em;"></div>
		<div class="bulat right grey accent-4 mr-1" style="margin-top: 1.5em"></div>
		<h5 class="pl-1 pr-1 pt-1">Register</h5>
		<div class="variasi indigo accent-4 ml-1 mr-1 mb-3"></div>

		<?php if (validation_errors()) : ?>
		<div class="red lighten-1 white-text pt-1 pb-1 pr-2 pl-2 mb-3">
			<?php echo validation_errors(); ?>
		</div>
		<?php endif; ?>

		<?php if ($this->session->flashdata('erordaftar')) : ?>
		<div class="red lighten-1 white-text pt-1 pb-1 pr-2 pl-2 mb-3">
			<?php echo $this->session->flashdata('erordaftar'); ?>
		</div>
		<?php endif; ?>

		<form action="" method="post">
			<div class="row">
				<div class="input-field col s12">
					<input class="validate" type="text" id="name" name="nama" placeholder="Nama lengkap">
					<label for="name">Nama lengkap</label>
				</div>
				<div class="input-field col s12">
					<input class="validate" type="text" id="username" name="username" placeholder="Username">
					<label for="username">Username</label>
					<span class="helper-text" data-error="wrong" data-success="right">Hanya huruf, angka, underscore, dan strip</span>
				</div>
				<div class="input-field col s12">
					<input class="validate" type="email" id="email" name="email" placeholder="Email">
					<label for="email">Email</label>
				</div>
				<div class="input-field col s12">
					<input class="validate" type="password" id="password" name="password" placeholder="Password">
					<label for="password">Password</label>
				</div>
				<div class="input-field col s12">
					<input class="validate" type="password" id="ulangipassword" name="ulangipassword" placeholder="Ulangi password">
					<label for="ulangipassword">Ulangi Password</label>
				</div>
				<div class="input-field col s12">
					<div class="center mt-2">
						<button class="waves-effect waves-light btn indigo accent-4" type="submit" name="daftar">Daftar</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</section>
