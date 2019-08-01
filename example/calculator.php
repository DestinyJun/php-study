<?php
/**
 * Created by PhpStorm.
 * User: 42977
 * Date: 2019/7/30
 * Time: 9:23
 */
$data = '';
$operate = '';
select_data();
if (isset($_REQUEST['clean'])) {
  $connect = mysqli_connect('127.0.0.1','root','root','operate');
  if (!$connect) {
    exit('<h1>连接数据库失败</h1>');
  }
  $query = mysqli_query($connect,"truncate his_list;");
  if (!$query) {
    exit('<h1>清空数据失败</h1>');
  }
  select_data();
  mysqli_close($connect);
}
if (isset($_REQUEST['n1'])) {
  global $operate;
    $n1 = $_REQUEST['n1'];
    $n2 = $_REQUEST['n2'];
    $operate = $_REQUEST['operate'];
    switch ($operate) {
        case 'add':
            $result = $n1 + $n2;
            add_data($n1,$n2,$result,'+');
            select_data();
            break;
        case 'minus':
            $result = $n1 - $n2;
            add_data($n1,$n2,$result,'-');
            select_data();
            break;
        case 'multiply':
            $result = $n1 * $n2;
            add_data($n1,$n2,$result,'*');
            select_data();
            break;
        case 'divider':
            $result = $n1 / $n2;
            add_data($n1,$n2,$result,'/');
            select_data();
            break;
    }
}
function add_data($n1,$n2,$result,$ope) {
  $connect = mysqli_connect('127.0.0.1','root','root','operate');
  if (!$connect) {
    echo '<h3>连接数据库失败</h3>';
  }
  // 设置连接编码
  mysqli_set_charset($connect,'utf8');
  // 插入数据
  $query = mysqli_query($connect,"insert into his_list values (default,'$n1','$n2','$result','$ope');");
  if (!$query) {
    echo '<h1>插入失败</h1>';
  }
  mysqli_close($connect);
}
function select_data() {
    global  $data;
    $data = '';
    $connect = mysqli_connect('127.0.0.1','root','root','operate');
  if (!$connect) {
      echo '<h3>连接数据库失败</h3>';
  }
  $query = mysqli_query($connect,"select * from his_list");
  if (!$query) {
      exit('<h1>查询失败</h1>');
  }
  while ($row = mysqli_fetch_assoc($query)) {
      $data = $data."<div class='list h4'>
                  <span>{$row['n1']}</span>
                  <span>{$row['ope']}</span>
                  <span>{$row['n2']}</span>
                  <span>=</span>
                  <span>{$row['result']}</span>
                </div>";
  }
  mysqli_free_result($query);
  mysqli_close($connect);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>计算器</title>
    <link rel="stylesheet" href="../lib/css/bootstrap.css">
    <script src="../lib/js/jquery.js"></script>
    <script src="../lib/js/popper.js"></script>
    <script src="../lib/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <form class="form" action="calculator.php" method="post">
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" id="n1" name="n1" class="form-control" value="<?php echo isset($n1)?$n1:''?>">
                    </div>
                    <div class="form-group">
                        <select name="operate" id="operate" class="custom-select">
                            <option value="add" <?php echo $operate === 'add'?'selected':'' ?> >+</option>
                            <option value="minus" <?php echo $operate === 'minus'?'selected':'' ?> >-</option>
                            <option value="multiply" <?php echo $operate === 'multiply'?'selected':'' ?> >*</option>
                            <option value="divider" <?php echo $operate === 'divider'?'selected':'' ?> >/</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" id="n2" name="n2" class="form-control" value="<?php echo isset($n2)?$n2:'' ?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-warning">=</button>
                    </div>
                    <div class="form-group">
                        <input type="text" id="n1" name="n1=3" class="form-control" disabled value="<?php echo isset($result)?$result:''; ?>">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12">
          <h1>
            计算历史
            <a class="btn btn-info pull-left" href="calculator.php?clean=1">清空历史</a>
          </h1>
          <div id="list">
            <?php  echo $data; ?>
             <!-- <?php /*for ($i=0;$i<count($data);$i++): */?>
                <div class="list h4">
                  <span><?php /*echo $data[$i]['n1'] */?></span>
                  <span><?php /*echo $data[$i]['ope'] */?></span>
                  <span><?php /*echo $data[$i]['n2'] */?></span>
                  <span>=</span>
                  <span><?php /*echo $data[$i]['result'] */?></span>
                </div>
              --><?php /*endfor; $data = [];*/?>
          </div>
        </div>
    </div>
</div>
</body>
</html>
