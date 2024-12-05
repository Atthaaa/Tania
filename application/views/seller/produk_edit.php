<div class="container">
  <h5>Edit Produk</h5>

  <form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="">Kategori</label>
      <select name="id_kategori" id="" class="form-control">
        <option value="">PILIH</option>
        <?php foreach ($kategori as $key => $value) : ?>
          <option value="<?php echo $value['id_kategori'] ?>" <?php echo $value['id_kategori'] == $produk['id_kategori'] ? 'selected' : '' ?>>
            <?php echo $value['nama_kategori'] ?>
          </option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="mb-3">
      <label for="">Nama</label>
      <input type="text" name="nama_produk" value="<?php echo $produk['nama_produk'] ?>" id="" class="form-control">
    </div>
    <div class="mb-3">
      <label for="">Harga</label>
      <input type="number" name="harga_produk" value="<?php echo $produk['harga_produk'] ?>" id="" class="form-control">
    </div>
    <div class="mb-3">
      <label for="">Berat</label>
      <input type="number" name="berat_produk" value="<?php echo $produk['berat_produk'] ?>" id="" class="form-control">
    </div>
    <span class="text-muted small">Gram</span>
    <div class="mb-3">
      <label for="">Foto Baru</label>
      <input type="file" name="foto_produk" id="" class="form-control">
    </div>
    <div class="mb-3">
      <label for="">Foto Lama</label>
      <img src="<?php echo $this->config->item('url_produk') . $produk['foto_produk'] ?>" width="400" style="display:block;">
    </div>
    <div class="mb-3">
      <label for="">Deskripsi</label>
      <textarea name="deskripsi_produk" id="" class="form-control"><?php echo $produk['deskripsi_produk'] ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>