<div class="row">

  <table class="table table-bordered table-hover table-striped">
    <tr>
      <th>ID</th>
      <th>PICTURE</th>
      <th>TITLE</th>
      <th>UPDATE</th>
      <th>DELETE</th>
    </tr>

    <?php foreach ($sliders as $slider) :?>
    <tr>
      <th><?= $slider['id']?></th>
      <th><?= $slider['pic']?></th>
      <th><?= $slider['title']?></th>
      <th><a href="">Update</a></th>
      <th><a href="delete.php?id=<?= $slider['id']?>">Delete</a></th>
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
