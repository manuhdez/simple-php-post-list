<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <h1>Blog store</h1>
  <hr>
  <form action="index.php" method="post">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" placeholder="Post title">
    <label for="author">Author</label>
    <input type="text" name="author" id="author" placeholder="Post author">
    <label for="year">Year</label>
    <input type="text" name="year" id="year" placeholder="Post year">
    <input type="submit" value="Store">
  </form>
  <hr>
  <h2>Posts</h2>
  <div class="post-container">
    <?php

      // Require composer dependencies
      require 'vendor/autoload.php';

      $connection = new MongoDB\Client();
      $db = $connection->php_blog;
      $blog_store = $db->posts;

      // Check if user has sent required data to create a new post
      if (isset($_POST["title"]) && isset($_POST["author"]) && isset($_POST["year"])) {

        // Create a new post object with the data sent by the user
        $newPost = array(
          "title" => $_POST["title"],
          "author" => $_POST["author"],
          "year" => $_POST["year"]
        );

        // Save the new post object into the database
        $blog_store->insertOne($newPost);
      }

      // Find all posts and render them into the page
      $posts = $blog_store->find();

      foreach ($posts as $key => $value) {
        $title = $value["title"];
        $author = $value["author"];
        $year = $value["year"];
        include "templates/post.php";
      }
    ?>
  </div>
</body>
</html>