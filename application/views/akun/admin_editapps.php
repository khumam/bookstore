<section class="mt-3 mb-10">
	<div class="container">

		<div class="bulat right grey accent-4" style="margin-top: 1.5em; margin-right:0.7em"></div>
		<div class="bulat right grey accent-4 mr-1" style="margin-top: 1.5em;"></div>
		<div class="bulat right grey accent-4 mr-1" style="margin-top: 1.5em"></div>
		<h5 class="pl-1 pr-1 pt-1">Edit Apps</h5>
		<div class="variasi indigo accent-4 ml-1 mr-1 mb-1"></div>

		<?php if ($this->session->flashdata('sukses')) : ?>
		<div class="green lighten-1 white-text pt-1 pb-1 pr-2 pl-2 mb-3">
			<?php echo $this->session->flashdata('sukses'); ?>
		</div>
		<?php endif; ?>

		<?php if ($this->session->flashdata('eroredit')) : ?>
		<div class="red lighten-1 white-text pt-1 pb-1 pr-2 pl-2 mb-3">
			<?php $erorupload = $this->session->flashdata('eroredit');
            foreach ($erorupload as $msg) {
                echo $msg;
            }
            ?>
		</div>
		<?php endif; ?>

		<div class="row mt-3">
			<form action="" method="post" enctype="multipart/form-data">
				<div class="input-field col s12">
					<input type="text" class="validate" name="namaweb" id="namaweb" value="<?php echo $web['namaweb'];?>">
					<label for="namaweb">Nama Aplikasi/Web</label>
				</div>
				<div class="input-field col s12">
					<input type="text" class="validate" name="pemilikweb" id="pemilikweb" value="<?php echo $web['pemilikweb'];?>">
					<label for="pemilikweb">Pemilik Aplikasi/Web</label>
				</div>
				<div class="input-field col s12">
					<textarea type="text" class="materialize-textarea" name="deskripsiweb" id="deskripsiweb"><?php echo $web['deskripsiweb'];?></textarea>
					<label for="deskripsiweb">Deskripsi Aplikasi/Web</label>
				</div>
				<div class="file-field input-field col s12">
					<div class="btn">
						<span>Logo Apps</span>
						<input type="file" name="logoapps">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text" name="logoapps" value="<?php echo $web['logoapps'];?>">
					</div>
				</div>
				<div class="input-field col s6 offset-s6">
					<button type="submit" name="editapps" class="right waves-effect waves-light btn green accent-4 white-text">Edit
						Apps</button>
				</div>
			</form>
		</div>
	</div>
	</div>
</section>
