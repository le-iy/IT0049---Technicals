<?= view('layouts/header', ['title' => $title]) ?>

<div class="card">
    <h1>All Tasks</h1>
    <p>Complete list of recorded tasks.</p>

    <?php if (empty($tasks)): ?>
        <p>No tasks available.</p>
    <?php else: ?>
        <div class="table-container">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Task</th>
                        <th>Status</th>
                        <th>Task Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tasks as $task): ?>
                        <tr>
                            <td><?= esc($task['id']) ?></td>
                            <td><?= esc($task['title']) ?></td>
                            <td><?= esc(ucfirst($task['status'])) ?></td>
                            <td><?= esc($task['task_date']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>

<?= view('layouts/footer') ?>
