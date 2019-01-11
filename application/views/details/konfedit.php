<section class="pt-3 pb-3" style="height:100vh;">
    <div class="container">
        <h6>Apakah anda yakin ingin menghapusnya?<h6>
            <p>Dengan menghapus buku ini maka seluruh data terkait buku ini akan dihapus.</p>
        <ul class="collection">
            <li class="collection-item">Judul : <?php echo $details['judulbuku']; ?></li>
            <li class="collection-item">Penulis : <?php echo $details['penulis']; ?></li>
            <li class="collection-item">Penerbit : <?php echo $details['penerbit']; ?></li>
        </ul>
        <br>
        <br>
        <a href="<?php echo base_url() . 'book/delete/' . $details['idbuku']; ?>" class="btn red accent-4">Ya, Hapus</a>
</div>
</section>