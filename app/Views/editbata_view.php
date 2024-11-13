<!-- Load the mainlayout file -->
<?= $this->extend('layouts/mainlayout') ?>

<!-- Specify the section to be loaded to the layout -->
<?= $this->section('content') ?> <!--this is the start/open of the section-->

<!-- Begin page content -->
<main class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Edit Record</h1>

      <!-- Show validation errors -->
        <?php if(isset($errors)): ?>
        <div class="alert alert-danger" role="alert">
            <?= $errors->listErrors() ?>
        </div>
        <?php endif ?>

    
    <form method="post" action="<?= site_url('PNK/edit/' . $user->id) ?>">
            <div class="row form-group mb-2">
                <label for="fullname" class="col-form-label col-4">Full Name</label>
                <div class="col-8">
                    <input type="text" name="fullname" id="fullname" class="form-control" value="<?= $user->fullname ?>"?>>
                </div>
            </div>
            <div class="row form-group mb-2">
                <label for="fullname" class="col-form-label col-4">Purok</label>
                <div class="col-8">
                    <input type="number" name="purok" id="purok" class="form-control"value="<?= $user->purok ?>"?>>
                </div>
            </div>
            <div class="row form-group mb-2">
                <label for="fullname" class="col-form-label col-4">Grupo</label>
                <div class="col-8">
                    <input type="number" name="grupo" id="grupo" class="form-control"value="<?= $user->grupo ?>"?>>
                </div>
            </div>
            <div class="row form-group mb-2">
                <label for="completeaddress" class="col-form-label col-4">Complete Address</label>
                <div class="col-8">
                    <input type="text" name="completeaddress" id="completeaddress" class="form-control" value="<?= $user->completeaddress ?>">
                </div>
            </div>
            <div class="row form-group mb-2">
                <label for="contactnumber" class="col-form-label col-4">Contact Number</label>
                <div class="col-8">
                    <input type="text" name="contactnumber" id="contactnumber" class="form-control" value="<?= $user->contactnumber ?>">
                </div>
            </div>
            <div class="row form-group mb-2">
                <label for="birthday" class="col-form-label col-4">Birthday</label>
                <div class="col-8">
                    <input type="text" name="birthday" id="birthday" class="form-control" value="<?= $user->birthday ?>">
                </div>
            </div>
            <div class="row form-group d-flex justify-content-between">
                <button type="submit" class="btn btn-success col-5">Register</button>
                <a href="<?= base_url() ?>" class="btn btn-warning col-5" >Back</a>
            </div>
    </form>
    



  </div>
</main>

<!--END  Begin page content -->
<?= $this->endSection('content') ?>