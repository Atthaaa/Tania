<div class="container">
  <h5>Data Tips budidaya</h5>
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
      <?php foreach ($tips_budidaya as $k => $v) : ?>
      <tr>
        <td><?php echo $k + 1; ?></td>
        <td><?php echo $v['judul_tips_budidaya']; ?></td>
        <td>
          <img src="<?php echo $this->config->item('url_tips_budidaya') . $v['gambar_tips_budidaya'] ?>" width="200">
        </td>
        <td>
          <a href="<?php echo base_url("tips_budidaya/edit/" . $v["id_tips_budidaya"]) ?>" class="btn btn-warning">Edit</a>
          <a href="<?php echo base_url("tips_budidaya/hapus/" . $v["id_tips_budidaya"]) ?>" class="btn btn-danger">Hapus</a>
        </td>
        <td><?php echo $v['id_admin']; ?></td> <!-- Tampilkan ID admin di sini -->
      </tr>
      <?php endforeach ?>
</tbody>

  </table>

  <a href="<?php echo base_url('tips_budidaya/tambah') ?>" class="btn btn-primary">Tambah Data</a>

</div>