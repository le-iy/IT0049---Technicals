<?= $this->include('layouts/header') ?>

<section class="card">
    <h1 class="page-title"><?= esc($heading) ?></h1>
    <p class="page-description"><?= esc($description) ?></p>
</section>

<div class="card-grid">

    <a href="<?= site_url('about') ?>" class="feature-card pink">
        <span>01 / INFORMATION</span>
        <h2>About Page</h2>
        <p>POS Web Descript.</p>
    </a>

    <a href="<?= site_url('customers') ?>" class="feature-card lavender">
        <span>02 / CUSTOMER RECORDS</span>
        <h2>Customer Accounts</h2>
        <p>List of customer information.</p>
    </a>

    <a href="<?= site_url('users') ?>" class="feature-card blue">
        <span>03 / STAFF RECORDS</span>
        <h2>User Accounts</h2>
        <p>List of staff members and their assigned roles.</p>
    </a>

</div>

<?= $this->include('layouts/footer') ?>
