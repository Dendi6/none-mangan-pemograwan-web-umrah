<?= $this->extend('layout/index'); ?>

<?= $this->section('content'); ?>

<!-- include section bagian slider -->
<?= $this->include('beranda/slider'); ?>

<div class="mt-4">
    <div class="row">
        <div class="col s12">
            <div class="container">
                <ul class="tabs">
                    <?php foreach ($kota as $k) : ?>
                        <li class="tab col s2"><a class="active" href="#<?= $k['id_kota']; ?>"><?= $k['nama_kota']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <?php foreach ($kota as $k) : ?>
            <div id="<?= $k['id_kota']; ?>" class="col s12">
                <?= $this->include('beranda/content/' . $k['nama_kota']); ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var tabs = document.querySelectorAll('.tabs');
        M.Tabs.init(tabs);
    });
</script>

<?= $this->endSection(); ?>