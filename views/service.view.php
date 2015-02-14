<div class="row">

  <table class="table table-bordered table-hover table-striped">
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>BODY</th>
      <th>PICTURE</th>
      <th>UPDATE</th>
      <th>DELETE</th>
    </tr>
    <?php foreach ($services as $service) :?>
    <tr>
      <th><?= $service['id']?></th>
      <th><?= $service['name']?></th>
      <th><?= $service['body']?><a href=".php?id=<?= $service['id']?>">view </a></th>
      <th><?= $service['pic']?></th>
      <th><a href="">Update</a></th>
      <th><a href="delete.php?id=<?= $service['id']?>">Delete</a></th>
    </tr>
    <?php endforeach; ?>
  </table>
</div>

<div class="row">
  <ul class="nav nav-pills">
    <li class="active">
      <a href="addService.php">Add Service</a>
    </li>
  </ul>
</div>
