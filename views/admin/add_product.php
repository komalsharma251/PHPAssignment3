<?php
// Include database connection
require '../../db/database.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $productCode = trim($_POST['productCode'] ?? '');
    $name        = trim($_POST['name'] ?? '');
    $version     = trim($_POST['version'] ?? '');
    $releaseDate = trim($_POST['releaseDate'] ?? '');

    //  SERVER-SIDE validation
    if (
        $productCode === '' ||
        $name === '' ||
        $version === '' ||
        $releaseDate === ''
    ) {
        header('Location: ../error.php');
        exit;
    }

    $sql = "INSERT INTO products (productCode, name, version, releaseDate)
            VALUES ('$productCode', '$name', '$version', '$releaseDate')";

    $db->exec($sql);

    //  Redirect to Product List
    header('Location: product_manager.php');
    exit;
}

include '../header.php'; // Include the header file
?>



<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h3>Add Product</h3>
        </div>
        <div class="card-body">

            <form method="post">
                <div class="mb-3">
                    <label>Product Code</label>
                    <input type="text" name="productCode" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Version</label>
                    <input type="text" name="version" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Release Date</label>
                    <input type="date" name="releaseDate" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success">
                    Add Product
                </button>

                <a href="product_manager.php" class="btn btn-secondary ms-2">
                    View Product List
                </a>
            </form>

        </div>
    </div>
</div>

<?php include '../footer.php'; ?>
