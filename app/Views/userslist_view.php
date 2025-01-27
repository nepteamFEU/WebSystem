<!-- Load the mainlayout file -->
<?= $this->extend('layouts/mainlayout') ?>

<!-- Specify the section to be loaded to the layout -->
<?= $this->section('content') ?> <!--this is the start/open of the section-->

<!-- Begin page content -->
<main class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">User List</h1>
    
    <table id="table1" class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>Password</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Action</th>
            
        </tr>
    </thead>
    <tbody>
      <?php foreach($users as $user): ?>
        <tr>
            <td><?= $user->id; ?></td> <!-- $user['id'] -->
            <td><?= $user->username; ?></td>
            <td><?= $user->password; ?></td>
            <td><?= $user->fullname; ?></td>
            <td><?= $user->email; ?></td>
            <td>
              <a href="<?= base_url().'users/view/'.$user->id?>" class="btn btn-success btn-sm" role="button">View</a>
              <a href="<?= base_url().'users/edit/'.$user->id?>" class="btn btn-warning btn-sm" role="button">Edit</a>
              <a href="<?= base_url().'users/delete/'.$user->id?>" class="btn btn-danger btn-sm" role="button">Delete</a>
            </td>
        </tr>
      <?php endforeach; ?>        
    </tbody>
  </table>
  
  <a href="<?= base_url().'users/add' ?>" class="btn btn-primary" role="button">Register New User</a>
  <a href="<?= base_url().'users/logout' ?>" class=" btn btn-danger btn-sm" role = "button"> Logout </a>
  </div>
</main>

<!--END  Begin page content -->
<?= $this->endSection() ?>