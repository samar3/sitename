<div class="row">

  <table class="table table-bordered table-hover table-striped">
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>JOB</th>
      <th>PICTURE</th>
      <th>ABOUT</th>
      <th>UPDATE</th>
      <th>DELETE</th>
    </tr>

    <?php foreach ($teams as $team) :?>
    <tr>
      <th><?= $team['id']?></th>
      <th><?= $team['name']?></th>
      <th><?= $team['job']?></th>
      <th><?= $team['pic']?></th>
      <th><a href="team.php?id=<?= $team['id']?>">About</a></th>
      <th><a href="">Update</a></th>
      <th><a href="delete.php?id=<?= $team['id']?>">Delete</a></th>
    </tr>
   
    <?php endforeach; ?>
 

  </table>
</div>

<div class="row">
  <ul class="nav nav-pills">
    <li class="active">
      <a href="add.php">Add Article</a>
    </li>
  </ul>
</div>
