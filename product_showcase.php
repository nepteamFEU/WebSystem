<!-- Load the mainlayout file -->
<?= $this->extend('layouts/mainlayout') ?>

<!-- Specify the section to be loaded to the layout -->
<?= $this->section('content') ?>

<!-- Begin page content -->
<main class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Product Showcase</h1>

    <div class="row">
      <?php foreach ($products as $product): ?>
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <!-- Product Image -->
            <img 
              src="<?= esc($product->ProductImage) ?>" 
              class="card-img-top img-fluid" 
              style="aspect-ratio: 4/3; object-fit: cover;" 
              alt="<?= esc($product->ProductName) ?>"
            >

            <div class="card-body">
              <!-- Product Details -->
              <h5 class="card-title"><?= esc($product->ProductName) ?></h5>
              <p class="card-text">Price: ₱<?= esc($product->ProductPrice) ?></p>

              <!-- Quantity Input -->
              <form method="POST" action="<?= base_url('products/buy') ?>">
                <input type="hidden" name="ProductID" value="<?= esc($product->ProductID) ?>">
                <div class="input-group mb-3">
                  <input 
                    type="number" 
                    class="form-control" 
                    name="quantity" 
                    min="1" 
                    value="1"
                    placeholder="Quantity"
                    required>
                  <button type="submit" class="btn btn-primary">Buy Now</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Pagination Links -->
    <div class="d-flex justify-content-center">
      <?= $pager->links() ?>
    </div>
  </div>
</main>
<!-- END Begin page content -->

<?= $this->endSection('content') ?>
