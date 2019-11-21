<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/21
 * Time: 18:17
 * title: 文件指针
 */

  $handle = fopen('info.txt','w');
  echo ftell($handle);            //ftell — 返回文件指针读/写的位置
  echo "<br/>";

  fseek($handle,1000);           //fseek - 定位指针的位置
  echo ftell($handle);
  echo "<br/>";

  rewind($handle);
  echo ftell($handle);           //返回指针原来的位置
  echo "<br/>";

  echo "<hr/>";
  function addcon($txt){
      global $handle;
      $newcon = file_get_contents('info.txt')." ".$txt;
      echo "01:  $newcon";
      echo "<br/>";
      fwrite($handle,$newcon);                       //追加到后面
      echo file_get_contents('info.txt');
      echo "<br/>";
  }
  addcon('hellow');
  addcon('world');