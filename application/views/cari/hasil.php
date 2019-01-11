<section class="mt-3">
	<div class="container">
	<div class="bulat right grey accent-4" style="margin-top: 1.5em; margin-right:0.7em"></div>
		<div class="bulat right grey accent-4 mr-1" style="margin-top: 1.5em;"></div>
		<div class="bulat right grey accent-4 mr-1" style="margin-top: 1.5em"></div>
		<h5 class="pl-1 pr-1 pt-1">Hasil pencarian dari <?php echo $key; ?></h5>
        <div class="variasi indigo accent-4 ml-1 mr-1 mb-1"></div>
        
        <div class="row mt-3 mb-5">
			<?php foreach ($hasil as $ts) { ?>
			<div class="col s6 l3">
				<div class="card" style="height:350px">
					<div class="card-image">
						<img src="<?php echo base_url(); ?>assets/img/sampulbuku/<?php echo $ts->sampul; ?>" height="200px" width="auto">
					</div>
					<div class="card-content">
						<p class="truncate"><b>
								<?php echo $ts->judulbuku; ?></b></p>
								<?php echo $this->session->userdata('admin'); ?>
					</div>
					<div class="card-action">
					<?php if ($this->session->userdata('admin') != 1) { ?>
						<a class="waves-effect waves-light btn green accent-4" href="<?php echo base_url() . 'book/details/' . $ts->idbuku; ?>">Rp<?php echo $ts->harga; ?></a>					
					<?php 
			} ?>

					<?php if ($this->session->userdata('admin') == 1) { ?>
						<a class="waves-effect waves-light btn blue-light accent-4" href="<?php echo base_url() . 'akun/editbuku/' . $ts->idbuku; ?>">Edit</a>
						<a class="waves-effect waves-light btn red accent-4" href="<?php echo base_url() . 'book/konfdelete/' . $ts->idbuku; ?>">Hapus</a>
					<?php 
			} ?>
					
					</div>
				</div>
			</div>
			<?php 
	} ?>
		</div>

	</div>
</section>
