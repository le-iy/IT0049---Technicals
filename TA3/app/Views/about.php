<?= $this->include('layouts/header') ?>

<h1 class="page-title"><?= esc($heading) ?></h1>

<p class="page-description">
    <?= esc($description) ?>
</p>

<section class="card">
    <h2>Our Point-of-Sale System</h2>

    <p>
        This Point-of-Sale (POS) system is a web-based application
        developed using CodeIgniter 4. It provides a simple way
        to manage customer information and staff accounts through
        a centralized database. (tis ai-gen descr)
    </p>

    <p>
        The application allows users to view, add, and update
        customer and staff records. It also includes form
        validation to help ensure that the information entered
        is valid and complete. Staff accounts can also have
        profile pictures, which are uploaded and displayed
        within the system. (tis also ai-gen descr heh)
    </p>

    <p>
        This project demonstrates the use of the MVC architecture,
        database operations, form handling, validation, and
        file uploads in CodeIgniter. While it currently focuses
        on customer and staff account management, additional
        POS features may be developed in the future.
    </p>

    <p>
        The following sections highlight the main technologies
        and concepts used in developing the application.
    </p>
</section>

<div class="card-grid">

    <div class="feature-card pink">
        <span>01 / FRAMEWORK</span>
        <h2>CodeIgniter 4</h2>
        <p>
            A PHP framework used to develop and
            organize the application's features,
            including forms and validation.
        </p>
    </div>

    <div class="feature-card lavender">
        <span>02 / ARCHITECTURE</span>
        <h2>MVC Pattern</h2>
        <p>
            Separates database operations, application
            logic, and user interface components
            for better code organization.
        </p>
    </div>

    <div class="feature-card blue">
        <span>03 / DATA HANDLING</span>
        <h2>MySQL Database</h2>
        <p>
            Stores customer and staff information,
            including account details and uploaded
            avatar filenames.
        </p>
    </div>

</div>

<?= $this->include('layouts/footer') ?>
