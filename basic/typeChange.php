<?php
    $bol = false;
    var_dump((int) $bol);       //(type) 值    强制类型转换   布尔值false转换为int为1；true转化为int为0；
    $bol = !$bol;
    var_dump((int) $bol);

    $score = 77.77;
    echo ((int) $score);
    echo "<br/>";
    echo ((int) ((10/3)*10));
    echo "<br/>";
    echo (int) ((0.1+0.7) * 10);     //绝不要将未知的分数/小数强制转换为 integer，这样有时会导致不可预料的结果。
    echo "<br/>";
    //以十进制能够精确表示的有理数如 0.1 或 0.7，无论有多少尾数都不能被内部所使用的二进制精确表示，
    // 因此不能在不丢失一点点精度的情况下转换为二进制的格式。这就会造成混乱的结果：例如，floor((0.1+0.7)*10)
   //通常会返回 7 而不是预期中的 8，因为该结果内部的表示其实是类似 7.9999999999999991118...。

    //所以永远不要相信浮点数结果精确到了最后一位，也永远不要比较两个浮点数是否相等
    //如果真要比较两个浮点数是否相等，可以采用最小差别值法
     $a = 123.45678;
     $b = 123.45699;
     $epsilon = 0.001;    //自定义的最小精度
     if(abs($a-$b)<$epsilon){
         echo "$a and $b equal";
     }else{
         echo "$a and $b inequal";
     }
     echo "<br/>";

    $num = NAN;       //
    $num+=10;
    var_dump($num);






?>