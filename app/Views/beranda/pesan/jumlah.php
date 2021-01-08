<?= $this->extend('layout/index'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="card">
        <div class="card-content">
            <p>Berikut adalah detail yang anda pesan :</p>
            <table class="striped mt-2">
                <tr>
                    <td>Nama Oleh Oleh</td>
                    <th><?= $produk['nama_produk']; ?></th>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>Rp. <b><?= $produk['harga']; ?></b></td>
                </tr>
            </table>
            <div class="mt-2">
                <form action="<?= base_url('pesan/saveTransaksi/' . $produk['id']); ?>" method="POST">
                    <?= csrf_field(); ?>

                    <!-- hidden input  -->
                    <input type="hidden" name="id_user" value="<?= user()->id; ?>">
                    <input type="hidden" name="id_produk" value="<?= $produk['id']; ?>">
                    <input type="hidden" name="harga" value="<?= $produk['harga']; ?>">
                    <!-- end hidden input  -->

                    <div class="input-field col s12">
                        <i class="material-icons prefix">textsms</i>
                        <input type="text" name="jumlah_pesanan" id="autocomplete-input" class="autocomplete">
                        <label for="autocomplete-input">jumlah_pesanan</label>
                    </div>

                    <div class="center">
                        <button type="submit" class="waves-effect waves-light btn">Pesan</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>