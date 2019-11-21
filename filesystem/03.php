<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/21
 * Time: 15:33
 */
//chmod — 改变文件模式
//chmod ($filename ,$mode )  数字 1 表示使文件可执行，数字 2 表示使文件可写，数字 4 表示使文件可读

// 所有者可读写，其他人没有任何权限   0600
// 所有者可读写，其他人可读   0644
// 所有者有所有权限，其他所有人可读和执行  0755
// 所有者有所有权限，所有者所在的组可读 0740
$filename = "../class/info.txt";
chmod($filename,1);