<!-- Load the mainlayout file -->
<?= $this->extend('layouts/mainlayout') ?>

<!-- Specify the section to be loaded to the layout -->
<?= $this->section('content') ?> <!--this is the start/open of the section-->

<!-- Begin page content -->
<main class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Editing User Details</h1>

    <?php if(isset($errors)): ?>
        <div class="alert alert-danger" role="alert">
            <?= $errors->listErrors() ?>
        </div>
        <?php endif ?> 
    
    <form method="post" action="<?= site_url('users/edit/' . $user->id) ?>">
            <div class="row form-group mb-2">
                <label for="username" class="col-form-label col-4">User Name</label>
                <div class="col-8">
                    <input type="text" name="username" id="username" class="form-control" value="<?= $user->username ?>" >
                </div>
            </div>
            <div class="row form-group mb-2">
                <label for="username" class="col-form-label col-4">Password</label>
                <div class="col-8">
                    <input type="password" name="password" id="password" class="form-control"value="<?= $user->password ?>" >
                </div>
            </div>
            <div class="row form-group mb-2">
                <label for="fullname" class="col-form-label col-4">Full Name</label>
                <div class="col-8">
                    <input type="text" name="fullname" id="fullname" class="form-control"value="<?= $user->fullname ?>">
                </div>
            </div>
            <div class="row form-group mb-2">
                <label for="email" class="col-form-label col-4">Email</label>
                <div class="col-8">
                    <input type="email" name="email" id="email" class="form-control"value="<?= $user->email ?>">
                </div>
            </div>
            <div class="row form-group d-flex justify-content-between">
                <a href="<?= site_url('users') ?>" class="btn btn-warning col-5">Back</a>
                <!-- Add a submit button for updating the user record -->   
                <button type="submit" class="btn btn-primary col-5">Update</button>
            </div>

   </form>
    
 


  </div>
</main>

<!--END  Begin page content -->
<?= $this->endSection('content') ?>