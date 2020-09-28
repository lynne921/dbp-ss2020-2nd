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
  $update_link = '';
  $delete_link = '';
  $author = '';

  if( isset($_GET['id'])) {
    $filtered_id = mysqli_real_escape_string($link, $_GET['id']);
    $query = "SELECT * FROM topic LEFT JOIN author ON topic.author_id = author.id WHERE topic.id={$filtered_id}";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    print_r($row);
    $article['title'] = htmlspecialchars($row['title']);
    $article['description'] = htmlspecialchars($row['description']);
    $article['name'] = htmlspecialchars($row['name']);
    $author = "<p>by {$article['name']}</p>";
    $update_link = '<a href="update.php?id='.$_GET['id'].'">update</a>';
    $delete_link = '
      <form action="process_delete.php" method="POST">
        <input type="hidden" name="id" value="'.$_GET['id'].'">
        <input type="submit" value="delete">
      </form>
      ';
  }
?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>게임 공유</title>
   </head>
   <body>
      <h1><a href="index.php">게임 후기</a></h1>
      <a href="author.php">author</a>
      <ol><?= $list ?></ol>
      <a href="create.php">create</a>
      <?= $update_link ?>
      <?= $delete_link ?>
      <h2><?= $article['title'] ?></h2>
      <?= $article['description'] ?>
      <?= $author ?>
    </body>
   </html>
