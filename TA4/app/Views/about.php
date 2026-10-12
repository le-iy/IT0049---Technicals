<?= $this->include('layouts/header') ?>

<h1 class="page-title"><?= esc($heading) ?></h1>

<p class="page-description">
    <?= esc($description) ?>
</p>

<section class="card">
    <h2>Our Point-of-Sale System</h2>

    <p>
        This project is a Point-of-Sale (POS) management
        application developed using CodeIgniter 4.
        It currently focuses on managing customer records
        and staff accounts, allowing authorized users
        to access and update information stored in
        a MySQL database.
    </p>

    <p>
        Staff members can add new customers and users,
        edit existing records, and upload profile pictures
        for user accounts. The forms include validation
        to check required information and prevent
        invalid entries from being saved.
    </p>

    <p>
        The system also includes login and logout
        functionality. Staff members must log in using
        their registered username and password before
        accessing customer and user management pages.
        Passwords are stored as hashes, while sessions
        and authentication filters manage access
        to protected pages.
    </p>

    <p>
        The application demonstrates database operations,
        form validation, file uploads, and session-based
        authentication using CodeIgniter's MVC structure.
        Additional POS features, such as sales and
        inventory management, may be added in future
        development.
    </p>
</section>

<div class="card-grid">

    <div class="feature-card pink">
        <span>01 / FRAMEWORK</span>
        <h2>CodeIgniter 4</h2>
        <p>
            A PHP framework used to organize the
            application's controllers, models, views,
            and routing.
        </p>
    </div>

    <div class="feature-card lavender">
        <span>02 / ARCHITECTURE</span>
        <h2>MVC Pattern</h2>
        <p>
            Separates database operations, application
            logic, and user interface components
            for easier development and maintenance.
        </p>
    </div>

    <div class="feature-card blue">
        <span>03 / DATA & SECURITY</span>
        <h2>MySQL & Sessions</h2>
        <p>
            Stores customer and staff records,
            hashed passwords, and avatar filenames.
            Sessions and filters restrict access
            to account management features.
        </p>
    </div>

</div>

<?= $this->include('layouts/footer') ?>
