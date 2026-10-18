@include('layouts.header')

<h1 class="page-title">User Accounts</h1>

<p class="page-description">
    View staff account information stored in static PHP arrays.
</p>

<div class="card-grid">

    <div class="feature-card pink">
        <span>01 / OVERVIEW</span>
        <h2>{{ count($users) }} Users</h2>
        <p>Total staff accounts available.</p>
    </div>

    <div class="feature-card lavender">
        <span>02 / DATA SOURCE</span>
        <h2>Static Records</h2>
        <p>Staff information from a PHP array.</p>
    </div>

    <div class="feature-card blue">
        <span>03 / ACCESS</span>
        <h2>Staff Roles</h2>
        <p>Administrators, cashiers, and staff members.</p>
    </div>

</div>

<br>

<section class="table-container">

    <h2>Staff Information</h2>

    <table class="data-table">
        <thead>
            <tr>
                <th>Username</th>
                <th>Full Name</th>
                <th>Role</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user['username'] }}</td>
                    <td>{{ $user['full_name'] }}</td>
                    <td>
                        <span class="role-badge">
                            {{ $user['role'] }}
                        </span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</section>

@include('layouts.footer')
