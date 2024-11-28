<body>
    <div class="container mt-3">
        <h3>Chat Konsultasi Admin</h3>
        <div class="alert alert-info">
            Status: <?php echo $chatAktif ? 'Sedang Aktif' : 'Tidak Aktif'; ?>
        </div>
        <div class="card">
            <div class="card-body">
                <textarea class="form-control mb-3" rows="5" placeholder="Tulis pesan..."></textarea>
                <button class="btn btn-primary">Kirim</button>
            </div>
        </div>
    </div>
</body>
</html>