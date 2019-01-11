<section class="mt-3">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<ul class="tabs">
					<li class="tab col s6"><a class="active" href="#deskripsi">Deskripsi</a></li>
					<li class="tab col s6"><a href="#informasi">Informasi</a></li>
				</ul>
			</div>
		</div>
		<div class="row overflow" style="height: 250px">
			<div id="deskripsi" class="col s12 overflow">
				<p><?php echo $details['deskripsi']; ?></p>
			</div>
			<div id="informasi" class="col s12 p-2 overflow">
				<ul class="collection">
					<li class="collection-item">Judul: <?php echo $details['judulbuku']; ?></li>
					<li class="collection-item">Penulis: <?php echo $details['penulis']; ?></li>
					<li class="collection-item">Penerbit: <?php echo $details['penerbit']; ?></li>
					<li class="collection-item">Tanggal Terbit: <?php echo $details['tglterbit']; ?></li>
					<li class="collection-item">ISBN: <?php echo $details['isbn']; ?></li>
					<li class="collection-item">Keterangan: <?php echo $details['keterangan']; ?></li>
				</ul>
			</div>
		</div>

		<?php 

	$tekskirim = "Pembelian buku berjudul " . $details['judulbuku'] . " dengan penulis " . $details['penulis'] . " dan penerbit " . $details['penerbit'] . " seharga " . $details['harga'] . ". Nama pembeli " . $pembeli['nama'] . ". No HP Pembeli " . $pembeli['nohp'];
	$wa = str_replace(' ', '%20', $tekskirim);
	?>

	<?php if ($this->session->userdata('log') == 'logged') { ?>
		<div class="row valign-wrapper mt-3">
			<div class="col s12 l12 center-align">
				<a href="https://api.whatsapp.com/send?phone=6282325069441&text=<?php echo $wa; ?>" class="waves-effect waves-light btn green accent-4 center-align">Buy <?php echo $details['harga']; ?></a>
			</div>
		</div>
	<?php 
} else { ?>
<div class="row valign-wrapper mt-3">
			<div class="col s12 l12 center-align">
				<a class="waves-effect waves-light btn green accent-4 center-align">Login Untuk Membeli</a>
			</div>
		</div>
<?php 
} ?>

		

	</div>
</section>
