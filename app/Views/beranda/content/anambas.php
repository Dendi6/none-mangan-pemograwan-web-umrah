<div class="container mt-2">
    <?php if ($anambas != null) : ?>
        <div class="row">
            <?php foreach ($anambas as $tj) : ?>
                <div class="col s12 m4">
                    <div class="card z-depth-3">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?= base_url(); ?>/images/produk/<?= $tj['sampul']; ?>">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4"><?= $tj['nama_produk']; ?><i class="material-icons right">more_vert</i></span>
                            <div class="center mt-2">
                                <?php if (logged_in()) :  ?>
                                    <a href="<?= base_url('pesan/jumlah/' . $tj['id'] . '/' . user()->id); ?>" class="waves-effect waves-light btn">Pesan</a>
                                <?php else : ?>
                                    <a href="/login" class="waves-effect waves-light btn">Pesan</a>
                                <?php endif; ?>
                                <!-- untuk button favorite -->
                                <?php if (logged_in()) :  ?>
                                    <a href="<?= base_url('favorite/save/' . $tj['id'] . '/' . user()->id); ?>" class="waves-effect waves-light btn"><i class="material-icons">favorite_border</i><?= $tj['jumlah_suka']; ?></a>
                                <?php else : ?>
                                    <a href="<?= base_url('/login'); ?>" class="waves-effect waves-light btn"><i class="material-icons">favorite_border</i><?= $tj['jumlah_suka']; ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><?= $tj['nama_produk']; ?><i class="material-icons right">close</i></span>
                            <p><?= $tj['deskripsi']; ?></p>
                            <p>Harga : </p>
                            <p>Rp <b><?= $tj['harga']; ?></b></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <?php if ($anambas == null) : ?>
        <div class="container mt-2">
            <div class="container">
                <img src="/images/empty.svg" width="100%" alt="empty">
            </div>
        </div>
    <?php endif; ?>
</div>