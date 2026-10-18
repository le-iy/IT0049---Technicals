@include('layouts.header')

<h1 class="page-title">Customer Accounts</h1>

<p class="page-description">
    View sample customer information stored in static PHP arrays.
</p>

<div class="card-grid">

    <div class="feature-card pink">
        <span>01 / OVERVIEW</span>
        <h2>{{ count($customers) }} Customers</h2>
        <p>Total customer records available.</p>
    </div>

    <div class="feature-card lavender">
        <span>02 / DATA SOURCE</span>
        <h2>Static Records</h2>
        <p>Customer information from a PHP array.</p>
    </div>

    <div class="feature-card blue">
        <span>03 / INFORMATION</span>
        <h2>Customer Details</h2>
        <p>Names, email addresses, and phone numbers.</p>
    </div>

</div>

<br>

<section class="table-container">

    <h2>Customer Information</h2>

    <table class="data-table">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer['full_name'] }}</td>
                    <td>{{ $customer['email'] }}</td>
                    <td>{{ $customer['phone'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</section>

@include('layouts.footer')
