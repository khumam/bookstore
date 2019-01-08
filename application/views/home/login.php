<section class="mt-3 mb-7">
	<div class="container">

		<div class="center mt-3 mb-2">
			<h5 class="mb-2">Login</h5>
			<img class="circle" src="<?php echo base_url(); ?>assets/img/icon/user.png" style="filter:contrast(45%);" height="150px"
			 width="150px">
		</div>

		<?php if (validation_errors()) : ?>
		<div class="red lighten-1 white-text pt-1 pb-1 pr-2 pl-2 mb-3">
			<?php echo validation_errors(); ?>
		</div>
		<?php endif; ?>

		<?php if ($this->session->flashdata('erorlogin')) : ?>
		<div class="red lighten-1 white-text pt-1 pb-1 pr-2 pl-2 mb-3">
			<?php echo $this->session->flashdata('erorlogin'); ?>
		</div>
		<?php endif; ?>

		<?php if ($this->session->flashdata('sukses')) : ?>
		<div class="green lighten-1 white-text pt-1 pb-1 pr-2 pl-2 mb-3">
			<?php echo $this->session->flashdata('sukses'); ?>
		</div>
		<?php endif; ?>


		<form action="" method="post">
			<div class="row">
				<div class="input-field col s12">
					<input class="validate" type="text" id="username" name="username" placeholder="Username">
					<label for="username">Username</label>
				</div>
				<div class="input-field col s12">
					<input class="validate" type="password" id="password" name="password" placeholder="Password">
					<label for="password">Password</label>
				</div>
				<div class="col s12">
					<div class="center mt-2">
						<button class="waves-effect waves-light btn indigo accent-4" type="submit" name="login">Login</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</section>
