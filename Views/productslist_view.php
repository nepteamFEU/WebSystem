<!-- Load the mainlayout file -->
<?= $this->extend('layouts/mainlayout') ?>

<!-- Specify the section to be loaded to the layout -->
<?= $this->section('content') ?> <!-- This is the start/open of the section -->

<!-- Begin page content -->
<main class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Products</h1>
    
    <table id="table1" class="table table-striped table-hover">
      <thead>
        <tr>
          <th>Product Name</th>
          <th>Product Amount</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($products as $product): ?> <!-- Use 'products' instead of 'users' -->
          <tr>
            <td><?= $product->ProductName; ?></td> <!-- Make sure this matches your database field -->
            <td><?= $product->ProductAmount; ?></td> <!-- Make sure this matches your database field -->
            <td>
              <a href="<?= base_url('products/view/'.$product->ProductID) ?>" class="btn btn-success btn-sm" role="button">View</a>
              <a href="<?= base_url('products/edit/'.$product->ProductID) ?>" class="btn btn-warning btn-sm" role="button">Edit</a>
              <a href="<?= base_url('products/delete/'.$product->ProductID) ?>" class="btn btn-danger btn-sm" role="button">Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>        
      </tbody>
    </table>
    <a href="<?= base_url('products/add') ?>" class="btn btn-primary" role="button">Add New Product</a>
  </div>
</main>

<!-- END Begin page content -->
<?= $this->endSection('content') ?>
