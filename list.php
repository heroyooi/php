<?php
require_once('./config/db_conn.php');

// print_r($_POST);

$sql_query = "select * from members order by idx desc";
$result = mysqli_query($connect, $sql_query);

echo "<table border='1'>";
echo "<tr>";
echo "<th>NO</th>";
echo "<th>Name</th>";
echo "<th>Age</th>";
echo "<th>성별</th>";
echo "<th>등록일</th>";
echo "<th>삭제</th>";
echo "</tr>";

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>".$row['idx']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['age']."</td>";
    echo "<td>".$row['gender']."</td>";
    echo "<td>".$row['regdate']."</td>";

    echo "<td>";
    //echo "<form name='frmd' action='". $_SERVER['PHP_SELF'] ."' method='post'>";
    //echo "<input type='submit' value='삭제' />";
    //echo "<input type='text' name='del_no' value='" .$row['idx']. "' />";
    //echo "</form>";
    echo "<a href='./delete.php?del_no=".$row['idx']."'>삭제</a>";
    echo "</td>";

    echo "</tr>";
}

echo "</table>";

mysqli_close($connect);
?>