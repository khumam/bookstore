<!DOCTYPE html>
<html>

<head>

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons|Roboto+Slab" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/material/css/materialize.min.css" media="screen,projection" />

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/slick/slick.css" media="screen,projection" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/slick/slick-theme.css" media="screen,projection" />

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/jarakCSS/css/jarak.css" media="screen,projection" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>
		<?php echo $judul; ?>
	</title>

	<style>
		body {font-family: 'Roboto Slab', sans-serif;}
		.variasi {
			width: 50px;
			height: 3px;
		}
		.bulat {
			width: 7px;
			height: 7px;
			border-radius: 25px;
		}
		.overflow {
			overflow: auto;
		}
	</style>

</head>

<body>
	<div class="navbar-fixed">
		<nav class="indigo accent-3">
			<div class="container">
				<div class="nav-wrapper">
					<a href="#!" class="brand-logo">LL BookStore</a>
					<a href="#" data-target="sidenavll" class="sidenav-trigger"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="sass.html">Beranda</a></li>
						<li><a href="badges.html">Jelajah Buku</a></li>
						<li><a href="collapsible.html">Akun</a></li>
						<li><a href="mobile.html">Login</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>

	<?php if ($this->session->userdata('log') == 'logged') { ?>
	<ul class="sidenav" id="sidenavll">
		<li class="p-1"></li>
		<li class="p-2 center"><img class="circle" src="<?php echo base_url(); ?>assets/img/slide/book1.jpg" height="150px" width="150px"></li>
		<li class="center pb-2"><h5>Hai, <?php echo $this->session->userdata('user'); ?></h5></li>
		<li><a href="<?php echo base_url(); ?>">Beranda</a></li>
		
		<?php if ($this->session->userdata('admin') == 1) { ?>
		<li><a href="<?php echo base_url(); ?>akun/admin">Akun & Admin</a></li>
		<?php 
} ?>
		<?php if ($this->session->userdata('admin') != 1) { ?>
		<li><a href="<?php echo base_url(); ?>akun">Akun</a></li>
		<?php 
} ?>
		
		<li><a href="<?php echo base_url(); ?>cari">Cari Buku</a></li>
		<li><a href="<?php echo base_url(); ?>home/logout">Logout</a></li>
	</ul>
	<?php 
} else { ?>

	<ul class="sidenav" id="sidenavll">
		<li class="p-1"></li>
		<li class="p-2 center"><img class="circle" src="<?php echo base_url(); ?>assets/img/slide/book1.jpg" height="150px" width="150px"></li>
		<li class="center pb-2"><h5>Hai, Pengunjung!</h5></li>
		<li><a href="<?php echo base_url(); ?>">Beranda</a></li>
		<li><a href="<?php echo base_url(); ?>cari">Cari Buku</a></li>
		<li><a href="<?php echo base_url(); ?>home/login">Login</a></li>
		<li><a href="<?php echo base_url(); ?>home/register">Register</a></li>
	</ul>
	<?php 
} ?>
