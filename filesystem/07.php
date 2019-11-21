<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/21
 * Time: 16:47
 * title:feof()   检测文件指针是否到了文件结束的位置
 */
//如果文件指针到了 EOF 或者出错时则返回 TRUE，
//否则返回一个错误（包括 socket 超时），
//其它情况则返回 FALSE

$handle = fopen("02.php","r+");
if(feof($handle)){
    echo "指针到末尾了";
}else{
    echo "指针没到末尾";
}

$data = fread($handle,1000);
echo $data;
