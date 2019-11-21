<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/15
 * Time: 11:07
 * title:continue
 */
//continue 在循环结构用用来跳过本次循环中剩余的代码并在条件求值为真时开始执行下一次循环。
for($i=0;$i<5;$i++){
    if($i==2) continue;
    echo "$i <br/>";
}
?>