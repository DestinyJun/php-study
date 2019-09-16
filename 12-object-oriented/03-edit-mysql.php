<?php
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>新闻修改</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<form action="" method="post">
  <div class="form-group row">
    <label for="news_title" class="col-sm-2 col-form-label">名称</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="news_title" placeholder="新闻标题" name="news_title">
    </div>

  </div>
  <div class="form-group row">
    <label for="news_id" class="col-sm-2 col-form-label">所属新闻</label>
    <div class="col-sm-2">
      <select name="news_id" id="news_id" class="">
        <option value="1">一级新闻</option>
        <option value="2">二级新闻</option>
        <option value="3">三级新闻</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="news_sort" class="col-sm-2 col-form-label">排序</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="news_sort" placeholder="排序值" name="news_sort">
    </div>
  </div>
  <div class="form-group row">
    <label for="news_desc" class="col-sm-2 col-form-label">描述</label>
    <div class="col-sm-10">
      <textarea id="news_desc" placeholder="请输入备注" name="news_desc" rows="3" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="news_content" class="col-sm-2 col-form-label">内容</label>
    <div class="col-sm-10">
      <textarea id="news_content" placeholder="请输入备注" name="news_content" rows="3" class="form-control" style="resize: none"></textarea>
    </div>
  </div>
  <div style="text-align: center;width: 100%">
    <button class="btn btn-info" type="button">重置</button>
    <button class="btn btn-info" type="submit" style="margin-left: 20px">提交</button>
  </div>
</form>
</body>
</html>
