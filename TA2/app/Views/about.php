<?= $this->include('layouts/header') ?>

<h1 class="page-title"><?= esc($heading) ?></h1>
<p class="page-description"><?= esc($description) ?></p>

<section class="card">
    <h2>Our Point-of-Sale System</h2>

    <p>
        Our Point-of-Sale (POS) system is a web-based application designed to organize and display customer and staff account information in one place. It provides a simple interface where users can access records and view relevant details. (tis ai-generated descript) (tis ai-generated descript)
    </p>

    <p>
        The system uses a MySQL database to store customer and staff information, allowing records to be retrieved and displayed through the application. This serves as the foundation for additional POS features that may be implemented in future development.  (tis also ai-generated descript)
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
            A PHP framework used to develop and
            organize the application's features.
        </p>
    </div>

    <div class="feature-card lavender">
        <span>02 / ARCHITECTURE</span>
        <h2>MVC Pattern</h2>
        <p>
            Separates data management, application
            logic, and user interface components.
        </p>
    </div>

    <div class="feature-card blue">
        <span>03 / DATA HANDLING</span>
        <h2>MySQL Database</h2>
        <p>
            Stores customer and staff records
            retrieved through CodeIgniter Models.
        </p>
    </div>

</div>


<?= $this->include('layouts/footer') ?>
