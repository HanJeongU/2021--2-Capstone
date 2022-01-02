<?php
    session_start();

    $userName = $_REQUEST["userName"];
    $userPhoneNum = $_REQUEST["userPhoneNum"];

    $connect = mysqli_connect('localhost', 'root', 'comgong', 'capstone') or die("fail");

$sql = "    
   INSERT INTO join_user
   (userName, userPhoneNum)
   VALUES(
    '{$_POST['userName']}',
    '{$_POST['userPhoneNum']}'
    )
";
$result = mysqli_query($connect, $sql);
if (isset($_REQUEST['auto_login'])) {
    $a = setcookie("userName", $userName, time() + 60);
    $b = setcookie("userPhoneNum", $userPhoneNum, time() + 60);
    echo'자동로그인 성공';
    ?> <script> 
    history.back();
    </script>   <?php
} 
$_SESSION["userName"] = $userName;
$_SESSION["userPhoneNum"] = $userPhoneNum;
if($result === false){
    echo 'error';
    error_log(mysqli_error($connect));
}
echo '인증 되었습니다';
?> <script>
    history.back();
    </script>   

