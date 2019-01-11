<section class="mt-3">
	<div class="container mt-2">
		<div class="bulat right grey accent-4" style="margin-top: 1.5em; margin-right:0.7em"></div>
		<div class="bulat right grey accent-4 mr-1" style="margin-top: 1.5em;"></div>
		<div class="bulat right grey accent-4 mr-1" style="margin-top: 1.5em"></div>
		<h5 class="pt-1 pl-1 pr-1">Terpopuler</h5>
		<div class="variasi indigo accent-4 ml-1 mr-1 mb-1"></div>
		<div class="multiple-items">

			<?php foreach ($topseller as $ts) { ?>
				<div class="card ml-1 mr-1" style="height:400px">
					<div class="card-image">
						<img src="<?php echo base_url(); ?>assets/img/sampulbuku/<?php echo $ts->sampul; ?>" height="250px" width="auto">
					</div>
					<div class="card-content">
						<p class="truncate"><b>
								<?php echo $ts->judulbuku; ?></b></p>
					</div>
					<div class="card-action">
					<a class="waves-effect waves-light btn green accent-4" href="<?php echo base_url() . 'book/details/' . $ts->idbuku; ?>">Rp<?php echo $ts->harga; ?></a>
					</div>
				</div>
			<?php 
	} ?>

</div>

			<div class="row valign-wrapper mt-3 mb-2">
				<div class="col s12 l12 center-align">
					<a href="<?php echo base_url(); ?>cari/hasil/topseller" class="waves-effect waves-light btn indigo accent-4 center-align">More Books</a>
				</div>
			</div>

	</div>

</section>
