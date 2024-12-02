<div class="container">
    <h5>Data Pengguna</h5>


    <table class="table table-bordered" id="tabelku">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Pengguna</th>
                <th>Nama</th>
                <th>Username</th>
                <th>No HP</th>
                <th>Jenis Kelamin</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pengguna as $key => $value) : ?>
                <tr>
                    <td><?php echo $key + 1; ?></td>
                    <td><?php echo $value['id_pengguna'] ?></td>
                    <td><?php echo $value['Nama'] ?></td>
                    <td><?php echo $value['Username'] ?></td>
                    <td><?php echo $value['No_HP'] ?></td>
                    <td><?php echo $value['Jenis_kelamin'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <?php
        $totalPengguna = count($pengguna); // Menghitung jumlah total pengguna
        $totalLakiLaki = 0;
        $totalPerempuan = 0;

        foreach ($pengguna as $value) {
            if ($value['Jenis_kelamin'] === 'Laki-laki') {
                $totalLakiLaki++;
            } elseif ($value['Jenis_kelamin'] === 'Perempuan') {
                $totalPerempuan++;
            }
        }
        ?>

        <div class="container mt-3">
            <p><strong>Jumlah Total Pengguna:</strong> <?php echo $totalPengguna; ?></p>
            <p><strong>Total Laki-laki:</strong> <?php echo $totalLakiLaki; ?></p>
            <p><strong>Total Perempuan:</strong> <?php echo $totalPerempuan; ?></p>
        </div>
</div>
