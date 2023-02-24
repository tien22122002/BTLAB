<?php
$rows = "";
$cols = "";
function createTable()
{

    // đọc các hệ số từ FORM
    if (isset($_GET['rows'])) {
        $rows = $_GET['rows'];
    }
    if (isset($_GET['cols'])) {
        $cols = $_GET['cols'];
    }

    $theader = "<table border='1' width='500' >\n";
    $tbody = "";

    for ($i = 0; $i < $rows; $i++) {
        $tbody .= "<tr>";
        for ($j = 0; $j < $cols; $j++) {
            $tbody .= "<td>" . $i . " " . $j . "</td>";
        }
        $tbody .= "</tr>\n";
    }
    $tfooter = "</table>";
    echo $theader . $tbody . $tfooter;
}
?>
<html>

<head>
    <title>Create Table</title>

</head>
<style>
    .display-box {
        font-family: 'Orbitron', sans-serif;
        background-color: #dcdbe1;
        color: black;
        width: 380px;
        height: 100px;
        border: 2px solid black;
        border-collapse: collapse;
    }

    table {
        margin-left: auto;
        margin-right: auto;
        text-align: center;

    }

    h1 {
        text-align: center;
    }

    input {
        width: auto;
    }

    .box-2 {


        color: black;

    }
</style>

<body>

    <center>
        <H1>TÌM HIỂU KỸ THUẬT DOM TRONG JAVASCRIPT</H1>
        <H1>(DOM: Document Object Model)</H1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            <table class="display-box" border=1 cellspacing=0 cellpading=0>
                <tr>
                    <td>Số dòng</td>
                    <td><input type="text" name="rows" value="<?php if (isset($_GET['rows'])) echo $_GET['rows']; ?>"></td>
                </tr>
                <tr>
                    <td>Số cột</td>
                    <td><input type="text" name="cols" value="<?php if (isset($_GET['cols'])) echo $_GET['cols']; ?>"></td>
                </tr>
                <tr>
                    <center>
                        <td></td>
                        <td colspan="2"><input type="submit" value="Hiển thị">
                            <input type="submit" value="Xóa">
                        </td>
                    </center>
                </tr>
            </table>
        </form>
        <div id="table" class="box-2">
            <?php
            if (isset($_GET['rows']) && isset($_GET['cols'])) {
                createTable();
            }
            ?>
        </div>

    </center>

</body>

</html>