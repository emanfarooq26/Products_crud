<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: #f5f7fb;
        }

        .card {
            border: none;
            border-radius: 12px;
        }

        .card-header {
            background: linear-gradient(45deg, #4e73df, #224abe);
            border-radius: 12px 12px 0 0 !important;
        }

        .form-control {
            border-radius: 8px;
        }

        .btn {
            border-radius: 8px;
        }
    </style>

</head>

<body>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card shadow-lg">

                <div class="card-header text-white">
                    <h4 class="mb-0">
                        <i class="bi bi-plus-circle"></i> Add Product
                    </h4>
                </div>

                <div class="card-body p-4">

                    <form action="<?php echo e(route('products.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                <i class="bi bi-person"></i> Name
                            </label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                <i class="bi bi-card-text"></i> Description
                            </label>
                            <input type="text" name="description" class="form-control" placeholder="Enter Description">
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold">
                                <i class="bi bi-currency-dollar"></i> Price
                            </label>
                            <input type="text" name="price" class="form-control" placeholder="Enter Price">
                        </div>

                        <div class="d-flex justify-content-between">

                            <a href="<?php echo e(route('products.table')); ?>" class="btn btn-secondary">
                                <i class="bi bi-arrow-left"></i> Back
                            </a>

                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-check-circle"></i> Save Product
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\new-app\resources\views/form.blade.php ENDPATH**/ ?>