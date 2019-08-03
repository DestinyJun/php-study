<?php
/**
 * Created by PhpStorm.
 * User: 42977
 * Date: 2019/8/3
 * Time: 23:55
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新闻详情</title>
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
            <h3><?php echo $result['news_title']; ?></h3>
            <h6 class="text-break">
                <span><?php echo $result['idt']; ?></span>
            </h6>
            <h5><?php echo $result['news_desc']; ?></h5>
            <p>
                <?php echo $result['news_content']; ?>
            </p>
        </div>
        <a href="newsList.php" class="btn btn-info">返回</a>
    </div>
</div>
</body>
</html>

