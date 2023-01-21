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

  require_once('Post.php');

  function readPostsFromJson()
  {
    $POSTS_FILE_NAME = "data.json";
    $data = file_get_contents($POSTS_FILE_NAME);
    $posts = json_decode($data);
    return $posts;
  }

  $json = readPostsFromJson();

  foreach ($json as $post) {
    print_r($post);
    $post = new Post($post->date, $post->post);
    // array_push($posts, $post);

    echo "<div class ='card'>";
    echo "<div class ='dttm'>" . $post->getDatetime() . "</br></div>";
    echo "<div class ='post'>" . $post->getPost() . "</br></div>";
    echo "</div>";
  }

  
  ?>
</body>

</html>