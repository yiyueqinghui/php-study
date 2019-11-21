<?php
//验证上传的文件，并报存到指定目录
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
$finfo = new finfo(FILEINFO_MIME_TYPE);     //php 原生的获取数据类型的类
$types = $finfo->file($_FILES['file']['tmp_name']);  //finfo::file(路径)    finfo获取文件类型
var_dump($types);
$arrs = explode("/",$types);
var_dump($arrs);
$imgTypes = $arrs[(count($arrs)-1)];
var_dump($imgTypes);
$newName = renameImg($imgTypes);   
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

die;




//$_FILES 获取上传文件
if($fileType != "只能上传图片类型格式")
{
 
  if (file_exists("img/" .$_FILES["file"]["name"]))      //检查文件是否已经存在
  {
     echo $_FILES["file"]["name"] . "已经存在！";
  }
  else
  {
  	//move_uploaded_file(file,newloc)     将上传的文件移动到新位置。
     move_uploaded_file($_FILES["file"]["tmp_name"],"img/".name());    //或使用copy
     echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
  }
}
else{
	echo "只能上传图片类型格式!";
}





//删除上传的文件
//unlink() 函数删除文件。  若成功，则返回 true，失败则返回 false。
$file = "img/logo.png";
if (!unlink($file))
{
  echo ("Error deleting $file");
}
else
{
  echo ("Deleted $file");
}







?>