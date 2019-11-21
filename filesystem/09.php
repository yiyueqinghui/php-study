<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/21
 * Time: 17:18
 * title:  file_get_contents — 将整个文件读入一个字符串
 * title:  file_put_contents — 将一个字符串写入文件
 */

  $file_txt = file_get_contents('02.php');
  echo $file_txt;
  echo "<hr/>";
  $file_txt_modify = $file_txt."first add contents";
  if(file_put_contents('info.txt',$file_txt_modify)){        //file_put_contents() 写入的内容会覆盖原来的内容
      echo "写入成功: ".file_get_contents("info.txt");
  }else{
      echo "写入失败: ".file_get_contents("info.txt");
  }