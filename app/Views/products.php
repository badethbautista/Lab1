<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <style>/* Apply Bootstrap styles to form elements */
.form-group {
    margin-bottom: 15px;
}

/* Style the Save button */
.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

/* Style the table */
.table {
    width: 100%;
    margin-bottom: 1rem;
    color: #333;
}

.table th,
.table td {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}

.table thead th {
    background-color: #007bff;
    color: #fff;
    border-color: #007bff;
}

/* Style the Delete/Edit buttons */
.btn-danger,
.btn-primary.btn-sm {
    padding: 5px 10px;
    font-size: 14px;
}

.btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
}

.btn-danger:hover {
    background-color: #c82333;
    border-color: #bd2130;
}

.btn-primary.btn-sm {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary.btn-sm:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}
</style>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h2> </h2>
                <form action="/save" method="post">
                    <div class="form-group">
                        <label for="ProductName">Product Name:</label>
                        <input type="hidden" name="id" value="<?= isset($pro['id']) ? $pro['id'] : '' ?>">
                        <input type="text" class="form-control" name="ProductName" placeholder="Enter Product Name"
                            value="<?= isset($pro['ProductName']) ? $pro['ProductName'] : '' ?>">
                    </div>


                    <div class="form-group">
                        <label for="ProductDescription">Description:</label>
                        <input type="text" class="form-control" name="ProductDescription" placeholder="Enter Description"
                            value="<?= isset($pro['ProductDescription']) ? $pro['ProductDescription'] : '' ?>">
                    </div>

                    <div class="form-group">
                    <label for="ProductCategory">Category:</label>
                    <select class="form-control" name="ProductCategory">
                        <option value="Condiments" <?= (isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Condiments') ? 'selected' : '' ?>>Condiments</option>
                        <option value="Drinks" <?= (isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Drinks') ? 'selected' : '' ?>>Drinks</option>
                        <option value="Other" <?= (isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Other') ? 'selected' : '' ?>>Other</option>
                    </select>
                    </div>

                    <div class="form-group">
                        <label for="ProductQuantity">Quantity:</label>
                        <input type="text" class="form-control" name="ProductQuantity" placeholder="Enter Quantity"
                            value="<?= isset($pro['ProductQuantity']) ? $pro['ProductQuantity'] : '' ?>">
                    </div>

                    <div class="form-group">
                        <label for="ProductPrice">Price:</label>
                        <input type="text" class="form-control" name="ProductPrice" placeholder="Enter Price"
                            value="<?= isset($pro['ProductPrice']) ? $pro['ProductPrice'] : '' ?>">
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2> </h2>
                <table class="table table-bordered">
                    <thead class="thead-primary">
                        <tr>
                            <th>Product Name</th>
                            <th>Product Description</th>
                            <th>Product Category</th>
                            <th>Product Quantity</th>
                            <th>Product Price</th>
                            <th>Delete/Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($product as $pr): ?>
                            <tr>
                                <td><?= $pr['ProductName'] ?></td>
                                <td><?= $pr['ProductDescription'] ?></td>
                                <td><?= $pr['ProductCategory'] ?></td>
                                <td><?= $pr['ProductQuantity'] ?></td>
                                <td><?= $pr['ProductPrice'] ?></td>
                                <td>
                                    <a href="/delete/<?= $pr['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                                    <a href="/edit/<?= $pr['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>