<?= $this->extend('layout/index'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="card">
        <div class="card-content">
            <table class="striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Key Tansaksi</th>
                        <th>Nama Produk</th>
                        <th>jumlah Pesanan</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if ($transaksi != null) : ?>
                        <?php $i = 1; ?>
                        <?php foreach ($transaksi as $tr) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <th><?= $tr['key']; ?></th>
                                <th><?= $tr['nama_produk']; ?></th>
                                <td><?= $tr['jumlah_pesanan']; ?></td>
                                <td>
                                    <span class="badge <?= ($tr['status'] == 'dikirim') ? 'green' : 'orange' ?> new" data-badge-caption="<?= $tr['status']; ?>"></span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <?php if ($transaksi == null) : ?>
                        <tr>
                            <td colspan=" 5">
                                <div class="container">
                                    <div class="container">
                                        <img src="/images/empty.svg" width="100%" alt="empty">
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>