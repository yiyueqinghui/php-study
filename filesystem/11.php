<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/21
 * Time: 17:52
 * title:rmdir — 删除目录
 *       mkdir - 创建目录
 *       is_dir - 判断给定文件名是否是一个目录
 *       realpath - 返回规范化的绝对路径名
 *       readfile — 输出文件
 */
if (!is_dir('examples')) {
    mkdir('examples');
}else{
    echo "给定的文件名不是一个目录";
}

rmdir('examples');

echo realpath('11.php');

echo "<hr/>";

echo readfile('new.php');