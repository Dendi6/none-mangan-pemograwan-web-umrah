<?= $this->extend('admin/layout/index'); ?>

<?= $this->section('content'); ?>

<div class="mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Beranda</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('admin/produk'); ?>">Produk</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
        </ol>
    </nav>
</div>


<div class="card mb-3">
    <div class="card-body">
        <form action="<?= base_url('admin/updateProduk/' . $produk['id']); ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <input type="hidden" name="sampulLama" value="<?= user()->images; ?>">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <div class="form-group">
                        <label for="nama">Nama Makanan</label>
                        <input type="nama" class="form-control" id="nama" name="nama" value="<?= $produk['nama_produk']; ?>" required autofocus>
                    </div>
                    <div class="form-group">
                        <!-- dari kota -->
                        <label for="kota">Makanan berasal dari</label>
                        <select class="custom-select" id="kota" name="kota" required>
                            <option selected value="<?= $produk['kota_asal'] ?>">Pilih Asal</option>
                            <?php foreach ($kota as $k) : ?>
                                <option value="<?= $k['id_kota']; ?>"><?= $k['nama_kota']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <!-- akhir div kota -->
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga Makanan</label>
                        <input type="text" class="form-control" id="harga" name="harga" value="<?= $produk['harga']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" required><?= $produk['deskripsi']; ?></textarea>
                    </div>

                    <div class="form-group custom-file">
                        <p>Foto Profil. Foto Harus berukuran 400x400.</p>
                        <input type="file" class="custom-file-input" id="sampul" name="sampul" onchange="preview()">
                        <label class="custom-file-label" for="sampul"><?= $produk['sampul']; ?></label>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <img src="/images/produk/<?= $produk['sampul']; ?>" width="100%" class="img-full img-thumbnail img-preview" alt="">
                </div>
            </div>
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary">Edit Poduk</button>
            </div>
        </form>
    </div>
</div>

<!-- javascript preview -->
<script>
    function preview() {
        const sampul = document.querySelector('#sampul');
        const sampulLabel = document.querySelector('.custom-file-label');
        const imgPreview = document.querySelector('.img-preview');

        sampulLabel.textContent = sampul.files[0].name;

        const fileSampul = new FileReader();
        fileSampul.readAsDataURL(sampul.files[0]);

        fileSampul.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>


<?= $this->endSection(); ?>