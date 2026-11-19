@include('layouts.header')

<h1 class="page-title">About This POS System</h1>

<p class="page-description">
    A simple Laravel application demonstrating MVC concepts.
</p>

<section class="card">

    <h2>Our Point-of-Sale System</h2>

    <p>
        This Point-of-Sale application is developed using
        Laravel 13. It provides a basic interface for viewing
        customer and staff account information.
    </p>

    <p>
        The project follows the Model-View-Controller concept.
        Routes handle incoming URL requests, controllers
        prepare the information, and Blade views display
        the content in the browser.
    </p>

    <p>
        For this activity, customer and staff records
        are stored in static PHP arrays rather than a
        database. This allows the project to focus on
        Laravel's basic structure and request flow.
    </p>

</section>

<div class="card-grid">

    <div class="feature-card pink">
        <span>01 / FRAMEWORK</span>
        <h2>Laravel 13</h2>
        <p>A PHP framework for developing web applications.</p>
    </div>

    <div class="feature-card lavender">
        <span>02 / ARCHITECTURE</span>
        <h2>MVC Pattern</h2>
        <p>Separates application logic and page presentation.</p>
    </div>

    <div class="feature-card blue">
        <span>03 / DATA HANDLING</span>
        <h2>Static PHP Arrays</h2>
        <p>Temporary storage for customer and staff records.</p>
    </div>

</div>

@include('layouts.footer')
