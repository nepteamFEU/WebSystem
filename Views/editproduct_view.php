    <!-- Load the mainlayout file -->
<?= $this->extend('layouts/mainlayout') ?>

<!-- Specify the section to be loaded to the layout -->
<?= $this->section('content') ?> <!--this is the start/open of the section-->

<!-- Begin page content -->
<main class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Editing Product Details</h1>

    <?php if(isset($errors)): ?>
        <div class="alert alert-danger" role="alert">
            <?= $errors->listErrors() ?>
        </div>
        <?php endif ?> 
    
    <form method="post" action="<?= site_url('products/edit/' . $product->ProductID) ?>">
            <div class="row form-group mb-2">
                <label for="ProductName" class="col-form-label col-4">Product Name</label>
                <div class="col-8">
                    <input type="text" name="ProductName" id="ProductName" class="form-control"value="<?= $product->ProductName ?>" >
                </div>
            </div>
            <div class="row form-group mb-2">
                <label for="ProductAmount" class="col-form-label col-4">Product Amount</label>
                <div class="col-8">
                    <input type="number" name="ProductAmount" id="ProductAmount" class="form-control"value="<?= $product->ProductAmount ?>" >
                </div>
            </div>
            <div class="row form-group d-flex justify-content-between">
                <a href="<?= site_url('products/index') ?>" class="btn btn-warning col-5">Back</a>
                <button type="submit" class="btn btn-primary col-5">Update</button>
            </div>
   </form>
  </div>
</main>

<!--END  Begin page content -->
<?= $this->endSection('content') ?>