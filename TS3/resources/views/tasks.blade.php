@include('layouts.header')

<h1 class="page-title">Task List</h1>

<p class="page-description">
    View all tasks arranged by scheduled date.
</p>

<div class="card-grid">

    <div class="feature-card pink">
        <span>01 / OVERVIEW</span>
        <h2>{{ count($tasks) }} Total Tasks</h2>
        <p>All available task records.</p>
    </div>

    <div class="feature-card lavender">
        <span>02 / DATA SOURCE</span>
        <h2>Eloquent ORM</h2>
        <p>Tasks retrieved from the MySQL database.</p>
    </div>

    <a href="/" class="feature-card blue">
        <span>03 / NAVIGATION</span>
        <h2>Today's Tasks</h2>
        <p>Return to your daily task list.</p>
    </a>

</div>

<section class="table-container">

    <h2>All Task Records</h2>

    <table class="data-table">
        <thead>
            <tr>
                <th>Task Title</th>
                <th>Status</th>
                <th>Scheduled Date</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>
                        <span class="role-badge">
                            {{ ucfirst($task->status) }}
                        </span>
                    </td>
                    <td>{{ $task->task_date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</section>

@include('layouts.footer')
