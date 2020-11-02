<?php
    $link = mysqli_connect('localhost', 'admin', 'admin', 'wine',"3308");
    if(isset($_GET['field_0'])){
        $filtered_id = mysqli_real_escape_string($link, $_GET['field_0']);
    } else {
        $filtered_id = mysqli_real_escape_string($link, $_POST['field_0']);        
    }
       $query = " SELECT * FROM wine_all WHERE field_0='{$filtered_id}' ";    
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>와인 리뷰 수정</title>
</head>
<body>
<h2><a href="index.php">와인 리뷰</a> | 와인 리뷰 수정</h2>
    <form action="wine_update_process.php" method="POST">
        <label>리뷰 번호:</label>
        <input type="number" name="field_0" value="<?=$row['field_0']?>" placeholder="field_0"><br>
        <label>와인 생산지:</label>
        <input type="text" name="country" value="<?=$row['country']?>" placeholder="country"><br>
        <label>리뷰:</label>
        <input type="text" name="description" value="<?=$row['description']?>" placeholder="description"><br>
        <label>포도 원산지:</label>
        <input type="text" name="designation" value="<?=$row['designation']?>" placeholder="designation"><br>
        <label>점수:(0.0~10.0)</label>
        <input type="text" name="points" value="<?=$row['points']?>" placeholder="points"><br>
        <label>가격:</label>
        <input type="text" name="price" value="<?=$row['price']?>" placeholder="price"><br>
        <label>원산지:</label>
        <input type="text" name="region_1" value="<?=$row['region_1']?>" placeholder="region_1"><br>
        <label>상세 원산지:</label>
        <input type="text" name="region_2" value="<?=$row['region_2']?>" placeholder="region_2"><br>
        <label>포도 품종:</label>
        <input type="text" name="variety" value="<?=$row['variety']?>" placeholder="variety"><br>
        <label>제작 와이너리:</label>
        <input type="text" name="winery" value="<?=$row['winery']?>" placeholder="winery"><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
