<?php
require '../../tool/get_verify_code.php';
require '../../tool/get_path_url.php';
$url = get_path_url($_SERVER['PHP_SELF'], __FILE__);
$font = $url.'/myobj/public/fonts/simhei.ttf';
header('content-type:image/jpeg');
imagejpeg(get_verify_code($font));
