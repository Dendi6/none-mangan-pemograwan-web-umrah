<?= $this->extend('admin/layout/index'); ?>

<?= $this->section('content'); ?>

<div class="card mt-4">
    <div class="card-body">
        <form action="<?= base_url('admin/updateKota/' . $kota['id']); ?>" method="POST">
            <?= csrf_field(); ?>
            <div class="form-group">
                <label for="nama_kota">Nama Kota</label>
                <input type="text" class="form-control" id="nama_kota" name="nama_kota" value="<?= $kota['nama_kota']; ?>" aria-describedby="emailHelp" required>
                <small id="emailHelp" class="form-text text-muted">Nama Kota meruopakan cabang yang terdiri dari pelayaran pulang dan pergi</small>
            </div>
            <div class="form-group">
                <label for="hargaOngkir">Harga Onkir</label>
                <input type="text" class="form-control" id="hargaOngkir" name="hargaOngkir" value="<?= $kota['hargaOngkir']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Kota</button>
        </form>
    </div>
</div>

<?= $this->endSection() ?>