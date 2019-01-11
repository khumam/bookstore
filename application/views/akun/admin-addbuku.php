<section class="mt-3 mb-3">

	<div class="container">

		<div class="row mt-3 mb-3">
			<div class="col s12">
				<ul class="tabs">
					<li class="tab s12"><a href="#">Tambah Buku</a></li>
				</ul>
			</div>
			<?php echo form_open_multipart('akun/tambahbuku'); ?>
			<div class="input-field col s12">
				<input type="text" id="judulbuku" name="judulbuku" placeholder="Judul Buku" required>
				<label for="judulbuku">Judul Buku</label>
			</div>
			<div class="input-field col s12">
				<input type="text" id="penulis" name="penulis" placeholder="Penulis" required>
				<label for="penulis">Penulis</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="tglterbit" id="tglterbit" placeholder="Tanggal Terbit" required>
				<label for="tglterbit">Tanggal Terbit</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="penerbit" id="penerbit" placeholder="Penerbit" required>
				<label for="penerbit">Penerbit</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="isbn" id="isbn" placeholder="ISBN" required>
				<label for="isbn">ISBN</label>
			</div>
			<div class="input-field col s12">
				<input type="number" name="harga" id="harga" placeholder="Rp" required>
				<label for="harga">Harga</label>
			</div>
			<div class="input-field col s12">
				<textarea type="text" name="deskripsi" id="deskripsi" class="materialize-textarea" required>Deskripsi/sinopsis</textarea>
				<label for="deskripsi">Deskripsi/Sinopsis</label>
			</div>
			<div class="input-field col s12">
				<select name="kategori">
					<option value="" disabled selected>Kategori</option>
					<?php foreach ($kat as $kategori) { ?>
					<option value="<?php echo $kategori->nama; ?>">
						<?php echo $kategori->nama; ?>
					</option>
					<?php 
			} ?>
				</select>
			</div>
			<div class="file-field input-field col s12">
				<div class="btn">
					<span>Sampul</span>
					<input type="file" name="sampulbuku">
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text" name="sampulbuku">
				</div>
			</div>
			<div class="input-field col s12">
				<textarea type="text" name="keterangan" id="keterangan" class="materialize-textarea" required>Keterangan tambahan</textarea>
				<label for="deskripsi">Keterangan tambahan</label>
			</div>
			<div class="col s6 offset-s6 mt-1">
				<button type="submit" name="tambahbuku" value="tambahbuku" class="right waves-effect waves-light btn green accent-4"><i
					 class="material-icons">add</i> Tambah Buku</i></button>
			</div>
			</form>
		</div>
	</div>
</section>
