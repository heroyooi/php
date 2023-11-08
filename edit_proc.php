<?php
require_once('./config/db_conn.php');

// echo $_POST['edit_no'];
// exit;

$name = trim($_POST['name']);
$age = trim($_POST['age']);

if ($_POST['gender'] == "" && empty($_POST['gender']))
{
    $gender = "선택안함";
} else {
    $gender = $_POST['gender'];
}

$sql_query = "update members set name='".$name."', age='".$age."', gender='".$gender."' where idx = ".$_POST['edit_no'];

$result = mysqli_query($connect, $sql_query);
if ($result)
{
    echo "정상적으로 처리되었습니다.";
} else {
    echo "실패 하였습니다.";
}

echo "<a href='index.php'> 홈으로 </a>";
?>