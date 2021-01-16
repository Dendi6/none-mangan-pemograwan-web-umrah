<?php

use App\Controllers\Home;
?>
<?= $this->extend('layout/index'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="card">
        <div class="card-content">
            <p class="mt-2">Makanan yang aku suka :</p>
            <table class="striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Makanan</th>
                        <th>Suka pada ..</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if ($favorite != null) : ?>
                        <?php $i = 1; ?>
                        <?php foreach ($favorite as $f) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <th><?= $f['nama_produk']; ?></th>
                                <td><?= $f['created']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <?php if ($favorite == null) : ?>
                        <tr>
                            <td colspan="3">
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