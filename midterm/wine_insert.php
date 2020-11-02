<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>와인 리뷰 공간</title>
</head>
<body>
<h2><a href="index.php">와인 리뷰</a> | 와인 리뷰 등록</h2>
    <form action="wine_insert_process.php" method="POST">
        <label>리뷰 번호:</label>
        <input type="number" name="field_0" value="<?=$row['field_0']?>" placeholder="field_0"><br>
        <label>와인 생산지:</label>
        <input type="text" name="country" placeholder="country" ><br>
        <label>리뷰:</label>
        <input type="text" name="description" placeholder="description"><br>
        <label>포도 원산지:</label>
        <input type="text" name="designation" placeholder="designation"><br>
        <label>점수:(0.0~10.0)</label>
        <input type="double" name="points" placeholder="points"><br>
        <label>가격:</label>
        <input type="text" name="price" placeholder="price"><br>
        <label>원산지:</label>
        <input type="text" name="region_1" placeholder="region_1"><br>
        <label>상세 원산지:</label>
        <input type="text" name="region_2" placeholder="region_2"><br>
        <label>포도 품종:</label>
        <input type="text" name="variety" placeholder="variety"><br>
        <label>제작 와이너리:</label>
        <input type="text" name="winery" placeholder="winery"><br>
        <input type="submit" value="Create">
    </form>
</body>
</html>
