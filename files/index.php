<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>File handling exercise</title>
</head>
<body>
  <?php
    // Check if a file exists
    echo file_exists('testfile.txt') ? 'File exists <br>' : "File doesn't exists <br>";

    // Creating a new file
    $newFile = fopen('testfile.txt', 'r') or die('Failed to create file');

    // Write $text contents inside the file created
    // fwrite($newFile, $text) or die('Could not write to file');
    // echo "File testfile.txt written succesfully <br>";

    // Reads n number of character from the file
    $fileRead = fread($newFile, 10);
    echo "$fileRead <br>";

    // Read entire contents of a file
    echo file_get_contents('testfile.txt');

    // Close access to file
    fclose($newFile);

    // Create a copy of a file
    // copy('testfile.txt', 'testcopyfile.txt') or die('File could not be copied');

    // Move a file within the filesystem
    // rename('testcopyfile.txt', '../testcopyfile.txt') or die('The file could not be moved');

  ?>
</body>
</html>