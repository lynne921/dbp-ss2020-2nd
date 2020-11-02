<?php
  $link = mysqli_connect('localhost', 'admin', 'admin', 'wine');
  $query = "SELECT * FROM wine_all ORDER BY field_0 DESC LIMIT 20";
  $result = mysqli_query($link, $query);  
  $wine_info = '';
  
  if (isset($_GET['winery'])) {
    $winery = mysqli_real_escape_string($link, $_GET['winery']);
    $query = "SELECT * FROM wine_all WHERE winery = '{$winery}'"; } 

    $result = mysqli_query($link, $query);  

  while($row = mysqli_fetch_array($result)){
    $wine_info .= '<tr>';
    $wine_info .= '<td>'.$row['field_0'].'</td>';
    $wine_info .= '<td>'.$row['country'].'</td>';
    $wine_info .= '<td>'.$row['description'].'</td>';
    $wine_info .= '<td>'.$row['designation'].'</td>';
    $wine_info .= '<td>'.$row['points'].'</td>';
    $wine_info .= '<td>'.$row['price'].'</td>';  
    $wine_info .= '<td>'.$row['province'].'</td>';
    $wine_info .= '<td>'.$row['region_1'].'</td>';
    $wine_info .= '<td>'.$row['region_2'].'</td>';
    $wine_info .= '<td>'.$row['variety'].'</td>';  
    $wine_info .= '<td>'.$row['winery'].'</td>'; 
    $wine_info .= '<td><a href="wine_update.php?field_0='.$row['field_0'].'">update</a></td>';  
    $wine_info .= '<td><a href="wine_delete.php?field_0='.$row['field_0'].'">delete</a></td>';
    $wine_info .= '</tr>';
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>와인 리뷰 공간</title>
</head>
<body>
    <h2><a href="index.php">와인 리뷰</a> | 나라 별 와인</h2>

    <form action = "wine_select_winery.php" method = "GET">
        <select name="winery">   
            <?php
                    $sql = "SELECT DISTINCT winery FROM wine_all
                    ORDER BY winery;";

                    $result = mysqli_query($link, $sql);
                    while ($result_array = mysqli_fetch_array($result)){
                        print "<option value='".$result_array['winery']."' ";
                        print ">".$result_array['winery']."</option>\n";
                    }
            ?>
        </select>
        <button type="submit">확인</button>
    </form>

    <table border="1">
        <tr>
            <th>와인 번호</th>
            <th>country</th>
            <th>description</th>
            <th>designation</th>
            <th>points</th>
            <th>price</th>
            <th>province</th>
            <th>region_1</th>
            <th>region_2</th>
            <th>variety</th>
            <th>winery</th>
        </tr>
        <?= $wine_info ?>
    </table>
</body>
</html>
