<?= $this->include('layouts/header') ?>

<h1 class="page-title"><?= esc($title) ?></h1>

<p class="page-description">
    View the registered customer information stored
    in our sample Point-of-Sale system.
</p>

<div class="card-grid">

    <div class="feature-card pink">
        <span>01 / OVERVIEW</span>
        <h2><?= count($customers) ?> Customers</h2>
        <p>Total customer records available.</p>
    </div>

    <div class="feature-card lavender">
        <span>02 / DATA SOURCE</span>
        <h2>Static Records</h2>
        <p>Customer information stored in a PHP array.</p>
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

    <table class="data-table">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= esc($customer['full_name']) ?></td>
                    <td><?= esc($customer['email']) ?></td>
                    <td><?= esc($customer['phone']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</section>

<?= $this->include('layouts/footer') ?>
