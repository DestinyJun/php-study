<?php
/**
 * 数据模型类
 */
date_default_timezone_set('prc');
class DateModal
{
  public static function timer(): string {
    return date('H:i:s');
  }
  public static function day(): string {
    return date('Y-m-d');
  }
  public static function dayTime(): string {
    return date('Y-m-d H:i:s');
  }
}
