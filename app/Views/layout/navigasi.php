<style>
    nav {
        box-shadow: none;
    }

    nav div .brand-logo {
        color: #63a541;
    }

    nav div a {
        color: #63a541;
    }

    .dropdown-content {
        border-radius: 5px;
        width: 200px;
        color: #63a541;
    }
</style>
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
    <li><a href="<?= base_url('profil'); ?>">Profil</a></li>
    <?php if (in_groups('admin')) : ?>
        <li><a href="<?= base_url('admin'); ?>">Admin</a></li>
    <?php endif; ?>
    <li class="divider"></li>
    <li><a href="/logout">Logout</a></li>
</ul>

<nav class="white">
    <div class="container nav-wrapper">
        <a href="<?= base_url(); ?>" class="brand-logo left bold">None</a>
        <ul class="right">
            <?php if (logged_in()) :  ?>
                <li><a href="<?= base_url('favorite/' . user()->id); ?>"><i class="material-icons">favorite_border</i></a></li>
            <?php else : ?>
                <li><a href="<?= base_url('/login'); ?>"><i class="material-icons">favorite_border</i></a></li>
            <?php endif; ?>

            <?php if (logged_in()) :  ?>
                <li><a href="<?= base_url('pesan/' . user()->id); ?>"><i class="material-icons">add_shopping_cart</i></a></li>
            <?php else : ?>
                <li><a href="<?= base_url('/login'); ?>"><i class="material-icons">add_shopping_cart</i></a></li>
            <?php endif; ?>

            <?php if (logged_in()) :  ?>
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><i class="material-icons">account_circle</i></a></li>
            <?php else : ?>
                <li><a href="<?= base_url('login'); ?>">Login</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.dropdown-trigger');
        M.Dropdown.init(elems);
    });
</script>