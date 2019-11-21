<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/21
 * Time: 18:07
 * title:is_readable   判断文件是否可读
 *       is_writable   判别文件是否可写
 *       is_uploaded_file — 判断文件是否是通过 HTTP POST 上传的
 */

if(is_readable('info.txt')){
    echo "文件可读";
}else{
    echo "文件不可读";
}


if(is_writable('info.txt')){
    echo "文件可写";
}else{
    echo "文件不可写";
}

if(is_uploaded_file('info.txt')){
    echo "文件通过http上传";
}else{
    echo "文件未通过http上传";
}