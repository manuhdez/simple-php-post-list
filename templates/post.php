<div class="post">
  <h3><?php echo $title ?></h3>
  <p><?php echo $author ?></p>
  <p><?php echo $year ?></p>
  <form action="index.php" method="post" class="delete-form">
    <input type="text" class="hidden" name="delete" value="<?php echo $id ?>">
    <input type="submit" value="X" class="delete-button">
  </form>
</div>
