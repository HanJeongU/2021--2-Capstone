<?php
session_start();
?>


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
      <form>
        <div class="img">

          <img src="main.png" alt="My Image">
        </div>
        <h1>업체등록 완료</h1>
        <p>NFC 태그 주소가 생성되었습니다.!</p>

  <?php 
  

  ?>


              <button class="button gray medium"><a href="" onclick="clip(); return false;">  NFC태그 주소복사</a></button>

     

        <script type="text/javascript">

function clip(){

	var url = '';
	var textarea = document.createElement("textarea");
	document.body.appendChild(textarea);
	url = "<?php echo "http://35.239.189.125/%EC%B6%9C%EC%9E%85%EB%AA%85%EB%B6%80%20%EC%A0%95%EB%B3%B4.php?area=".$_SESSION["area"]."&company=".$_SESSION["company"]; ?>";
	textarea.value = url;
	textarea.select();
	document.execCommand("copy");
	document.body.removeChild(textarea);
	alert("URL이 복사되었습니다.")
}

</script>


<p></br></p>

      
        <div class="iframe">
          <details>
            <summary>ONE Q PAss NFC 등록 방법</summary>
            <p></p>
        
          <iframe src="https://velog.io/@psh4204/series/%EC%BA%A1%EC%8A%A4%ED%86%A4-%EB%B9%84%EB%8C%80%EB%A9%B4IoT%ED%8C%80" width="350" height="800"  marginwidth="0" marginheight="0" frameborder="1" scrolling="yes"></iframe>
        </details>
      </div>

      </form>
    </div>
  </div>
</body>

</html>