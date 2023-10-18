<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>등록</title>
</head>
<body>
    <form name='frm' action='write_proc.php' method='post' onSubmit='return CheckForm();'>
        <table border='1'>
            <tr>
                <th>회원명</th>
                <td>
                    <input type='text' name='name' value='' />
                </td>
            </tr>
            <tr>
                <th>나이</th>
                <td>
                    <input type='text' name='age' value='' />
                </td>
            </tr>
            <tr>
                <th>성별</th>
                <td>
                    <label>
                        <input type='radio' name='gender' value='남' /> 남
                    </label>
                    <label>
                        <input type='radio' name='gender' value='여' /> 여
                    </label>
                </td>
            </tr>
            <tr>
                <td colspan='2'>
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