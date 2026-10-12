<?= $this->include('layouts/header') ?>

<h1 class="page-title"><?= esc($title) ?></h1>

<p class="page-description">
    View and manage staff account information retrieved
    from our Point-of-Sale database.
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
        <p>Staff usernames, full names, and profile pictures.</p>
    </div>

</div>

<br>

<section class="table-container">

    <h2>Staff Information</h2>

    <p class="page-description">
        Manage staff accounts and their profile pictures.
    </p>

    <div class="form-actions">
        <a href="<?= site_url('users/new') ?>" class="btn-primary">
            + New User
        </a>
    </div>

    <br>

    <table class="data-table">
        <thead>
            <tr>
                <th>Avatar</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Date Created</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php if (! empty($users)): ?>

                <?php foreach ($users as $user): ?>
                    <tr>
                        <td>
                            <?php if (! empty($user['avatar'])): ?>
                                <img
                                    src="<?= esc(base_url('uploads/' . $user['avatar']), 'attr') ?>"
                                    alt="Profile Picture"
                                    class="avatar-image"
                                >
                            <?php else: ?>
                                <img
                                    src="<?= esc(base_url('assets/images/avatar-placeholder.svg'), 'attr') ?>"
                                    alt="Default Profile Picture"
                                    class="avatar-image"
                                >
                            <?php endif; ?>
                        </td>

                        <td><?= esc($user['username']) ?></td>

                        <td><?= esc($user['full_name']) ?></td>

                        <td><?= esc($user['created_at']) ?></td>

                        <td>
                            <a
                                href="<?= site_url('users/' . $user['id'] . '/edit') ?>"
                                class="btn-secondary"
                            >
                                Edit
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            <?php else: ?>
                <tr>
                    <td colspan="5">
                        No user accounts found.
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</section>

<?= $this->include('layouts/footer') ?>
