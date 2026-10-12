<?= $this->include('layouts/header') ?>

<h1 class="page-title">Edit User</h1>

<p class="page-description">
    Update staff account details and upload a profile picture.
</p>

<div class="card">
    <h2>User Information</h2>

    <form
        method="post"
        action="<?= site_url('users/' . $user['id'] . '/update') ?>"
        enctype="multipart/form-data"
    >
        <?= csrf_field() ?>

        <div class="form-group">
            <label for="username">Username</label>

            <input
                type="text"
                id="username"
                name="username"
                value="<?= esc(old('username', $user['username'])) ?>"
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
                value="<?= esc(old('full_name', $user['full_name'])) ?>"
            >

            <div class="form-error">
                <?= validation_show_error('full_name') ?>
            </div>
        </div>

        <div class="form-group">
            <label>Current Profile Picture</label>

            <div class="avatar-preview">
                <?php if (! empty($user['avatar'])): ?>
                    <img
                        src="<?= esc(base_url('uploads/' . $user['avatar']), 'attr') ?>"
                        alt="Current Profile Picture"
                        class="avatar-image"
                    >
                <?php else: ?>
                    <img
                        src="<?= esc(base_url('assets/images/avatar-placeholder.svg'), 'attr') ?>"
                        alt="Default Profile Picture"
                        class="avatar-image"
                    >
                <?php endif; ?>
            </div>
        </div>

        <div class="form-group">
            <label for="avatar">Upload New Profile Picture</label>

            <input
                type="file"
                id="avatar"
                name="avatar"
                accept=".jpg,.jpeg,.png,image/jpeg,image/png"
            >

            <p class="upload-hint">
                JPG or PNG only. Maximum file size: 2 MB.
            </p>

            <div class="form-error">
                <?= validation_show_error('avatar') ?>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-primary">
                Update User
            </button>

            <a href="<?= site_url('users') ?>" class="btn-secondary">
                Cancel
            </a>
        </div>
    </form>
</div>

<?= $this->include('layouts/footer') ?>
