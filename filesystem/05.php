<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/21
 * Time: 16:00
 */

//unlink(url) — 删除文件  url文件路径
$resource = "delete.php";
if(unlink($resource)){
    echo "delete success!";
}else{
    echo "delete fail";
}