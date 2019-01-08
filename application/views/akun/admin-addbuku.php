<div class="container mt-3 mb-3">

<div class="row mt-3 mb-3">
			<div class="col s12">
				<ul class="tabs">
					<li class="tab s12"><a href="#">Tambah Buku</a></li>
				</ul>
			</div>
			<div class="col s12">
				<form>
					<div class="input-field">
						<input type="text" name="judulbuku" placeholder="Judul Buku">
					</div>
					<div class="input-field">
						<input type="text" name="penulis" placeholder="Penulis">
					</div>
					<div class="input-field">
						<input type="text" name="tglterbit" placeholder="Tanggal Terbit">
					</div>
					<div class="input-field">
						<input type="text" name="Penerbit" placeholder="Penerbit">
					</div>
					<div class="input-field">
						<input type="text" name="isbn" placeholder="ISBN">
					</div>
					<div class="input-field">
						<textarea type="text" name="deskripsi" class="materialize-textarea">deskripsi/sinopsis</textarea>
					</div>
					<div class="input-field">
						<select>
							<option value="" disabled selected>Kategori</option>
							<option value="1">Option 1</option>
							<option value="2">Option 2</option>
							<option value="3">Option 3</option>
						</select>
					</div>
					<div class="file-field input-field">
						<div class="btn">
							<span>Sampul</span>
							<input type="file">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
				</form>
			</div>
			<div class="col s6 offset-s6 mt-1">
				<a class="waves-effect waves-light btn green accent-4"><i class="material-icons">add</i> Tambah Buku</i></a>
			</div>
        </div>
</div>