<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> 와인 리뷰 공간 </title>
</head>
<body>
    <h1> 와인 리뷰 </h1>
    <h3><a href="wine_select.php">(1) 와인 리뷰 전체 보기</a><br></h3>
    <a href="wine_select_country.php">- 나라 별 와인 </a><br>
    <a href="wine_select_variety.php">- 포도 품종 별 와인 </a><br>
    <a href="wine_select_winery.php">- 와이너리 별 와인 </a><br>
    <h3><a href="wine_insert.php">(2) 와인 리뷰 등록</a><br></h3>
    <h3><form action="wine_update.php" method="POST">
        (3) 와인 리뷰 수정:
        <input type="text" name="field_0" placeholder="리뷰 번호">
        <input type="submit" value="Search">
    </form></h3>
    <h3><form action="wine_delete.php" method="POST">
        (4) 와인 리뷰 삭제:
        <input type="text" name="field_0" placeholder="리뷰 번호">
        <input type="submit" value="Delete">
    </form></h3>  
</body>
</html>
