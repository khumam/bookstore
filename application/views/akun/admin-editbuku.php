<section class="mt-3 mb-5">
	<div class="container">
		<div class="bulat right grey accent-4" style="margin-top: 1.5em; margin-right:0.7em"></div>
		<div class="bulat right grey accent-4 mr-1" style="margin-top: 1.5em;"></div>
		<div class="bulat right grey accent-4 mr-1" style="margin-top: 1.5em"></div>
		<h5 class="pt-1 pl-1 pr-1">Edit Buku</h5>
		<div class="variasi indigo accent-4 ml-1 mr-1 mb-1"></div>
		<div class="row">

			<?php echo form_open_multipart('akun/editbook'); ?>
			<div class="input-field col s12">
				<input type="text" id="idbuku" name="idbuku" placeholder="Id Buku" required hidden value="<?php echo $details['idbuku']; ?>">
			</div>
			<div class="input-field col s12">
				<input type="text" id="judulbuku" name="judulbuku" placeholder="Judul Buku" required value="<?php echo $details['judulbuku']; ?>">
				<label for="judulbuku">Judul Buku</label>
			</div>
			<div class="input-field col s12">
				<input type="text" id="penulis" name="penulis" placeholder="Penulis" required value="<?php echo $details['penulis']; ?>">
				<label for="penulis">Penulis</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="tglterbit" id="tglterbit" placeholder="Tanggal Terbit" required value="<?php echo $details['tglterbit']; ?>">
				<label for="tglterbit">Tanggal Terbit</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="penerbit" id="penerbit" placeholder="Penerbit" required value="<?php echo $details['penerbit']; ?>">
				<label for="penerbit">Penerbit</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="isbn" id="isbn" placeholder="ISBN" required value="<?php echo $details['isbn']; ?>">
				<label for="isbn">ISBN</label>
			</div>
			<div class="input-field col s12">
				<input type="number" name="harga" id="harga" placeholder="Rp" required value="<?php echo $details['harga']; ?>">
				<label for="harga">Harga</label>
			</div>
			<div class="input-field col s12">
				<textarea type="text" name="deskripsi" id="deskripsi" class="materialize-textarea" required><?php echo $details['deskripsi']; ?></textarea>
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
					<input class="file-path validate" type="text" name="sampulbuku" value="<?php echo $details['sampul']; ?>">
				</div>
			</div>
			<div class="input-field col s12">
				<textarea type="text" name="keterangan" id="keterangan" class="materialize-textarea" required><?php echo $details['keterangan']; ?></textarea>
				<label for="deskripsi">Keterangan tambahan</label>
			</div>
			<div class="col s6 offset-s6 mt-1 mb-3">
				<button type="submit" name="editbuku" value="editbuku" class="right waves-effect waves-light btn green accent-4"><i
					 class="material-icons">edit</i> Edit Buku</i></button>
			</div>
			</form>
		</div>
	</div>
</section>
