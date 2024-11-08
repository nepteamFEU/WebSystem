<?= $this->extend('layouts/mainlayout') ?>
<?= $this->section('content') ?>

<div class="col col-md-3 mx-auto mt-5">
    <h3><?= $page_title; ?></h3>

    <?php if (session()->get('nouser')): ?>
        <div class="alert alert-danger" role="alert">
            <?= session()->get('nouser') ?>
        </div>
    <?php endif ?>

    <form action="<?= base_url().'users/login' ?>" method="post">
        <div class="row form-group mb-2">
            <label for="username" class="col-form-label col-4">Username</label>
            <div class="col-8">
                <input type="text" name="username" class="form-control" value="<?= set_value('username') ?>">
            </div>
        </div>
        <div class="row form-group mb-2">
            <label for="password" class="col-form-label col-4">Password</label>
            <div class="col-8">
                <input type="password" name="password" id="password" class="form-control">
            </div>
        </div>
        <div class="row form-group d-flex justify-content-between">
            <button type="submit" class="btn btn-success col-5">Log-In</button>
            <a href="<?= base_url().'users/add' ?>" class="btn btn-warning col-5">Register</a>
        </div>
    </form>
</div>
<?= $this->endSection('content') ?>
