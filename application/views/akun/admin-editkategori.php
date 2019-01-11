<section class="mt-3 mb-3">
	<div class="container">
		<div class="row mt-3">
			<div class="col s12">
				<ul class="tabs" id="tabskategori">
					<li class="tab s12"><a href="#kategori">Kategori</a></li>
					<li class="tab s12"><a href="#tambahkategori">Tambah Kategori</a></li>
				</ul>
			</div>

			<div id="kategori" class="col s12 pt-3">
				<ul class="collection">
					<?php foreach ($kat as $kategori) { ?>
					<li class="collection-item">
						<?php echo $kategori->nama; ?> <a href="<?php echo base_url() . 'akun/hapuskategori/' . $kategori->id; ?>" class="red accent-4 right white-text"
						 style="padding:5px; margin: 1px">Hapus</a>
					</li>
					<?php 
			} ?>
				</ul>
			</div>

			<div id="tambahkategori" class="pt-3">
				<?php echo form_open('akun/tambahkat'); ?>
				<div class="input-field col s12">
					<input type="text" name="namakategori" class="validate" id="namakategori" placeholder="Nama Kategori" required>
					<label for="namakategori">Nama Kategori</label>
				</div>
				<div class="input-field col s12">
					<input type="text" name="ikonkategori" class="validate" id="ikonkategori" placeholder="Isi dengan kode ikon"
					 required>
					<label for="ikonkategori">Icon Kategori</label>
				</div>
				<button class="btn green accent-4 col right" value="editkategori" name="editkategori" type="submit"><i class="material-icons">add</i>
					Tambah Kategori</button>
				</form>
			</div>
		</div>
	</div>
</section>
