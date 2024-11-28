<div class="container">
  <h5>Data Hama penyakit</h5>
  <table class="table table-bordered" id="tabelku">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Foto</th>
        <th>Opsi</th>
        <th>Admin</th>
      </tr>
    </thead>
   <tbody>
      <?php foreach ($hama_penyakit as $k => $v) : ?>
      <tr>
        <td><?php echo $k + 1; ?></td>
        <td><?php echo $v['judul_hama_penyakit']; ?></td>
        <td>
          <img src="<?php echo $this->config->item('url_hama_penyakit') . $v['gambar_hama_penyakit'] ?>" width="200">
        </td>
        <td>
          <a href="<?php echo base_url("hama_penyakit/edit/" . $v["id_hama_penyakit"]) ?>" class="btn btn-warning">Edit</a>
          <a href="<?php echo base_url("hama_penyakit/hapus/" . $v["id_hama_penyakit"]) ?>" class="btn btn-danger">Hapus</a>
        </td>
        <td><?php echo $v['id_admin']; ?></td> <!-- Tampilkan ID admin di sini -->
      </tr>
      <?php endforeach ?>
</tbody>

  </table>

  <a href="<?php echo base_url('hama_penyakit/tambah') ?>" class="btn btn-primary">Tambah Data</a>

</div>