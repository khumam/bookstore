<section>
	<div class="container-fluid">
		<div class="slider">
			<ul class="slides">
			<?php foreach ($promo as $dataslide) { ?>
				<li>
					<img src="<?php echo base_url() . 'assets/img/promo/' . $dataslide->image; ?>"> <!-- random image -->
					<div class="caption center-align">
						<h3><?php echo $dataslide->title; ?></h3>
						<h5 class="light grey-text text-lighten-3"><?php echo $dataslide->slogan; ?></h5>
					</div>
				</li>
			<?php 
	} ?>
			</ul>
		</div>
	</div>
</section>

<?php if ($this->session->flashdata('sukseslogin')) : ?>
		<div class="center green lighten-1 white-text pt-1 pb-1 pr-2 pl-2 mb-3 mt-3">
			<?php echo $this->session->flashdata('sukseslogin'); ?>
		</div>
<?php endif; ?>
