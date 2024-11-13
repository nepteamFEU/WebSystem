<!-- Load the mainlayout file -->
<?= $this->extend('layouts/mainlayout') ?>

<!-- Specify the section to be loaded to the layout -->
<?= $this->section('content') ?>

<!-- Begin page content -->
<main class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Viewing Product Details</h1>
    
    <div class="row form-group mb-2">
        <label for="ProductName" class="col-form-label col-4">Product Name:</label>
        <div class="col-8">
            <span><?= $product->ProductName ?></span>
        </div>
    </div>
    <div class="row form-group mb-2">
        <label for="ProductAmount" class="col-form-label col-4">Product Amount:</label>
        <div class="col-8">
            <span><?= $product->ProductAmount ?></span>
        </div>
    </div>
    <div class="col-8">
        <a href="<?= site_url('products/index') ?>" class="btn btn-warning">Back to Product List</a>
    </div>
  </div>
</main>

<!-- END Begin page content -->
<?= $this->endSection('content') ?>
