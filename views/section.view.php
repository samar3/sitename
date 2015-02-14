<div class="row">

  <table class="table table-bordered table-hover table-striped">
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>DESCRIPTION</th>
      <th>UPDATE</th>
      <th>DELETE</th>
    </tr>

    <?php foreach ($sections as $section) :?>
    <tr>
      <th><?= $section['id']?></th>
      <th><?= $section['name']?></th>
      <th><?= $section['description']?></th>
      <th><a href="">Update</a></th>
      <th><a href="delete.php?id=<?= $section['id']?>">Delete</a></th>
    </tr>
   
    <?php endforeach; ?>
 

  </table>
</div>

<div class="row">
  <ul class="nav nav-pills">
    <li class="active">
      <a href="addSection.php">Add Sectione</a>
    </li>
  </ul>
</div>
