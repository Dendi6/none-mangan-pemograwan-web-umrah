<?= $this->extend('layout/index'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="card">
        <div class="card-content">
            <div class="center">
                <h5 class="bold">Terima Kasih Telah Belanja di Toko kami</h5>
                <p>Manjakan lidah anda di Toko kami Mangan Kepri.</p><br><br>

                <p>Chat admin di whataspp : <a href="https://api.whatsapp.com/send?phone=6282285512408&text=saya%20telah%20membeli%20makanan%20di Mangan%20Kepri%20dengan%20id%20transaksi%20<?= $key; ?>">whataspp</a></p>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>