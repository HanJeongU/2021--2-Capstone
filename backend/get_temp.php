<?php
    $connect = mysqli_connect('localhost', 'root', 'comgong', 'capstone') or die("fail");

$sql = "
    INSERT INTO get_temp
    (area, company, temp, time)
    VALUES(
        '{$_POST['area']}',
        '{$_POST['company']}',
        '{$_POST['temp']}',
        '{$_POST['time']}'
        )
";
//mysqli_set_charset($connect, "utf8");
//mysqli_query ($connect, 'SET NAMES utf8');

$result = mysqli_query($connect, $sql);
if($result === false) {
    echo 'error';
    error_log(mysqli_error($connect));
}
echo 'success';

?>