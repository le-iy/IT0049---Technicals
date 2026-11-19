@include('layouts.header')

<h1 class="page-title">About This Application</h1>

<p class="page-description">
    Tasks for Today Management System developed in Laravel.
</p>

<section class="card">

    <h2>Tasks for Today</h2>

    <p>
        This application was developed for IT0049 -
        Web System Technologies using Laravel 13.
    </p>

    <p>
        It allows users to view tasks scheduled for
        the current date and browse all tasks stored
        in a MySQL database.
    </p>

    <p>
        Laravel migrations define the database structure,
        seeders populate sample records, and Eloquent
        models retrieve information for the Blade views.
    </p>

    <p>
        <strong>Developer:</strong> Lei Caabay
    </p>

</section>

<div class="card-grid">

    <div class="feature-card pink">
        <span>01 / FRAMEWORK</span>
        <h2>Laravel 13</h2>
        <p>PHP web application framework.</p>
    </div>

    <div class="feature-card lavender">
        <span>02 / DATABASE</span>
        <h2>MySQL</h2>
        <p>Database for tasks and user information.</p>
    </div>

    <div class="feature-card blue">
        <span>03 / DATA LAYER</span>
        <h2>Eloquent ORM</h2>
        <p>Retrieves database records through models.</p>
    </div>

</div>

@include('layouts.footer')
