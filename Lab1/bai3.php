<?php
// khai báo các biến toàn cầu
$heso_a = "";
$heso_b = "";
$heso_c = "";
// đọc các hệ số từ FORM
if (isset($_POST['heso_a'])) {
    $heso_a = $_POST['heso_a'];
}
if (isset($_POST['heso_b'])) {
    $heso_b = $_POST['heso_b'];
}
if (isset($_POST['heso_c'])) {
    $heso_c = $_POST['heso_c'];
}
function giaiPTB2($a, $b, $c)
{
    // kiểm tra biến đầu vào
    if ($a == "")
        $a = 0;
    if ($b == "")
        $b = 0;
    if ($c == "")
        $c = 0;
    // in phương trình ra màn hình
    echo "Phương trình: " . $a . "x2 + " . $b . "x + " . $c . " = 0";
    echo "<br>";
    // kiểm tra các hệ số
    if ($a == 0) {
        if ($b == 0) {
            echo ("Phương trình vô nghiệm!");
        } else {
            echo ("Phương trình có một nghiệm: " . "x = " . (-$c / $b));
        }
        return;
    }
    // tính delta
    $delta = $b * $b - 4 * $a * $c;
    $x1 = "";
    $x2 = "";
    // tính nghiệm
    if ($delta > 0) {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo ("Phương trình có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2);
    } else if ($delta == 0) {
        $x1 = (-$b / (2 * $a));
        echo ("Phương trình có nghiệm kép: x1 = x2 = " . $x1);
    } else {
        echo ("Phương trình vô nghiệm!");
    }
}
?>

<h1>Giải phương trình bậc hai</h1>
<form method="post" action="#">
    <input type="number" style="width: 50px" name="heso_a" value="<?= $heso_a ?>" />x <sup>2</sup>
    +
    <input type="number" style="width: 50px" name="heso_b" value="<?= $heso_b ?>" />x
    +
    <input type="number" style="width: 50px" name="heso_c" value="<?= $heso_c ?>" />
    = 0
    <br /><br />
    <input type="submit" value="Kết quả" />
</form>
<br>
<?php
if (
    is_numeric($GLOBALS['heso_a']) && is_numeric($GLOBALS['heso_b'])
    && is_numeric($GLOBALS['heso_c'])
) {
    giaiPTB2($GLOBALS['heso_a'], $GLOBALS['heso_b'], $GLOBALS['heso_c']);
} else {
    echo ("Giá trị input không hợp lệ!");
}
?>