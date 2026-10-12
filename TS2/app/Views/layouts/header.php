<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= esc($title ?? 'Tasks for Today') ?> | Task Management</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>

<div class="dashboard">

    <header class="navbar">
        <a href="<?= site_url('/') ?>" class="brand">
            ✳ Tasks for Today
        </a>

        <nav class="nav-links">
            <a href="<?= site_url('/') ?>">Home</a>
            <a href="<?= site_url('tasks') ?>">Task List</a>
            <a href="<?= site_url('profile') ?>">Profile</a>
            <a href="<?= site_url('about') ?>">About</a>
        </nav>

        <div class="nav-account">

            <?php if (session()->get('isLoggedIn')): ?>

                <span class="nav-label">
                    <?= esc(session()->get('username')) ?>
                </span>

                <form method="post" action="<?= site_url('logout') ?>">
                    <?= csrf_field() ?>

                    <button type="submit" class="nav-logout">
                        Logout
                    </button>
                </form>

            <?php else: ?>

                <a href="<?= site_url('login') ?>" class="nav-login">
                    Login
                </a>

            <?php endif; ?>

        </div>
    </header>

    <main class="content">
