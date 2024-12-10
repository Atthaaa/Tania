<div class="container py-5">
    <h1 class="text-center mb-4"><?php echo $tips_budidaya['judul_tips_budidaya']; ?></h1>
    <div class="text-center mb-3">
        <img src="<?php echo base_url('assets/tips_budidaya/' . $tips_budidaya['gambar_tips_budidaya']); ?>" alt="Gambar <?php echo $tips_budidaya['judul_tips_budidaya']; ?>" class="img-fluid" style="max-width: 600px; height: auto;">
    </div>
    <div>
        <p><?php echo nl2br($tips_budidaya['artikel_tips_budidaya']); ?></p>
    </div>
</div>
