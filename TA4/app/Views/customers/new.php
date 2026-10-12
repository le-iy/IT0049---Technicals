<?= $this->include('layouts/header') ?>

<h1 class="page-title">New Customer</h1>

<p class="page-description">
    Register a new customer in the Point-of-Sale system.
</p>

<div class="card">
    <h2>Customer Information</h2>

    <form method="post" action="<?= site_url('customers') ?>">
        <?= csrf_field() ?>

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

        <div class="form-group">
            <label for="email">Email Address</label>

            <input
                type="text"
                id="email"
                name="email"
                value="<?= esc(old('email')) ?>"
            >

            <div class="form-error">
                <?= validation_show_error('email') ?>
            </div>
        </div>

        <div class="form-group">
            <label for="phone">Phone Number (Optional)</label>

            <input
                type="text"
                id="phone"
                name="phone"
                value="<?= esc(old('phone')) ?>"
                placeholder="e.g. 09123456789"
            >
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-primary">
                Save Customer
            </button>

            <a href="<?= site_url('customers') ?>" class="btn-secondary">
                Cancel
            </a>
        </div>
    </form>
</div>

<?= $this->include('layouts/footer') ?>
