<?php
    function upload() {
        // 有文件域
        if (!isset($_FILES['wenjun'])) {
            $GLOBALS['message'] = '别玩了，大哥';
            return;
        };
        $wenjun = $_FILES['wenjun'];
        // 这里的错误0 有一个常量来替代 接收到了文件
        if ($wenjun['error'] !== UPLOAD_ERR_OK) {
            // 说明上传出错了
            $GLOBALS['message'] = '上传失败，别玩了，大哥，赶紧再上传一次';
            return;
        };
        // 将上传的文件从临时保存目录移动到网站根目录，也即是服务器
        // 第一步，找到上传文件的源
        $source = $wenjun['tmp_name'];
        $target = './uploads/'.$wenjun['name'];
        $moved = move_uploaded_file($source, $target);
        // 移动失败 再上传文件中，移动的目标路径文件夹一定是已经存在的目录
        if (!$moved) {
            $GLOBALS['message'] = '上传失败（移动失败）';
            return;
        }
        // 移动成功
        echo '移动成功';
    }
    if ($_SERVER['REQUEST_METHOD']==='POST'){
        //接受文件 上传文件处理逻辑 .如果没有文件域
//        var_dump($_FILES);
        upload();
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" METHOD="post" enctype="multipart/form-data">
  <!--  <input type="text" name="wenjun1">
    <input type="text" name="wenjun2">-->
    <input type="file" name="wenjun">
    <button type="submit">提交</button>
    <?php if(isset($message)):?>
    <p style="color: red;"><?php echo $message?></p>
    <?php endif?>
</form>
</body>
</html>