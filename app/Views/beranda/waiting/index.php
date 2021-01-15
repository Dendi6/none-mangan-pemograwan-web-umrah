<?= $this->extend('layout/index'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="card">
        <div class="card-content">
            <div class="center">
                <h5 class="bold">Terima Kasih Telah Beralangganan</h5>
                <p>Selalu berlangganan dengan kami di toko NONE kepri.</p><br><br>

                <p>Char admin di whataspp : <a href="https://api.whatsapp.com/send?phone=6281270142207&text=Hallo%20kak,%20Saya%20telah%20membeli%20produk%20di%20None%20,%20dengan%20key%20transaksi%20*<?= $key; ?>*">whataspp</a></p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>