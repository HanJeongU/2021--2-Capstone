<?php
    session_start();
    $connect = mysqli_connect('localhost', 'root', 'comgong', 'capstone') or die("fail");

       
        $id=$_POST['name'];
        $pw=$_POST['pw'];

        $query = "SELECT * from join_company where `name`='$id'";
        $result = $connect->query($query);

    if(mysqli_num_rows($result)==1) {
 
        $row=mysqli_fetch_assoc($result);

        if($row['pw']==$pw){
            $_SESSION['name']=$id;
            $_SESSION['pw'] = $pw;
            if(isset($_SESSION['name'])){
            ?>      <script>
                            alert("로그인 되었습니다.");
                            location.replace("index.php");
                    </script>
                    <?php
                        }
                        else{
                            echo "session fail";
                        }
                    }

            else {
                ?>              <script>
                                        alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                                        history.back();
                                </script>
                <?php
                        }

                }

            else{
?>              <script>
                    alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                    history.back();
            </script>
<?php
    }


?>