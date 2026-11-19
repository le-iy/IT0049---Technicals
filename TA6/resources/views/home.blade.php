@include('layouts.header')

<h1 class="page-title">TECHNICAL 5: POS System</h1>

<p class="page-description">
    Basic Point-of-Sale application developed using Laravel 13.
</p>

<section class="card">
    <h2>Welcome to Our POS System!</h2>

    <p>
        This application demonstrates the basic use of
        routes, controllers, and Blade views in Laravel.
        Customer and staff information is currently stored
        in static PHP arrays.
    </p>
</section>

<div class="card-grid">

    <a href="/about" class="feature-card pink">
        <span>01 / INFORMATION</span>
        <h2>About Page</h2>
        <p>Learn more about the application.</p>
    </a>

    <a href="/customers" class="feature-card lavender">
        <span>02 / CUSTOMER RECORDS</span>
        <h2>Customer Accounts</h2>
        <p>View sample customer information.</p>
    </a>

    <a href="/users" class="feature-card blue">
        <span>03 / STAFF RECORDS</span>
        <h2>User Accounts</h2>
        <p>View sample staff information.</p>
    </a>

</div>

@include('layouts.footer')
