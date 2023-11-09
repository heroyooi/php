<?php
require_once('./config/db_conn.php');

$sql_query = "select * from members where idx=".$_GET['edit_no'];
$result = mysqli_query($connect, $sql_query);

$row = mysqli_fetch_array($result);

// print_r($row);

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>수정</title>
</head>
<body>
    <form name='frm' action='edit_proc.php' method='post' onSubmit='return CheckForm();'>
        <input type='hidden' name='edit_no' value='<?php echo $_GET['edit_no']; ?>' />
        <table border='1'>
            <tr>
                <th>회원명</th>
                <td>
                    <input type='text' name='name' value='<?php echo $row['name']; ?>' />
                </td>
            </tr>
            <tr>
                <th>나이</th>
                <td>
                    <input type='text' name='age' value='<?php echo $row['age']; ?>' />
                </td>
            </tr>
            <tr>
                <th>성별</th>
                <td>
                    <?php
                    $checked1 = "";
                    $checked2 = "";

                    if ($row["gender"] == "남")
                    {
                        $checked1 = "checked";
                        $checked2 = "";
                    } else if ($row["gender"] == "여") {
                        $checked1 = "";
                        $checked2 = "checked";
                    } else {
                        $checked1 = "";
                        $checked2 = "";
                    }
                    ?>
                    <label>
                        <input type='radio' name='gender' value='남' <?php echo $checked1; ?> /> 남
                    </label>
                    <label>
                        <input type='radio' name='gender' value='여' <?php echo $checked2; ?> /> 여
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <a href='./index.php'>목록</a>
                </td>
                <td>
                    <input type="submit" value='저장' />
                </td>
            </tr>
        </table>   
    </form>

    <script>
        function CheckForm()
        {
            if (frm.name.value == '')
            {
                frm.name.focus();
                alert('이름을 입력해 주세요');
                return false;
            }
            else if (frm.age.value == "")
            {
                frm.age.focus();
                alert('나이를 입력해 주세요');
                return false;
            }
            
        }
    </script>
</body>
</html>