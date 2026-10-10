<?= view('layouts/header', ['title' => $title]) ?>

<div class="card">
    <h1>User Profile</h1>

    <?php if ($user): ?>
        <p><strong>ID:</strong> <?= esc($user['id']) ?></p>
        <p><strong>Username:</strong> <?= esc($user['username']) ?></p>
        <p><strong>Full Name:</strong> <?= esc($user['full_name']) ?></p>
        <p><strong>Email:</strong> <?= esc($user['email']) ?></p>
        <p><strong>Created:</strong> <?= esc($user['created_at']) ?></p>
    <?php else: ?>
        <p>No demo user found.</p>
    <?php endif; ?>
</div>

<?= view('layouts/footer') ?>
