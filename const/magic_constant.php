<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/14
 * Time: 16:45
 * title:魔术常量
 */
 $html='
    <h4>有八个魔术常量它们的值随着它们在代码中的位置改变而改变</h4>
    <ul>
      <li>__LINE__   	文件中的当前行号。</li>
      <li>__FILE__   	文件的完整路径和文件名。如果用在被包含文件中，则返回被包含的文件名</li>
      <li>__DIR__    	文件所在的目录。如果用在被包括文件中，则返回被包括的文件所在的目录。</li>
      <li>__FUNCTION__  	本常量返回该函数被定义时的名字</li>
      <li>__CLASS__     	本常量返回该类被定义时的名字</li>
      <li>__TRAIT__     	此常量返回 trait 被定义时的名字</li>
      <li>__METHOD__    	类的方法名（PHP 5.0.0 新加）。返回该方法被定义时的名字</li>
      <li>__NAMESPACE__     	当前命名空间的名称</li>
</ul> ';
echo $html;
echo "<br/>";

echo __LINE__;
echo "<br/>";

echo __FILE__;
echo "<br/>";

echo __DIR__;
echo "<br/>";








?>