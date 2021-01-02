<?= $this->extend('layout/index'); ?>

<?= $this->section('content'); ?>

<!-- include section bagian slider -->
<?= $this->include('beranda/slider'); ?>

<div class="mt-4">
    <div class="row">
        <div class="col s12">
            <div class="container">
                <ul class="tabs">
                    <li class="tab col s2"><a class="active" href="#tanjungpinang">Tanjungpinang</a></li>
                    <li class="tab col s2"><a href="#batam">Batam</a></li>
                    <li class="tab col s2"><a href="#lingga">Lingga</a></li>
                    <li class="tab col s2"><a href="#karimun">Karimun</a></li>
                    <li class="tab col s2"><a href="#natuna">Natuna</a></li>
                    <li class="tab col s2"><a href="#anambas">Anambas</a></li>
                </ul>
            </div>
        </div>
        <div id="tanjungpinang" class="col s12">
            <?= $this->include('beranda/content/tanjungpinang'); ?>
        </div>
        <div id="batam" class="col s12">
            <?= $this->include('beranda/content/batam'); ?>
        </div>
        <div id="lingga" class="col s12">
            <?= $this->include('beranda/content/lingga'); ?>
        </div>
        <div id="karimun" class="col s12">
            <?= $this->include('beranda/content/karimun'); ?>
        </div>
        <div id="natuna" class="col s12">
            <?= $this->include('beranda/content/natuna'); ?>
        </div>
        <div id="anambas" class="col s12">
            <?= $this->include('beranda/content/anambas'); ?>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var tabs = document.querySelectorAll('.tabs');
        M.Tabs.init(tabs);
    });
</script>

<?= $this->endSection(); ?>