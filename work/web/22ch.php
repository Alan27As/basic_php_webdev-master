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

$POSTS_FILE_NAME = "data.json";
$data = file_get_contents($POSTS_FILE_NAME);
// print_r($data);
$posts = json_decode($data);
print_r($posts);

// require_once("./Post.php");

// $posts = readPostsFromJson($POSTS_FILE_NAME);
// print_r($POSTS_FILE_NAME);

// function readPostsFromJson()
// {
//   $posts[0] = new Post('100万人突破するまで生配信！');
//   $posts[1] = new Post('頼む！行かないでくれ！');
//   $posts[2] = new Post('登録即解除とかしたらどうなるん');
//   $posts[3] = new Post('お前らは大嫌いだろうけど素直に凄いわ');

//   return $posts;
// }

// $data_file_name = "data.json";
// $data = file_get_contents($data_file_name);
// $posts = json_decode($data, true);

foreach($posts as $post) {
  echo "<div class ='card'>";
  echo "<div class ='dttm'>" . $post->date . "</br></div>";
  echo "<div class ='post'>" . $post->post . "</br></div>";
  echo "</div>";
  }


  ?>
  <!-- <h3>以上がポストです</h3> -->
</body>

</html>