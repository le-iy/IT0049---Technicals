<?= view('layouts/header', ['title' => $title]) ?>

<h1 class="page-title">Welcome Back!</h1>

<p class="page-description">
    Log in to manage your tasks for today.
</p>

<div class="card login-card">
    <h2>Account Login</h2>

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
                value="<?= esc(old('username')) ?>"
                autocomplete="username"
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

<?= view('layouts/footer') ?>
