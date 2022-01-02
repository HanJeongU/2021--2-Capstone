<?php
session_start();
?>


<?php



        $connect = mysqli_connect('localhost', 'root', 'comgong', 'capstone') or die("fail");
        
        $area=$_GET['area'];
        $company=$_GET['company'];
        $id=$_GET['name'];
        $pw=$_GET['pw'];
        $email=$_GET['email'];
        $request=$_GET['request'];

        $_SESSION["area"]= $area;
        $_SESSION["company"]= $company;
 
        //입력받은 데이터를 DB에 저장
        $query = "INSERT INTO join_company (area, company, `name`, pw, email, request) 
        VALUES ('$area','$company', '$id', '$pw', '$email', '$request')";

        $result= mysqli_query($connect, $query);

        $_check= "SELECT COUNT FROM join_company WHERE VALUES ('$id')";

        echo $query;
        echo $result;
 
        //저장이 됬다면 (result = true) 가입 완료
        if($result) {
                
        ?>      <script>
                alert('가입 되었습니다.');
                location.replace("http://35.239.189.125/%EC%B6%9C%EC%9E%85%EB%AA%85%EB%AC%B4_%EC%97%85%EC%B2%B4%EB%93%B1%EB%A1%9D_%ED%9B%84_%20NFC%20%ED%83%9C%EA%B7%B8%EC%A3%BC%EC%86%8C%20%EC%83%9D%EC%84%B1.php")
                </script>
 
        <?php   }
        else{
?>           <script>
               alert("fail");

               //error_log($connect->query($query));
            </script>
<?php   }
 
        mysqli_close($connect);
?>
