<?= view('layouts/header', ['title' => $title]) ?>

<h1 class="page-title">Edit Task</h1>

<p class="page-description">
    Update an existing task's details.
</p>

<div class="card">
    <h2>Task Information</h2>

    <form
        method="post"
        action="<?= site_url('tasks/' . $task['id'] . '/update') ?>"
    >
        <?= csrf_field() ?>

        <div class="form-group">
            <label for="title">Task Title</label>
            <input
                type="text"
                id="title"
                name="title"
                value="<?= esc(old('title', $task['title'])) ?>"
            >
            <div class="form-error">
                <?= validation_show_error('title') ?>
            </div>
        </div>

        <div class="form-group">
            <label for="task_date">Task Date</label>
            <input
                type="date"
                id="task_date"
                name="task_date"
                value="<?= esc(old('task_date', $task['task_date'])) ?>"
            >
            <div class="form-error">
                <?= validation_show_error('task_date') ?>
            </div>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select id="status" name="status">
                <option value="pending"
                    <?= old('status', $task['status']) === 'pending' ? 'selected' : '' ?>>
                    Pending
                </option>
                <option value="done"
                    <?= old('status', $task['status']) === 'done' ? 'selected' : '' ?>>
                    Done
                </option>
            </select>
            <div class="form-error">
                <?= validation_show_error('status') ?>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-primary">
                Update Task
            </button>

            <a href="<?= site_url('tasks') ?>" class="btn-secondary">
                Cancel
            </a>
        </div>
    </form>
</div>

<?= view('layouts/footer') ?>
