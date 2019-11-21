<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/21
 * Time: 16:27
 * title:fopen()   fclose()   fwrite()
 */
  $handle = fopen('new.php','w+');          //打开文件  记录文件指针

  $txt = "123";

  if(fwrite($handle,$txt)){                 //写入文件
      echo "写入成功！";
  }else{
      echo "写入失败";
  };

  if(fclose($handle)){                    //关闭文件  $handle 文件指针必须有效
      echo "关闭成功！";
  }else{
      echo "关闭失败";
  }
