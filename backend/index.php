<?php
$connect = mysqli_connect(
    'localhost',
    'root',
    'comgong',
    'capstone') or die("fail");
?>

<head>
    <meta http-equiv="Content-Type" content="text/html; 
      charset=UTF-8" />
  <title>로그인</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  
  <body>
  <nav class="navbar navbar-default navbar-static-top">
      <div class="container-fluid">
          <div class="navbar-header">
              <a class="navbar-brand" href="http://35.239.189.125/index.php">비대면 IOT</a>
              <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">메인</a></li>
              <?php if (isset($_SESSION['user_id'])) { ?>
                  <li><a href="">Signed in as <?php echo $_SESSION['user_id']; ?></a></li>
                  <li><a href="logout.php">Log Out</a></li>
              <?php } else { ?>
                  <li><a href="index.php"></a></li>
               <?php } ?>
              </ul>
          </div>
      </div>
  </nav>

<div class="container">
	<div class="page-header">
    	<h1 class="h2">&nbsp; 방문자 기록</h1><hr>
    </div>
<div class="row">

    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
        <tr>  
            <th>이름</th>  
            <th>휴대폰번호</th>
            <th>지역</th>
            <th>가게이름</th>  
            <th>온도</th>
            <th>출입방문시간</th>  
        </tr>  
        </thead>  
  
        <?php  
        $query = "SELECT join_user.*, get_temp.* FROM join_user INNER JOIN get_temp ON join_user.id = get_temp.id";
        $result = mysqli_query($connect, $query);
        $total = mysqli_num_rows($result);
     
        while($rows = mysqli_fetch_assoc($result)) {
            if($total%2 == 0) {
                ?>
                    <tr class = 'even'>
                <?php   }
                else{
                    ?>
                    <tr>
                <?php   }   ?>

			<td><?php echo $rows['userName']  ?></td> 
			<td><?php echo $rows['userPhoneNum'] ?></td>
            <td><?php echo $rows['area'] ?></td>
            <td><?php echo $rows['company'] ?></td>
            <td><?php echo $rows['temp'] ?></td>
            <td><?php echo $rows['time'] ?></td>

			</tr> 
            
            <?php

}
        ?>  
        <?php
  //      $query = "SELECT * FROM get_temp";
  //      $result = mysqli_query($connect, $query);
  //      $total = mysqli_num_rows($result);
     
  //      while($rows = mysqli_fetch_assoc($result)) {
  //          if($total%2 == 0) {
   //             ?>
                    <tr class = 'even'>
                <?php //  }
              //  else{
                    ?>
                    <tr>
                <?php//   }   ?>

			<td><?php echo $rows['area'] ?></td>
            <td><?php echo $rows['company'] ?></td>
            <td><?php echo $rows['temp'] ?></td>
            <td><?php echo $rows['time'] ?></td>

			</tr> 
            
            <?php

//}
        ?>  
        
        </table>  
</div>

</body>
</html>