<?php 

require_once("../../model/Person.php");
include_once("../_partials/header.php"); 

$person = new Person();
?>
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
  <tbody>
    <?php foreach ($person->list() as $p): ?>
        <tr>
            <th scope="row"><?=$p->id?></th>
            <th><?=$p->name?></th>
            <th><?=$p->age?></th>
        </tr>
    <?php endforeach ?>
  </tbody>
</table>
<?php include_once("../_partials/footer.php"); ?>