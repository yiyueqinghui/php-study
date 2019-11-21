<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/21
 * Time: 15:40
 * title:copy
 */
//copy("源文件的路径","复制后的文件的路径")

$filename = "../class/info.txt";
$to_name = "info.txt";
if(copy($filename,$to_name)){
    echo "successfull";
}else{
   echo "fail!";
};