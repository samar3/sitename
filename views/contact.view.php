<div class="row">

  <table class="table table-bordered table-hover table-striped">
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>EMAIL</th>
      <th>MESSAGE</th>
      <th>UPDATE</th>
      <th>DELETE</th>
    </tr>

    <?php foreach ($contacts as $contact) :?>
    <tr>
      <th><?= $contact['id']?></th>
      <th><?= $contact['name']?></th>
      <th><?= $contact['mail']?></th>
      <th><?= $contact['msg']?></th>
      <th><a href="">Update</a></th>
      <th><a href="deleteContact.php?id=<?= $contact['id']?>">Delete</a></th>
    </tr>
   
    <?php endforeach; ?>
 

  </table>
</div>

<div class="row">
  <ul class="nav nav-pills">
    <li class="active">
      <a href="addContact.php">Add Contact</a>
    </li>
  </ul>
</div>
