<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>

</head>

<body>
  <?php

  $json = file_get_contents("posts.json");

  $posts = json_decode($json, true);
  print_r($posts);

  foreach ($posts as $post) {
    echo "<div class ='card'>";
    echo "<div class ='dttm'>" . $post["date"] . "</br></div>";
    echo "<div class ='post'>" . $post["post"] . "</br></div>";
    echo "</div>";
  }
  ?>
</body>

</html>