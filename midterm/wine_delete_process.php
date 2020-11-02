<?php
$link = mysqli_connect('localhost', 'admin', 'admin', 'wine',"3308");
$filtered_id = mysqli_real_escape_string($link, $_POST['field_0']);

$query = "
        DELETE FROM wine_all
        WHERE field_0 = '{$filtered_id}'            
        ";

$result = mysqli_query($link, $query);
if ($result == false) {
    echo '삭제하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요.';
    error_log(mysqli_error($link));
} else {
    echo '성공하였습니다. <a href="index.php">돌아가기</a>';
}
