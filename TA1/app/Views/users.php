<?= $this->include('layouts/header') ?>

<h1 class="page-title"><?= esc($title) ?></h1>

<p class="page-description">
    View the staff members and their assigned roles
    within our sample Point-of-Sale system.
</p>

<div class="card-grid">

    <div class="feature-card pink">
        <span>01 / OVERVIEW</span>
        <h2><?= count($users) ?> Users</h2>
        <p>Total staff accounts available.</p>
    </div>

    <div class="feature-card lavender">
        <span>02 / DATA SOURCE</span>
        <h2>Static Records</h2>
        <p>User information stored in a PHP array.</p>
    </div>

    <div class="feature-card blue">
        <span>03 / ACCESS</span>
        <h2>Staff Roles</h2>
        <p>Administrators, cashiers, managers, and staff.</p>
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
                <th>Role</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= esc($user['username']) ?></td>
                    <td><?= esc($user['full_name']) ?></td>
                    <td>
                        <span class="role-badge">
                            <?= esc($user['role']) ?>
                        </span>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</section>

<?= $this->include('layouts/footer') ?>
