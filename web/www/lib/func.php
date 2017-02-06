<meta charset="utf8">
<?php

/**
* func.php 与数据库无关的方法
*
* @author Abra <xiangyunz@outlook.com> //作者邮箱
* @link https://github.com/ZaraZ       //作者的github
* @since 0.1 2017年02月05日             //版本号及日期
* @copyright GPL
*
*/


/**
*
* 获取当前北京时间
* @return 当前北京时间
*/
function fTime(){
  date_default_timezone_set('Asia/Shanghai');
  $t = time();
  return date("Y-m-d H:i:s", $t);
}

// $t = fTime();
// echo $t;

/**
*
* 检测是否登录
* @return bool 是否存在 name 的cookie
*/
function fLogin(){
  return isset($_COOKIE['name']);
}

/**
* 转义字符串，对Post、Get、Cookie 数组进行转义
* @param $arr 需要转义的数组
* @return $arr 转义后的数组
*/
function fAddslashes($arr){
  foreach ($arr as $k => $v) {
    if(is_string($v)){
      $arr[$k] = addslashes($v);
    }elseif (is_array($v)) {
      $arr[$k] = fAddslashes($v);
    }
  }
  return $arr;
}

?>
