<?php
$gio = "";
$chao = "";
if (isset($_POST["txtGio"])) {
    $gio = $_POST["txtGio"];
    if ($gio < 12)
        $chao = "Chào buổi sáng";
    else if ($gio < 17)
        $chao = "Chào buổi chiều";
    else
        $chao = "Chào buổi tối";
}
?>

<form action="#" method="post">

    <body>
        <center>
            <table border=1>
                <tr>
                    <td bgcolor="#000099">
                        <font color="white">
                            <center>
                                Chào theo giờ
                            </center>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#40E0D0">
                        <input type="textbox" name="txtGio" value="<?= $gio ?>"></br>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#40E0D0">
                        <?php

                        echo $chao;

                        ?>
                        </type></br>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#40E0D0">
                        <center>
                            <input type="submit" name="submit" value="Chào" />
                        </center>
                    </td>
                </tr>
    </body>
    </table>
    </center>
</form>