<div class="container">

  <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label>Nama Kategori</label>
      <input type="text" name="nama_kategori" class="form-control" value="<?php echo set_value("nama_kategori") ?>">
      <span class="text-danger small">
        <?php echo form_error("nama_kategori") ?>
      </span>
    </div>
    <div class="mb-3">
      <label>foto Kategori</label>
      <input type="file" name="foto_kategori" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>