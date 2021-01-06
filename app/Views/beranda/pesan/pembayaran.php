<?= $this->extend('layout/index'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="card">
        <div class="card-content">
            <p>Lakukan pembayaran agar pesanan dapat di proses.</p>
            <table class="striped mt-2">
                <tr>
                    <td>Total Harga</td>
                    <td>Rp. <b><?= $transaksi['harga_total']; ?></b></td>
                </tr>
                <tr>
                    <td>Tranfer ke</td>
                    <td>Dendi ( BRI ) </td>
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
    <div class="modal-content">
        <h4>Modal Header</h4>
        <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        M.Modal.init(elems);
    });
</script>
<?= $this->endSection(); ?>