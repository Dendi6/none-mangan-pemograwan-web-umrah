<div class="container mt-2">
    <?php if ($tanjungpinang != null) : ?>
        <div class="row">
            <?php foreach ($tanjungpinang as $tj) : ?>
                <div class="col s6 m4">
                    <div class="card z-depth-3">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?= base_url(); ?>/images/produk/<?= $tj['sampul']; ?>">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4"><?= $tj['nama_produk']; ?><i class="material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><?= $tj['nama_produk']; ?><i class="material-icons right">close</i></span>
                            <p><?= $tj['deskripsi']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <?php if ($tanjungpinang == null) : ?>
        <div class="container">
            <div class="container">
                <img src="/images/empty.svg" width="100%" alt="empty">
            </div>
        </div>
    <?php endif; ?>
</div>