<?= $this->include('layouts/header') ?>

<h1 class="page-title"><?= esc($title) ?></h1>

<p class="page-description">
    View staff account information retrieved from
    our Point-of-Sale database.
</p>

<div class="card-grid">

    <div class="feature-card pink">
        <span>01 / OVERVIEW</span>
        <h2><?= count($users) ?> Users</h2>
        <p>Total staff accounts available.</p>
    </div>

    <div class="feature-card lavender">
        <span>02 / DATA SOURCE</span>
        <h2>Database Records</h2>
        <p>User information retrieved from a MySQL database.</p>
    </div>

    <div class="feature-card blue">
        <span>03 / ACCESS</span>
        <h2>Account Details</h2>
        <p>Staff usernames, full names, and registration dates.</p>
    </div>

</div>

<br>

<section class="table-container">

    <h2>Staff Information</h2>

    <table class="data-table">
        <thead>
            <tr>
                <th>Username</th>
                <th>Full Name</th>
                <th>Date Created</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= esc($user['username']) ?></td>
                    <td><?= esc($user['full_name']) ?></td>
                    <td><?= esc($user['created_at']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</section>

<?= $this->include('layouts/footer') ?>
