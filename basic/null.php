<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/14
 * Time: 10:11
 */
  $html = '
      <h4>在下列情况下一个变量被认为是 NULL：</h4>
      <ul>
         <li>被赋值为 NULL。</li>
         <li>尚未被赋值。</li>
         <li>被 unset()。</li>
      </ul>
  ';
print $html;
unset($html);
//$html = "who are you?";
echo $html;

?>