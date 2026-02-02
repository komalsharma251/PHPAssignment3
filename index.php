<?php
// index.php (root of project)

require 'views/header.php';
?>

<div class="container mt-5">

    <!-- PAGE HEADER -->
    <div class="text-center mb-5">
        <h1 class="fw-bold display-4">SportsPro Technical Support</h1>
        <p class="lead text-muted">
            Product management and technical support system
        </p>
    </div>

    <!-- ADMINISTRATORS -->
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Administrators</h4>
        </div>
        <div class="card-body">
            <div class="list-group list-group-flush">
                <a href="views/admin/product_manager.php" class="list-group-item list-group-item-action">
                    Manage Products
                </a>
                <a href="views/admin/manage_technicians.php" class="list-group-item list-group-item-action">
                    Manage Technicians
                </a>
                <a href="views/customers/index.php" class="list-group-item list-group-item-action">
                    Manage Customers
                </a>
                <a href="views/incidents/create_incident.php" class="list-group-item list-group-item-action">
                    Create Incident
                </a>
                <a href="views/incidents/assign_incident.php" class="list-group-item list-group-item-action">
                    Assign Incident
                </a>
                <a href="views/incidents/index.php" class="list-group-item list-group-item-action">
                    Display Incidents
                </a>
            </div>
        </div>
    </div>

    <!-- TECHNICIANS -->
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-warning text-dark">
            <h4 class="mb-0">Technicians</h4>
        </div>
        <div class="card-body">
            <div class="list-group list-group-flush">
                <a href="views/technicians/update_incident.php" class="list-group-item list-group-item-action">
                    Update Incident
                </a>
            </div>
        </div>
    </div>

    <!-- CUSTOMERS -->
    <div class="card shadow-sm mb-5">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Customers</h4>
        </div>
        <div class="card-body">
            <div class="list-group list-group-flush">
                <a href="views/registrations/register_product.php" class="list-group-item list-group-item-action">
                    Register Product
                </a>
            </div>
        </div>
    </div>

</div>

<?php include 'views/footer.php'; ?>
