<section class="mt-3 mb-3">
	<div class="container">
		<div class="row mt-3">
			<div class="col s12">
				<ul class="tabs" id="tabspromo">
					<li class="tab s12"><a href="#promo">Promo</a></li>
					<li class="tab s12"><a href="#tambahpromo">Tambah Promo</a></li>
				</ul>
			</div>

			<div id="promo" class="col s12 pt-3">
				<ul class="collection">
					<?php foreach ($pro as $promo) { ?>
					<li class="collection-item">
						<?php echo $promo->title; ?> <a href="<?php echo base_url().'akun/hapuspromo/'.$promo->id; ?>" class="red accent-4 right white-text"
						 style="padding:5px; margin: 1px">Hapus</a>
					</li>
					<?php 
} ?>
				</ul>
			</div>

			<div id="tambahpromo" class="pt-3">
				<?php echo form_open_multipart('akun/tambahpromo'); ?>
				<div class="input-field col s12">
					<input type="text" name="namapromo" class="validate" id="namapromo" placeholder="Judul Promo" required>
					<label for="namapromo">Nama promo</label>
				</div>
				<div class="input-field col s12">
					<input type="text" name="slogan" class="validate" id="slogan" placeholder="Slogan promo" required>
					<label for="slogan">Slogan promo</label>
				</div>
				<div class="file-field input-field col s12">
					<div class="btn">
						<span>Background</span>
						<input type="file" name="background">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text" name="background">
					</div>
				</div>
				<button class="btn green accent-4 col right" value="editkategori" name="editpromo" type="submit"><i class="material-icons">add</i>
					Tambah Promo</button>
				</form>
			</div>
		</div>
	</div>
</section>
