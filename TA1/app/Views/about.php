<?= $this->include('layouts/header') ?>

<h1 class="page-title"><?= esc($heading) ?></h1>
<p class="page-description"><?= esc($description) ?></p>

<section class="card">
    <h2>Our Point-of-Sale System</h2>

    <p>
        POS is a simple web-based Point-of-Sale
        application developed using CodeIgniter 4.
        It demonstrates the fundamentals of routing,
        controllers, views, and static data handling. (tis ai-generated descript)
    </p>

    <p>
        The application provides an organized interface
        for viewing customer information and staff
        accounts through a four-page website. (tis also ai-generated descript)
    </p>

    <p>
        See subtopics listed below: (unclickable)
    </p>
</section>

<div class="card-grid">

    <div class="feature-card pink">
        <span>01 / FRAMEWORK</span>
        <h2>CodeIgniter 4</h2>
        <p>
            A PHP framework used to organize and
            develop web applications.
        </p>
    </div>

    <div class="feature-card lavender">
        <span>02 / ARCHITECTURE</span>
        <h2>MVC Pattern</h2>
        <p>
            Separates application logic, presentation,
            and data responsibilities.
        </p>
    </div>

    <div class="feature-card blue">
        <span>03 / DATA HANDLING</span>
        <h2>Static PHP Arrays</h2>
        <p>
            Stores temporary customer and user records
            without requiring a database.
        </p>
    </div>

</div>

<?= $this->include('layouts/footer') ?>
