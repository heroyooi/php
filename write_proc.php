<?php
require_once('./config/db_conn.php');

/*
print_r($_POST);
Array ( [name] => 123 [age] => 123 [gender] => 남 )
*/

$name = trim($_POST['name']);
$age = trim($_POST['age']);

if ($_POST['gender'] == "" && empty($_POST['gender']))
{
    $gender = "선택안함";
} else {
    $gender = $_POST['gender'];
}


// $sql_query = "insert into members (name, age, gender, regdate) values ('$name', '$age', '$gender', now())"; // 표준 방식
$sql_query = "insert into members set name='".$name."', age='".$age."', gender='".$gender."', regdate=now() ";

$result = mysqli_query($connect, $sql_query);
if ($result)
{
    echo "정상적으로 처리되었습니다.";
} else {
    echo "실패 하였습니다.";
}

echo "<a href='index.php'> 홈으로 </a>";
?>