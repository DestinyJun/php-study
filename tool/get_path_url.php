<?php
function get_path_url($path_url,$path_file) {
  define("WWWROOT",str_ireplace('\\','/',str_ireplace(str_replace("/", "\\", $path_url),'',$path_file).'/'.'phpstudy'));
  return WWWROOT;
}
