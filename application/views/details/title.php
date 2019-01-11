<section>
	<div class="container">
		<div class="bulat right grey accent-4" style="margin-top: 1.5em; margin-right:0.7em"></div>
		<div class="bulat right grey accent-4 mr-1" style="margin-top: 1.5em;"></div>
		<div class="bulat right grey accent-4 mr-1" style="margin-top: 1.5em"></div>
		<h5 class="pl-1 pr-1 pt-1">Details Buku</h5>
		<div class="variasi indigo darken-4 ml-1 mr-1 mb-1"></div>

		<div class="valign-wrapper mt-4">
			<div class="container center-align">
				<img class="responsive-img" src="<?php echo base_url(); ?>assets/img/sampulbuku/<?php echo $details['sampul']; ?>">
				<h5 class="mt-2"><?php echo $details['judulbuku']; ?></h5>
				<h6 class="mt-1">- <?php echo $details['penulis']; ?> -</h6>
			</div>
		</div>
	</div>
</section>
