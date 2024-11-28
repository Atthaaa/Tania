<div class="container">

  <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label>Judul Artikel</label>
      <input type="text" name="judul_layanan_keuangan" id="" value="<?php echo set_value("judul_layanan_keuangan") ?>" class="form-control">
      <span class="text-danger small">
        <?php echo form_error("judul_layanan_keuangan") ?>
      </span>
    </div>
    <div class="mb-3">
      <label>Isi Artikel</label>
      <textarea name="artikel_layanan_keuangan" id="editorku" class="form-control"><?php echo set_value("artikel_layanan_keuangan") ?></textarea>
      <span class="text-danger small">
        <?php echo form_error("artikel_layanan_keuangan") ?>
      </span>
    </div>
    <div class="mb-3">
      <label>Gambar Layanan Keuangan</label>
      <input type="file" name="gambar_hama_penyakit" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>