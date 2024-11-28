<div class="container">
  <h5>Tambah Produk</h5>

  <form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="">Kategori</label>
      <select name="id_kategori" id="" class="form-control">
        <option value="">PILIH</option>
        <?php foreach ($kategori as $key => $value) : ?>
        <option value="<?php echo $value['id_kategori'] ?>">
          <?php echo $value['nama_kategori'] ?>
        </option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="mb-3">
      <label for="">Nama</label>
      <input type="text" name="nama_produk" id="" class="form-control">
    </div>
    <div class="mb-3">
      <label for="">Harga</label>
      <input type="number" name="harga_produk" id="" class="form-control">
    </div>
    <div class="mb-3">
      <label for="">Berat</label>
      <input type="number" name="berat_produk" id="" class="form-control">
    </div>
    <div class="mb-3">
      <label for="">Foto</label>
      <input type="file" name="foto_produk" id="" class="form-control">
    </div>
    <div class="mb-3">
      <label for="">Deskripsi</label>
      <textarea name="deskripsi_produk" id="" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>