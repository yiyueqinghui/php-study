<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/14
 * Time: 9:34
 */
class object
{
  function do_say($info){
      echo $info;
  }
}

$say = new object();
$say->do_say("who are you?");
?>