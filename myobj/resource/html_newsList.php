<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>新闻列表</title>
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
<div class="side-nav" style="width: 200px;position: fixed;top: 60px;left: 0;height: 100%">
  <div class="list-group">
    <a href="newsAdd.php" class="list-group-item list-group-item-action">新闻添加</a>
    <a href="newsList.php" class="list-group-item list-group-item-action">新闻列表</a>
    <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
    <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
    <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
  </div>
</div>
<div class="container-fluid" style="padding-left: 215px">
  <div class="row">
    <div class="col-12">
      <table class="table table-hover">
        <thead class="thead-dark">
        <tr>
          <th scope="col">id</th>
          <th scope="col">标题</th>
          <th scope="col">所属</th>
          <th scope="col">排序</th>
          <th scope="col">描述</th>
          <th scope="col">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php $i=0; while($result = mysqli_fetch_assoc($select)): ?>
          <tr>
            <th scope="row"><?php ++$i;echo $i ?></th>
            <td><?php echo $result['news_title'] ?></td>
            <td><?php echo $result['news_id'] ?></td>
            <td><?php echo $result['news_sort'] ?></td>
            <td><?php echo $result['news_desc'] ?></td>
            <td>
              <a href="newsDetails.php?id=<?php echo $result['id'] ?>" class="btn btn-info">详情</a>
              <a href="deleteNews.php?id=<?php echo $result['id'] ?>" class="btn btn-danger">删除</a>
            </td>
          </tr>
        <?php endwhile; ?>
        </tbody>
      </table>
    </div>
    <div class="col-12">
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>
</body>
</html>
