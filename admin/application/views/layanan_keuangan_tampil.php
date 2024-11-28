<div class="container">
  <h5>Data Layanan Keuangan</h5>
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
      <?php foreach ($layanan_keuangan as $k => $v) : ?>
      <tr>
        <td><?php echo $k + 1; ?></td>
        <td><?php echo $v['judul_layanan_keuangan']; ?></td>
        <td>
          <img src="<?php echo $this->config->item('url_layanan_keuangan') . $v['gambar_layanan_keuangan'] ?>" width="200">
        </td>
        <td>
          <a href="<?php echo base_url("layanan_keuangan/edit/" . $v["id_layanan_keuangan"]) ?>" class="btn btn-warning">Edit</a>
          <a href="<?php echo base_url("layanan_keuangan/hapus/" . $v["id_layanan_keuangan"]) ?>" class="btn btn-danger">Hapus</a>
        </td>
        <td><?php echo $v['id_admin']; ?></td> <!-- Tampilkan ID admin di sini -->
      </tr>
      <?php endforeach ?>
</tbody>

  </table>

  <a href="<?php echo base_url('layanan_keuangan/tambah') ?>" class="btn btn-primary">Tambah Data</a>

</div>