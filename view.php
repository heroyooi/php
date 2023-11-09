<?php
require_once('./config/db_conn.php');

$sql_query = "select * from members where idx=".$_GET['view_no'];
$result = mysqli_query($connect, $sql_query);

$row = mysqli_fetch_array($result);

// print_r($row);

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>보기</title>
</head>
<body>
    <table border='1'>
        <tr>
            <th>회원명</th>
            <td>
                <?php echo $row['name']; ?>
            </td>
        </tr>
        <tr>
            <th>나이</th>
            <td>
                <?php echo $row['age']; ?>
            </td>
        </tr>
        <tr>
            <th>성별</th>
            <td>
                <?php echo $row["gender"]; ?>
            </td>
        </tr>
        <tr>
            <td>
                <a href='./index.php'>목록</a>
            </td>
            <td>
                <a href='./edit.php?edit_no=<?php echo $_GET['view_no'];?>'>수정</a>
            </td>
        </tr>
    </table>
</body>
</html>