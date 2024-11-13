<?= $this->extend('layouts/mainlayout') ?>

<?= $this->section('content') ?> 
<main class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Master List</h1>
    
    <table id="table1" class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Purok</th>
            <th>Grupo</th>
            <th>Complete Address</th>
            <th>Contact Number </th>
            <th>Birthday</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php foreach($bata as $user): ?>
        <tr>
            <td><?= $user->id; ?></td>
            <td><?= $user->fullname; ?></td>
            <td><?= $user->completeaddress; ?></td>
            <td><?= $user->contactnumber; ?></td>
            <td><?= $user->birthday; ?></td>

            <td>
              <a href="<?= base_url().'PNK/edit/'.$user->id?>" class="btn btn-warning btn-sm" role="button">Edit</a>
              <a href="<?= base_url().'PNK/delete/'.$user->id?>" class="btn btn-danger btn-sm" role="button">Delete</a>
            </td>
        </tr>
      <?php endforeach; ?>        
    </tbody>
  </table>
  <a href="<?= base_url().'PNK/add' ?>" class="btn btn-primary" role="button">Register New User</a>
  </div>
</main>
<?= $this->endSection() ?>