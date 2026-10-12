<?= $this->include('layouts/header') ?>

<h1 class="page-title">Staff Login</h1>

<p class="page-description">
    Sign in to access customer and staff account management.
</p>

<div class="card login-card">
    <h2>Welcome Back!</h2>

    <p class="page-description">
        Enter your staff credentials to continue.
    </p>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="login-error">
            <?= esc(session()->getFlashdata('error')) ?>
        </div>
    <?php endif; ?>

    <form method="post" action="<?= site_url('login') ?>">
        <?= csrf_field() ?>

        <div class="form-group">
            <label for="username">Username</label>

            <input
                type="text"
                id="username"
                name="username"
                autocomplete="username"
                value="<?= esc(old('username')) ?>"
            >

            <div class="form-error">
                <?= validation_show_error('username') ?>
            </div>
        </div>

        <div class="form-group">
            <label for="password">Password</label>

            <input
                type="password"
                id="password"
                name="password"
                autocomplete="current-password"
            >

            <div class="form-error">
                <?= validation_show_error('password') ?>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-primary">
                Log In
            </button>

            <a href="<?= site_url('/') ?>" class="btn-secondary">
                Back to Home
            </a>
        </div>
    </form>
</div>

<?= $this->include('layouts/footer') ?>
