<?php
  $link = mysqli_connect('localhost','root','rootroot','dbp');
  $query = "SELECT * FROM topic";
  $result = mysqli_query($link, $query);
  $list ='';
  while ($row = mysqli_fetch_array($result)) {
    $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
  }

  $article = array(
    'title' => '안녕하세요~',
    'description' => '게임 후기를 쓰는 공간입니다. 자유롭게 써주세요.'
  );

  if( isset($_GET['id'])) {
    $query = "SELECT * FROM topic WHERE id={$_GET['id']}";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    $article = array(
      'title' => $row['title'],
      'description' => $row['description']
    );
  }

 ?>



 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>게임 공유</title>
   </head>
   <body>
     <h1>게임 목록</h1>
     <ol><?= $list ?></ol>
     <a href="create.php">create</a>
     <h2><?= $article['title'] ?></h2>
     <?= $article['description'] ?>
   </body>
 </html>
