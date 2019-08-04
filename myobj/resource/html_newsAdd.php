<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>新闻添加</title>
  <link rel="stylesheet" href="../public/css/bootstrap.css">
  <link rel="stylesheet" href="../public/css/addNews.css">
  <script src="../public/js/jquery.js"></script>
  <script src="../public/js/popper.js"></script>
  <script src="../public/js/bootstrap.js"></script>
</head>
<body>
<header class="header">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</header>
<div class="side-nav" style="width: 180px;position: fixed;top: 60px;left: 0;height: 100%">
  <div class="list-group">
    <a href="newsAdd.php" class="list-group-item list-group-item-action active">新闻添加</a>
    <a href="newsList.php" class="list-group-item list-group-item-action">新闻列表</a>
    <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
    <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
    <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
  </div>
</div>
<div class="container-fluid" style="padding-left: 190px">
  <div class="row">
    <div class="col-12">
      <form action="insertNews.php" method="post">
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
    </div>
  </div>
</div>
</body>
</html>
