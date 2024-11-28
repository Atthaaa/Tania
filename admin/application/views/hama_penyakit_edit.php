<div class="container">
  <h5>Edit Hama Penyakit</h5>

  <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label>Judul Hama Penyakit</label>
      <input type="text" name="judul_hama_penyakit" id=""
        value="<?php echo set_value("artikel_hama_penyakit", $hama_penyakit['judul_hama_penyakit']) ?>" class="form-control">
      <span class="text-danger small">
        <?php echo form_error("judul_hama_penyakit") ?>
      </span>
    </div>
    <div class="mb-3">
      <label>Isi Hama Penyakit</label>
      <textarea name="artikel_hama_penyakit" id="editorku"
        class="form-control"><?php echo set_value("artikel_hama_penyakit", $hama_penyakit['artikel_hama_penyakit']) ?></textarea>
      <span class="text-danger small">
        <?php echo form_error("artikel_hama_penyakit") ?>
      </span>
    </div>
    <div class="mb-3">
      <label for="">Foto Lama</label><br>
      <img src="<?php echo $this->config->item('url_hama_penyakit') . $hama_penyakit['gambar_hama_penyakit'] ?>" width="300">
    </div>
    <div class="mb-3">
      <label>Gambar Kategori</label>
      <input type="file" name="gambar_hama_penyakit" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>