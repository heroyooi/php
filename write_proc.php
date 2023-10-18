<?php
require_once('./config/db_conn.php');

/*
print_r($_POST);
Array ( [name] => 123 [age] => 123 [gender] => 남 )
*/

$name = trim($_POST['name']);

$sql_query = "delete from members where idx = '".$_GET['del_no']."' ";
$result = mysqli_query($connect, $sql_query);
if ($result)
{
    echo "정상적으로 삭제되었습니다.";
} else {
    echo "삭제에 실패하였습니다.";
}

echo "<a href='index.php'> 홈으로 </a>";
?>