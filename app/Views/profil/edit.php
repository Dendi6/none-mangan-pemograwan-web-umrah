<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<style>
    @media screen and (min-width: 300px) and (max-width: 576px) {
        .pertama {
            margin-top: 15%;
        }
    }

    @media screen and (min-width: 577px) {
        .pertama {
            margin-top: 6%;
        }
    }
</style>

<div class="container pertama">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('home'); ?>">Beranda</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('profil'); ?>">Profil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Profil</li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="card mb-3">
        <div class="card-body">
            <form action="<?= base_url('profil/update/' . user()->id); ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="sampulLama" value="<?= user()->images; ?>">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= user()->email; ?>" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= user()->nama; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="tmpLahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tmpLahir" name="tmpLahir" value="<?= user()->tempatLahir; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggalLahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" value="<?= user()->tanggalLahir; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= user()->alamat; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="noHp">Nomor Telepon</label>
                            <input type="text" class="form-control" id="noHp" name="noHp" value="<?= user()->noHp; ?>" required>
                        </div>

                        <div class="form-group custom-file">
                            <p>Foto Profil. Foto Harus berukuran 400x400.</p>
                            <input type="file" class="custom-file-input" id="sampul" name="sampul" onchange="preview()">
                            <label class="custom-file-label" for="sampul"><?= user()->images; ?></label>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <img src="/img/profil/<?= user()->images; ?>" width="100%" class="img-full img-thumbnail img-preview" alt="">
                    </div>
                </div>
                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-primary">Edit Profil</button>
                </div>
            </form>
        </div>
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