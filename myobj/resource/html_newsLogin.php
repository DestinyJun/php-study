<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>新闻登陆</title>
  <link rel="stylesheet" href="../public/css/bootstrap.css">
  <link rel="stylesheet" href="../public/css/addNews.css">
  <script src="../public/js/jquery.js"></script>
  <script src="../public/js/popper.js"></script>
  <script src="../public/js/bootstrap.js"></script>
</head>
<body>
<form action="./newsVerifyLogin.php" method="post">
  <div class="form-group">
    <label for="username">用户名</label>
    <input type="text" class="form-control" id="username" placeholder="username" name="username">
  </div>
  <div class="form-group">
    <label for="password">密码</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
  </div>
  <div class="form-group">
    <img src="../php/newsVerifyCode.php" alt="秀智" style="width: 100px;height: 30px;cursor: pointer" onclick="this.src = '../php/newsVerifyCode.php?timer='+ Math.random();">
    <label for="code">请输入验证码</label>
    <input type="text" class="form-control" id="code" placeholder="请输入验证码" name="code" onblur="code_req()">
  </div>
  <button type="submit" class="btn btn-primary">登陆</button>

</form>
</body>
<script>
  function code_req() {
      const data = 'code=' + $('#code').val();
      $.ajax({
          url:"./newsVerifyLogin.php",
          method: 'POST',
          contentType: 'application/json',
          data: data,
          success: (res) => {
              console.log(res);
          },
          error: (err) => {
              console.log(res);
          }
      })
  }
</script>
</html>
