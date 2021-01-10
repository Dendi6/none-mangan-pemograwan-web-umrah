<?= $this->extend('layout/index'); ?>

<?= $this->section('content'); ?>

<style>
    .card .card-image img {
        border-radius: 10px;
        width: 100%;
        height: 300px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                    <img src="<?= base_url(); ?>/images/profil/<?= user()->sampul; ?>" alt="<?= user()->nama; ?>">
                </div>
            </div>
        </div>
        <div class="col s12 m8">
            <div class="card">
                <div class="card-content">
                    <table>
                        <tr>
                            <th colspan="3">Informasi User</th>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <th><?= user()->email; ?></th>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <th><?= user()->username; ?></th>
                        </tr>
                        <tr>
                            <td colspan="3" class="center">
                                <a href="#" class="btn">Edit Akun</a>
                                <a href="#" class="btn">Edit Password</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- <div class="card">
        <div class="card-content">
            <div class="row">
                <div class="col s12 m4">

                </div>
                <div class="col s12 m8">
                    <table>
                        <tr>
                            <th colspan="3">Informasi User</th>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <th><?= user()->email; ?></th>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <th><?= user()->username; ?></th>
                        </tr>
                    </table>
                    <div class="text-center">
                        <a href="<?= base_url('profil/edit/' . user()->id); ?>" class="btn">Edit Akun</a>
                        <a href="#" class="btn" onclick="return confirm('apakah anda yakin ingin hapus ?');">Edit Password</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>

<?= $this->endSection(); ?>