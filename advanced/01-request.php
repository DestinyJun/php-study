<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../lib/css/bootstrap.css">
  <script src="../lib/js/jquery.js"></script>
  <script src="../lib/js/popper.js"></script>
  <script src="../lib/js/bootstrap.js"></script>
    <title>前后提交数据</title>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-12">
      <form action="02-response.php" method="get" novalidate>
        <div class="form-group">
          <label for="username">用户名</label>
          <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="username" name="username">
        </div>
        <div class="form-group">
          <label for="password">密码</label>
          <input type="password" class="form-control" id="password" placeholder="password" name="password">
        </div>
        <!--对选框为了保证收到所有的值，name属性后面需要跟上[]-->
        <div class="form-group form-check-inline">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" name="color[]" value="red">
          <label class="form-check-label" for="exampleCheck1">red</label>
        </div>
        <div class="form-group form-check-inline">
          <input type="checkbox" class="form-check-input" id="exampleCheck2" name="color[]" value="orange">
          <label class="form-check-label" for="exampleCheck2">orange</label>
        </div>
        <button type="submit" class="btn btn-primary">提交</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>
<script>
  function onSubmit() {
      const username = $('#username').val();
      const password = $('#password').val();
      $.ajax({
          url: "02-response.php",
          contentType: "application/json;charset=utf-8",
          type: "POST",
          processData: true,
          dataType: "json",
          cache: false,
          data: {"username": username,"password": password},
          success: function (res) {
              console.log(res);
          },
          error: function (err) {
              console.log(err);
          }
      })
  }
</script>
<?php
/**
 * Created by PhpStorm.
 * User: 42977
 * Date: 2019/7/29
 * Time: 22:10
 */
