<?= $this->extend('layouts/mainlayout') ?>
<?= $this->section('content') ?>

<main class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Login Screen</h1>

    <?php if(isset($errors)): ?>
        <div class="alert alert-danger" role="alert">
            <?= $errors->listErrors() ?>
        </div>
    <?php endif ?> 

    
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
        </div>
        
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>
        
        <div>
            <button type="submit" class="btn btn-primary mt-3">Login</button>
        </div>
    
  </div>
</main>

<?= $this->endSection() ?>
