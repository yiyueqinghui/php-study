<?php
//验证上传的图片,并保存
echo "\$_FILES 相关属性: <br/>";
echo "Upload: " . $_FILES["file"]["name"] . "<br />";
echo "Type: " . $_FILES["file"]["type"] . "<br />";
echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
echo "Stored in: " . $_FILES["file"]["tmp_name"];     //存储在服务器的文件的临时副本的名称
echo "<hr/>";

if($_FILES["file"]["error"]>0){
	echo "文件上传失败！";
	exit;
}
$arr = getimagesize($_FILES["file"]["tmp_name"]); //php 原生的 getimagesize 方法，获取指定图片的详细信息
print_r($arr);         
echo "<hr/>";            
$types = $arr['mime'];
$img_arr = explode("/",$types);
$type = $img_arr[(count($img_arr)-1)];
$newName = renameImg($type);

if(preg_match("/[image]/",$types)>0){               //判断是否是图片
  if(file_exists("img/" .$_FILES["file"]["name"])){      //检查文件是否已经存在
     echo $_FILES["file"]["name"] . "已经存在！";
  }
  else{
  	 //move_uploaded_file(file,newloc)     将上传的文件移动到新位置。
     //move_uploaded_file($_FILES["file"]["tmp_name"],"img/".$newName);  
     //或使用copy    复制文件到新目录
     copy($_FILES["file"]["tmp_name"],"img/".$newName);    
     echo "Stored in: " . "img/" .$newName;
  }
}else{
	echo "只能上传图片类型格式!";
}

function renameImg($type,$len=8){
	$name = substr(md5(time()),0,$len);      //md5 加密
	return $name.".".$type;
}



?>