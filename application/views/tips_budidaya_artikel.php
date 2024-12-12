<div class="container py-5">
    <h1 class="text-center mb-4"><?php echo $tips_budidaya['judul_tips_budidaya']; ?></h1>
    <div class="text-center mb-3">
        <img src="<?php echo base_url('assets/tips_budidaya/' . $tips_budidaya['gambar_tips_budidaya']); ?>" alt="Gambar <?php echo $tips_budidaya['judul_tips_budidaya']; ?>" class="img-fluid" style="max-width: 600px; height: auto;">
    </div>
    <div>
        <p><?php echo nl2br($tips_budidaya['artikel_tips_budidaya']); ?></p>
    </div>
    <div class="container py-5">
    <h1 class="text-center mb-4"><?php echo $tips_budidaya['judul_tips_budidaya']; ?></h1>
    <div class="text-center mb-3">
        <img src="<?php echo base_url('assets/tips_budidaya/' . $tips_budidaya['gambar_tips_budidaya']); ?>" alt="Gambar <?php echo $tips_budidaya['judul_tips_budidaya']; ?>" class="img-fluid" style="max-width: 600px; height: auto;">
    </div>
    <div>
        <p><?php echo nl2br($tips_budidaya['artikel_tips_budidaya']); ?></p>
    </div>

    <!-- Bagian rekomendasi -->
    <hr>
    <h4>Rekomendasi Tips Budidaya Lainnya</h4>
    <ul class="list-unstyled">
        <?php foreach ($rekomendasi as $rekom) : ?>
            <li class="mb-3">
                <h6><a href="<?php echo base_url('tips_budidaya/artikel/' . $rekom['id_tips_budidaya']); ?>"><?php echo $rekom['judul_tips_budidaya']; ?></a></h6>
                <p><?php echo substr($rekom['artikel_tips_budidaya'], 0, 100); ?>...</p>
                <p><small>Similarity: <?php echo $rekom['nilai_similarity']; ?></small></p>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
</div>
