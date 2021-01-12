<?= $this->extend('layout/index'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="card">
        <div class="card-content">
            <p>Lakukan pembayaran agar pesanan dapat di proses.</p>
            <table class="striped mt-2">
                <tr>
                    <td>Harga Produk</td>
                    <td>Rp. <b><?= $transaksi['harga_total']; ?></b></td>
                </tr>
                <tr>
                    <td>Harga Ongkir</td>
                    <td>Rp. <b><?= $transaksi['ongkir']; ?></b></td>
                </tr>
                <tr>
                    <td colspan="2" class="center">Total Harga yang harus di bayar adalah Rp <b><?= $transaksi['ongkir'] + $transaksi['harga_total']; ?></b></td>
                </tr>
                <tr>
                    <td>Tranfer ke</td>
                    <td>Dendi ( BRI ) 0174-01-011473-53-0</td>
                </tr>
                <tr>
                    <td colspan="2">note* Jangan Tutup Halaman Ini Sebelum Melakukan Pembayaran.</td>
                </tr>
                <tr>
                    <td colspan="2" class="center">
                        <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Bukti Pemabayaran</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div id="modal1" class="modal">
    <form action="<?= base_url('pesan/savePembayaran'); ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <!-- hidden input  -->
        <input type="hidden" name="key" value="<?= $transaksi['key']; ?>">
        <input type="hidden" name="status" value="diproses">
        <!-- end hidden input  -->

        <div class="modal-content">
            <div class="row">
                <div class="input-field col s12">
                    <input id="nama" type="text" name="nama" class="validate">
                    <label for="nama">Nama pengirim</label>
                </div>
            </div>
            <div class="file-field input-field">
                <div class="btn">
                    <span>File</span>
                    <input type="file" multiple name="sampul">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload Bukti Pembayaran Berupa Foto..">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="modal-close waves-effect waves-green btn-flat">Kirim</a>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        M.Modal.init(elems);
    });
</script>
<?= $this->endSection(); ?>