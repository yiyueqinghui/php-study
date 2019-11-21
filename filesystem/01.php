<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/21
 * Time: 14:32
 * title:basename
 */
//basename: 返回路径中最后一个文件的文件名部分
//basename(path,suffix)     path 文件路径    suffix最终文件的扩展名


//不显示扩展名(如果不想让结果显示扩展名，那在basename()中添加一个其扩展名的参数，直接赛选调扩展名)
echo basename("php_myself_study/filesystem/01.php?hellow=123",".php")."<br/>";
echo basename("php_myself_study/filesystem/01.php",".php")."<br/>";

//显示扩展名
echo basename("php_myself_study/filesystem/01.php");