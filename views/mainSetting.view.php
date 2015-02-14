<div class="row">

  <table class="table table-bordered table-hover table-striped">
    <tr>
      <th>ID</th>
      <th>SITENAME</th>
      <th>COPYRIGHT</th>
      <th>UPDATE</th>
      <th>DELETE</th>
    </tr>

    <?php foreach ($mainSettings as $mainSetting) :?>
    <tr>
      <th><?= $mainSetting['id']?></th>
      <th><?= $mainSetting['siteName']?></th>
      <th><?= $mainSetting['copyRight']?></th>
      <th><a href="">Update</a></th>
      <th><a href="delete.php?id=<?= $mainSetting['id']?>">Delete</a></th>
    </tr>

    <?php endforeach; ?>
 

  </table>
</div>

<div class="row">
  <ul class="nav nav-pills">
    <li class="active">
      <a href="addMainSetting.php">Add MainSetting</a>
    </li>
  </ul>
</div>
