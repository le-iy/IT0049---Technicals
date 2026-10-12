<?= $this->include('layouts/header') ?>

<h1 class="page-title"><?= esc($title) ?></h1>

<p class="page-description">
    View and manage the registered customer information
    stored in our Point-of-Sale system.
</p>

<div class="card-grid">

    <div class="feature-card pink">
        <span>01 / OVERVIEW</span>
        <h2><?= count($customers) ?> Customers</h2>
        <p>Total customer records available.</p>
    </div>

    <div class="feature-card lavender">
        <span>02 / DATA SOURCE</span>
        <h2>Database Records</h2>
        <p>Customer information retrieved from a MySQL database.</p>
    </div>

    <div class="feature-card blue">
        <span>03 / INFORMATION</span>
        <h2>Customer Details</h2>
        <p>Full names, email addresses, and phone numbers.</p>
    </div>

</div>

<br>

<section class="table-container">

    <h2>Customer Information</h2>

    <p class="page-description">
        View existing customers or register a new customer.
    </p>

    <div class="form-actions">
        <a href="<?= site_url('customers/new') ?>" class="btn-primary">
            + New Customer
        </a>
    </div>

    <br>

    <table class="data-table">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php if (! empty($customers)): ?>

                <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td><?= esc($customer['full_name']) ?></td>
                        <td><?= esc($customer['email']) ?></td>
                        <td><?= esc($customer['phone'] ?? 'N/A') ?></td>
                        <td>
                            <a
                                href="<?= site_url('customers/' . $customer['id'] . '/edit') ?>"
                                class="btn-secondary"
                            >
                                Edit
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            <?php else: ?>
                <tr>
                    <td colspan="4">
                        No customer records found.
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</section>

<?= $this->include('layouts/footer') ?>
