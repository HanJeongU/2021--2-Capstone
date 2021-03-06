<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
  <title>출입명부_업체등록</title>

  
</head>

<body>
  <div class="wrapper">
    <div class="form-container">
      <form action = "join_action.php" method = "get">
        <div class="img">

          <img src="main.png" alt="My Image">
        </div>
        <h3>업체등록</h3>
        <p>업체 정보를 입력해주세요.</p>
        <!-- <form action = "join_action.php" method="get"> -->
        <div class="form-group">
          <!-- <input type="" name = "area" class="form-control" required>
          <span>지역을 선택해야주세요</span>
          <span class="border"></span>
          <form name="get1" method="get">
            <select name="university">
              <option value="none">=== 지역을 선택하시오. ===</option>
                <option value="서울">서울</option>
                <option value="인천">인천</option>
                <option value="대전">대전</option>
                <option value="대구">대구</option>
                <option value="울산">울산</option>
                <option value="부산">부산</option>
                <option value="광주">광주</option>
                <option value="경기도">경기도</option>
                <option value="강원도">강원도</option>
                <option value="충청남도">충청남도</option>
                <option value="충청북도">충청북도</option>
                <option value="전라북도">전라북도</option>
                <option value="경상북도">경상북도</option>
                <option value="경상남도">경상남도</option>
                <option value="제주도">제주도</option>
            </select> -->
          <input type="text" name = "area" class="form-control" required>
          <span>지역</span>
          <span class="border"></span>
        
        </div>
        <div class="form-group">
          <input type="text" name = "company" class="form-control" required>
          <span>업체 이름</span>
          <span class="border"></span>
        </div>
        <div class="form-group">
          <input type="text" name = "name" class="form-control" required>
          <span>이름</span>
          <span class="border"></span>
        </div>
        <div class="form-group">
          <input type="text" name = "pw" class="form-control" required>
          <span>휴대폰 번호</span>
          <span class="border"></span>
        </div>
        <div class="form-group">
          <input type="text" name="email" class="form-control" required>
          <span>E-mail</span>
          <span class="border"></span>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="request" required></textarea>
          <span>요청사항</span>
          <span class="border"></span>
        </div>
        <button type="submit">신청하기</button>
      </form>
    </div>
  </div>
</body>

</html>