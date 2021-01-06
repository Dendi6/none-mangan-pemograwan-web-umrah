<?php

use App\Controllers\Home;
?>
<?= $this->extend('layout/index'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="card">
        <div class="card-content">
            <p>Oleh oleh yang aku suka :</p>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Suka pada ..</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($favorite as $f) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <th><?= $f['nama_produk']; ?></th>
                            <td><?= $f['created']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>