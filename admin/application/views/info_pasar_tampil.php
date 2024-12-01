<div class="container">
  <h5>Data Info Pasar</h5>
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
      <?php foreach ($info_pasar as $k => $v) : ?>
      <tr>
        <td><?php echo $k + 1; ?></td>
        <td><?php echo $v['judul_info_pasar']; ?></td>
        <td>
          <img src="<?php echo $this->config->item('url_info_pasar') . $v['gambar_info_pasar'] ?>" width="200">
        </td>
        <td>
          <a href="<?php echo base_url("info_pasar/edit/" . $v["id_info_pasar"]) ?>" class="btn btn-warning">Edit</a>
          <a href="<?php echo base_url("info_pasar/hapus/" . $v["id_info_pasar"]) ?>" class="btn btn-danger">Hapus</a>
        </td>
        <td><?php echo $v['id_admin']; ?></td> <!-- Tampilkan ID admin di sini -->
      </tr>
      <?php endforeach ?>
</tbody>

  </table>

  <a href="<?php echo base_url('info_pasar/tambah') ?>" class="btn btn-primary">Tambah Data</a>

</div>