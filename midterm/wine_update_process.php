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
        UPDATE wine_all
        SET
            country = '$country',
            description = '$description',
            designation = '$designation',
            points = '$points',
            price = '$price',
            region_1 = '$region_1',
            region_2 = '$region_2',
            variety = '$variety',
            winery = '$winery'
        WHERE
        field_0 = '$field_0';
    ";

$result = mysqli_query($link, $query);

if ($result == false) {
    echo '수정하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요.';
    error_log(mysqli_error($link));
} else {
    echo '성공하였습니다. <a href="index.php">돌아가기</a>';
}
