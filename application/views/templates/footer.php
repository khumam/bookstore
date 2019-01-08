<section>
	<div class="container-fluid indigo accent-3 p-1 center-align white-text">
		Copyright @2019 LL BookStore
	</div>
</section>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/material/js/materialize.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/slick/slick.min.js"></script>
<script>
	$(document).ready(function () {
		$('.sidenav').sidenav();
	});

	$(document).ready(function () {
		$('.slider').slider({
			fullWidth: true,
			duration: 500,
			indicators: true
		});
	});

	$(document).ready(function () {
		$('.tabs').tabs({
			swipeable: true
		});
	});

	$(document).ready(function () {
		$('.scrollspy').scrollSpy();
	});

	$(document).ready(function () {
		$('select').formSelect();
	});

</script>
</body>

</html>
