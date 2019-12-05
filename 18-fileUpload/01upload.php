<?php
/**
 * Created by PhpStorm.
 * User: 42977
 * Date: 2019/8/1
 * Time: 10:21
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>文件上传</title>
    <link rel="stylesheet" href="../lib/css/bootstrap.css">
    <script src="../lib/js/jquery.js"></script>
    <script src="../lib/js/popper.js"></script>
    <script src="../lib/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="02upload.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="upload" class="col-sm-2 col-form-label">图片上传</label>
                    <input type="file" class="form-control" id="请先择文件..." name="myfile">
                </div>
                <button type="submit" class="btn btn-danger">上传</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
