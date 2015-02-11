<div class="row">

  <table class="table table-bordered table-hover table-striped">
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>USERNAME</th>
      <th>PASSWORD</th>
      <th>UPDATE</th>
      <th>DELETE</th>
    </tr>
    <?php foreach ($admins as $admin) :?>
    <tr>
      <th><?= $admin['id']?></th>
      <th><?= $admin['name']?></th>
       <th><?= $admin['username']?></th>
      <th><?= $admin['password']?></th>
      <th><a href="">Update</a></th>
      <th><a href="delete.php?id=<?= $admin['id']?>">Delete</a></th>
    </tr>
    <?php endforeach; ?>
  </table>
</div>

<div class="row">
  <ul class="nav nav-pills">
    <li class="active">
      <a href="addAdmin.php">Add Admin</a>
    </li>
  </ul>
</div>
