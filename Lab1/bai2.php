<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$ten = "";
$email = "";
$cmt = "";



?>

<body>
    <form action="#" method="post">
        <table border="0">
            <tr>
                <th colspan="3" bgcolor="#000098">
                    <font color="white">
                        <center>
                            GỞI Ý KIẾN
                        </center>
                    </font>
                </th>
            </tr>
            <tr>
                <td bgcolor="#40E0D0">Họ tên</td>
                <td bgcolor="#40E0D0"><input type="textbox" name="txtHoTen" value="<?= $ten ?>"></td>
            </tr>
            <tr>
                <td bgcolor="#40E0D0">Email</td>
                <td bgcolor="#40E0D0"><input type="email" name="txtEmail" value="<?= $email ?>"></td>
            </tr>
            <tr>
                <td bgcolor="#40E0D0">Nội dung</td>
                <td bgcolor="#40E0D0"><textarea type="text" name="txtCMT" value="<?= $cmt ?>" rows="5" cols="30"></textarea></td>
            </tr>
            <tr>
                <th colspan="3" bgcolor="#40E0D0">
                    <center>
                        <input type="submit" name="submit" value="GỞI" />
                    </center>
                </th>
            </tr>
        </table>
    </form>
    <table>

    </table>
</body>

</html>