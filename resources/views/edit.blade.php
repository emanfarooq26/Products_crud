<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>

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
            background: linear-gradient(45deg, #f6c23e, #dda20a);
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
                        <i class="bi bi-pencil-square"></i> Edit Product
                    </h4>
                </div>

                <div class="card-body p-4">

                    <form action="{{ route('products.update', $product->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                <i class="bi bi-box"></i> Name
                            </label>
                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   placeholder="Enter Name"
                                   value="{{ $product->name }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                <i class="bi bi-card-text"></i> Description
                            </label>
                            <input type="text"
                                   name="description"
                                   class="form-control"
                                   placeholder="Enter Description"
                                   value="{{ $product->description }}">
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold">
                                <i class="bi bi-currency-dollar"></i> Price
                            </label>
                            <input type="text"
                                   name="price"
                                   class="form-control"
                                   placeholder="Enter Price"
                                   value="{{ $product->price }}">
                        </div>

                        <div class="d-flex justify-content-between">

                            <a href="{{ route('products.table') }}"
                               class="btn btn-secondary">
                                <i class="bi bi-arrow-left"></i> Back
                            </a>

                            <button type="submit"
                                    class="btn btn-warning text-white">
                                <i class="bi bi-check-circle"></i> Update Product
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>

</html>