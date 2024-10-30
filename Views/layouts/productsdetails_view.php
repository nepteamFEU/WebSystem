<!-- Load the mainlayout file -->
<?= $this->extend('layouts/mainlayout') ?>

<!-- Specify the section to be loaded to the layout -->
<?= $this->section('content') ?> <!--this is the start/open of the section-->

<!-- Begin page content -->
<main class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Product details</h1>
    
    <form method="post">
            <div class="row form-group mb-2">
                <label for="username" class="col-form-label col-4">User Name</label>
                <div class="col-8">
                    <input type="text" name="username" id="username" class="form-control"value="<?= $user->username ?>" readonly>
                </div>
            </div>
            <div class="row form-group mb-2">
                <label for="fullname" class="col-form-label col-4">Full Name</label>
                <div class="col-8">
                    <input type="text" name="fullname" id="fullname" class="form-control"value="<?= $user->fullname ?>" readonly>
                </div>
            </div>
            <div class="row form-group mb-2">
                <label for="email" class="col-form-label col-4">Email</label>
                <div class="col-8">
                    <input type="email" name="email" id="email" class="form-control"value="<?= $user->email ?>" readonly>
                </div>
            </div>
            <div class="row form-group d-flex justify-content-between">
                <a href="<?= base_url() ?>" class="btn btn-warning col-5" >Back</a>
            </div>
   </form>
    
 


  </div>
</main>

<!--END  Begin page content -->
<?= $this->endSection('content') ?>