<?= view('layouts/header', ['title' => $title]) ?>

<h1 class="page-title">All Tasks</h1>

<p class="page-description">
    View all active tasks and their current status.
</p>

<?php if (session()->get('isLoggedIn')): ?>
    <div class="form-actions">
        <a href="<?= site_url('tasks/new') ?>" class="btn-primary">
            + New Task
        </a>
    </div>
<?php endif; ?>

<br>

<div class="table-container">
    <h2>Task List</h2>

    <?php if (empty($tasks)): ?>
        <p>No active tasks available.</p>
    <?php else: ?>

        <table class="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Task</th>
                    <th>Status</th>
                    <th>Task Date</th>

                    <?php if (session()->get('isLoggedIn')): ?>
                        <th>Actions</th>
                    <?php endif; ?>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?= esc($task['id']) ?></td>
                        <td><?= esc($task['title']) ?></td>

                        <td>
                            <span class="status <?= esc($task['status']) ?>">
                                <?= esc(ucfirst($task['status'])) ?>
                            </span>
                        </td>

                        <td><?= esc($task['task_date']) ?></td>

                        <?php if (session()->get('isLoggedIn')): ?>
                            <td>
                                <div class="task-actions">
                                    <a
                                        href="<?= site_url('tasks/' . $task['id'] . '/edit') ?>"
                                        class="btn-secondary"
                                    >
                                        Edit
                                    </a>

                                    <form
                                        method="post"
                                        action="<?= site_url('tasks/' . $task['id'] . '/archive') ?>"
                                        onsubmit="return confirm('Archive this task?');"
                                    >
                                        <?= csrf_field() ?>

                                        <button
                                            type="submit"
                                            class="btn-archive"
                                        >
                                            Archive
                                        </button>
                                    </form>
                                </div>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    <?php endif; ?>
</div>

<?= view('layouts/footer') ?>
