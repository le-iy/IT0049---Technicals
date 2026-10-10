<?= view('layouts/header', ['title' => $title]) ?>

<div class="card">
    <h1>Welcome!</h1>
    <p>Here are your tasks for today:</p>
    <p><strong><?= esc(date('F d, Y')) ?></strong></p>
</div>

<div class="card">
    <h2>Today's Tasks</h2>

    <?php if (empty($tasks)): ?>
        <p>No tasks scheduled for today.</p>
    <?php else: ?>
        <div class="table-container">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Task</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tasks as $task): ?>
                        <tr>
                            <td><?= esc($task['title']) ?></td>
                            <td>
                                <span class="status <?= esc($task['status']) === 'done' ? 'done' : 'pending' ?>">
                                    <?= esc(ucfirst($task['status'])) ?>
                                </span>
                            </td>
                            <td><?= esc($task['task_date']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>

<?= view('layouts/footer') ?>
