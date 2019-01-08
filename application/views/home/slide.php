<section>
	<div class="container-fluid">
		<div class="slider">
			<ul class="slides">
				<li>
					<img src="<?php echo base_url(); ?>assets/img/slide/1.jpg"> <!-- random image -->
					<div class="caption center-align">
						<h3>This is our big Tagline!</h3>
						<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
					</div>
				</li>
				<li>
					<img src="<?php echo base_url(); ?>assets/img/slide/2.jpg"> <!-- random image -->
					<div class="caption left-align">
						<h3>Left Aligned Caption</h3>
						<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
					</div>
				</li>
				<li>
					<img src="<?php echo base_url(); ?>assets/img/slide/3.jpg"> <!-- random image -->
					<div class="caption right-align">
						<h3>Right Aligned Caption</h3>
						<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
					</div>
				</li>
			</ul>
		</div>
	</div>
</section>

<?php if ($this->session->flashdata('sukseslogin')) : ?>
		<div class="center green lighten-1 white-text pt-1 pb-1 pr-2 pl-2 mb-3 mt-3">
			<?php echo $this->session->flashdata('sukseslogin'); ?>
		</div>
<?php endif; ?>
