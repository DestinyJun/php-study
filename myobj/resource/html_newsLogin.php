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
  <button type="submit" class="btn btn-primary">登陆</button>
</form>
</body>
</html>
