<?php
$link = mysqli_connect('localhost', 'admin', 'admin', 'wine');

$field_0 = $_POST[ 'field_0' ];
$country = $_POST[ 'country' ];
$description = $_POST[ 'description' ];
$designation = $_POST[ 'designation' ];
$points = $_POST[ 'points' ];
$price = $_POST[ 'price' ];
$region_1 = $_POST[ 'region_1' ];
$region_2 = $_POST[ 'region_2' ];
$variety = $_POST[ 'variety' ];
$winery = $_POST[ 'winery' ];

$query = "
        INSERT INTO wine_all (
            field_0, country, description, designation, points, price,
            region_1, region_2, variety, winery
        ) VALUES (
            '$field_0', '$country', '$description', '$designation',
            '$points', '$price', '$region_1', '$region_2',
            '$variety', '$winery');";

$result = mysqli_query($link, $query);

if ($result == false) {
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요.';
    error_log(mysqli_error($link));
} else {
    echo '성공하였습니다. <a href="wine_insert.php">돌아가기</a>';
}
