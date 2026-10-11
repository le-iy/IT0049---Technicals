<?= $this->include('layouts/header') ?>

<h1 class="page-title">New User</h1>

<p class="page-description">
    Register a new user account in the Point-of-Sale system.
</p>

<div class="card">
    <h2>User Information</h2>

    <form method="post" action="<?= site_url('users') ?>">
        <?= csrf_field() ?>

        <div class="form-group">
            <label for="username">Username</label>

            <input
                type="text"
                id="username"
                name="username"
                value="<?= esc(old('username')) ?>"
            >

            <div class="form-error">
                <?= validation_show_error('username') ?>
            </div>
        </div>

        <div class="form-group">
            <label for="full_name">Full Name</label>

            <input
                type="text"
                id="full_name"
                name="full_name"
                value="<?= esc(old('full_name')) ?>"
            >

            <div class="form-error">
                <?= validation_show_error('full_name') ?>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-primary">
                Save User
            </button>

            <a href="<?= site_url('users') ?>" class="btn-secondary">
                Cancel
            </a>
        </div>
    </form>
</div>

<?= $this->include('layouts/footer') ?>
