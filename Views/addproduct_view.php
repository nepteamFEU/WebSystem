<!-- Load the mainlayout file -->
<?= $this->extend('layouts/mainlayout') ?>

<!-- Specify the section to be loaded to the layout -->
<?= $this->section('content') ?> <!--this is the start/open of the section-->

<!-- Begin page content -->
<main class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Sticky footer with fixed navbar</h1>
    
    <form action="<?= base_url().'products/add' ?>" method="post">
            <div class="row form-group mb-2">
                <label for="ProductName" class="col-form-label col-4">Product Name</label>
                <div class="col-8">
                    <input type="text" name="ProductName" id="ProductName" class="form-control">
                </div>
            </div>
            <div class="row form-group mb-2">
                <label for="ProductAmount" class="col-form-label col-4">Product Amount</label>
                <div class="col-8">
                    <input type="number" name="ProductAmount" id="ProductAmount" class="form-control">
                </div>
            </div>
            <div class="row form-group d-flex justify-content-between">
                <button type="submit" class="btn btn-success col-5">Register</button>
                <a href="<?= base_url('products') ?>" class="btn btn-warning col-5" >Back</a>
            </div>
    </form>
    



  </div>
</main>

<!--END  Begin page content -->
<?= $this->endSection('content') ?>