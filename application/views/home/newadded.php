<div class="divider"></div>
<section class="pb-3 mb-3">
	<div class="container" style="margin-top: 2em;">
	<div class="bulat right grey accent-4" style="margin-top: 1.5em; margin-right:0.7em"></div>
		<div class="bulat right grey accent-4 mr-1" style="margin-top: 1.5em;"></div>
		<div class="bulat right grey accent-4 mr-1" style="margin-top: 1.5em"></div>
        <h5 class="pl-1 pt-1 pr-1">Terbaru</h5>
        <div class="variasi indigo accent-4 ml-1 mr-1 mb-1"></div>
		<div class="multiple-items-dua">

		<?php foreach ($added as $ad) { ?>
				<div class="card ml-1 mr-1" style="height:400px">
					<div class="card-image">
						<img src="<?php echo base_url(); ?>assets/img/sampulbuku/<?php echo $ad->sampul; ?>" height="250px" width="auto">
					</div>
					<div class="card-content">
						<p class="truncate"><b><?php echo $ad->judulbuku; ?></b></p>
					</div>
					<div class="card-action">
						<a class="waves-effect waves-light btn green accent-4" href="<?php echo base_url() . 'book/details/' . $ad->idbuku; ?>">Rp<?php echo $ad->harga; ?></a>
					</div>
				</div>
		<?php 
} ?>
</div>

		<div class="row valign-wrapper mt-3">
			<div class="col s12 l12 center-align">
				<a href="<?php echo base_url(); ?>cari/hasil/new" class="waves-effect waves-light btn indigo accent-4 center-align">More Books</a>
			</div>
		</div>
	</div>
</section>
