<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>File uploading</title>
</head>
<body>
  <form
    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
    method="post"
    enctype="multipart/form-data"
  >
    Select file: <input type="file" name="image" size="10">
    <input type="submit" value="Upload">
  </form>
  <?php
    // File uploading
    if ($_FILES) {
      $name = $_FILES['image']['name'];
      move_uploaded_file($_FILES['image']['tmp_name'], "../images/$name");
      echo "Uploaded image '$name'<br><img src='$name'>";
    }
  ?>
</body>
</html>