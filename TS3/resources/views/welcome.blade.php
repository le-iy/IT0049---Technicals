@include('layouts.header')

<h1 class="page-title">Tasks for Today</h1>

<p class="page-description">
    Your scheduled tasks for {{ now()->format('F d, Y') }}.
</p>

<div class="card-grid">

    <div class="feature-card pink">
        <span>01 / OVERVIEW</span>
        <h2>{{ count($tasks) }} Tasks Today</h2>
        <p>Tasks scheduled for the current date.</p>
    </div>

    <div class="feature-card lavender">
        <span>02 / STATUS</span>
        <h2>Daily Progress</h2>
        <p>Review the status of today's tasks.</p>
    </div>

    <a href="/tasks" class="feature-card blue">
        <span>03 / NAVIGATION</span>
        <h2>All Tasks</h2>
        <p>View your complete task list.</p>
    </a>

</div>

<section class="table-container">

    <h2>Today's Task List</h2>

    <table class="data-table">
        <thead>
            <tr>
                <th>Task Title</th>
                <th>Status</th>
                <th>Date</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>
                        <span class="role-badge">
                            {{ ucfirst($task->status) }}
                        </span>
                    </td>
                    <td>{{ $task->task_date }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">
                        No tasks scheduled for today.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</section>

@include('layouts.footer')
