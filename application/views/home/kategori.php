<div class="divider"></div>

<section>
	<div class="container">
	<div class="bulat right grey accent-4" style="margin-top: 1.5em; margin-right:0.7em"></div>
		<div class="bulat right grey accent-4 mr-1" style="margin-top: 1.5em;"></div>
		<div class="bulat right grey accent-4 mr-1" style="margin-top: 1.5em"></div>
		<h5 class="pl-1 pr-1 pt-1">Cattegory</h5>
		<div class="variasi indigo accent-4 ml-1 mr-1 mb-1"></div>
		<div class="row responsive-table center">
		
		<?php foreach ($kategori as $kat) { ?>
			<div class="col s4 mt-2 mb-2"><i class="material-icons"><?php echo $kat->ikon; ?></i><br><?php echo $kat->nama; ?></div>
		<?php 
} ?>
		</div>
	</div>
</section>
