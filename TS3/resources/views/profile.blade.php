@include('layouts.header')

<h1 class="page-title">My Profile</h1>

<p class="page-description">
    Developer account information.
</p>

@if ($user)

    <section class="card">
        <h2>Profile Information</h2>

        <div class="profile-details">
            <p><strong>Username:</strong>
                {{ $user->username }}
            </p>

            <p><strong>Full Name:</strong>
                {{ $user->full_name }}
            </p>

            <p><strong>Email:</strong>
                {{ $user->email }}
            </p>
        </div>
    </section>

@else

    <section class="card">
        <p>No user profile found.</p>
    </section>

@endif

@include('layouts.footer')
