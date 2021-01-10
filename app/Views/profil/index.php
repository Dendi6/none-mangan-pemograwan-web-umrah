<?= $this->extend('layout/index'); ?>

<?= $this->section('content'); ?>

<style>
    .card .card-image img {
        border-radius: 10px;
        width: 100%;
        height: 300px;
    }

    .satu {
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
            <div class="card satu">
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
</div>

<?= $this->endSection(); ?>