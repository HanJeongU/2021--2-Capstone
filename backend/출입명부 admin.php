<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>출입명부</title>
  <link rel="stylesheet" href="css/main.css">
  
</head>

<body>
  <div class="wrapper">
    <div class="form-container">
      <form action = "loginproc.php" method= "post">
        <div class="img">

          <img src="main.png" alt="My Image">
        </div>
        <h1>관리자</h1>
        <div class="form-group">
          <input type="text" name = "name" class="form-control" required>
          <span>아이디</span>
          <span class="border"></span>
        </div>
        <div class="form-group">
          <input type="password" name = "pw" class="form-control" required>
          <span>패스워드</span>
          <span class="border"></span>
        </div>
        <!-- <div class="form-group">
          <textarea class="form-control" required></textarea>
          <span>요청사항</span>
          <span class="border"></span>
        </div> -->
          <input type = "checkbox" name = "auto" value = "on"> 입력정보 기억하기
          <button type="submit">로그인</button>
         
       
      </form>
    </div>
  </div>
</body>

</html>