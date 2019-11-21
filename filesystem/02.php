<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/21
 * Time: 14:58
 * title:chgrp() 函数改变指定文件的用户组。
 */
//printf(格式化字符串,对应其中的变量) — 输出格式化字符串 ，返回字符串的长度
//chgrp(文件名,组名) 函数改变指定文件的用户组。

$filename = "../class/info.txt";
$format = "%s's group ID @ %s :%d  <br/>";
printf($format,$filename,date('r'),filegroup($filename));             //filegroup — 取得文件的组

chgrp($filename,8);

clearstatcache();                                                     //clearstatcache — 清除文件状态缓存

printf($format,$filename,date('r'),filegroup($filename));


