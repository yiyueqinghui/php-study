<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="utf-8"/>
       <title>Boolean</title>
   </head>
   <style>
       .red{
           color: red;
       }
   </style>
   <body>
        <h4>当转换为 boolean 时，以下值被认为是 false</h4>
        <ul>
            <li class="red"> 空字符串，以及字符串 "0"</li>
            <li class="red">不包括任何元素的数组</li>
            <li class="red">特殊类型 NULL（包括尚未赋值的变量）</li>
            <li class="red">从空标记生成的 SimpleXML 对象</li>
            <li>布尔值 FALSE 本身</li>
            <li>整型值 0（零）</li>
            <li>浮点型值 0.0（零）</li>
        </ul>
   </body>
</html>
<!--php-->
<?php
   /*
    * var_dump()    此函数显示关于一个或多个表达式的结构信息，包括表达式的类型与值
    * */
   var_dump((bool) "");          //(bool)""    它是先将""转化为布尔值，再在var_dump()中输出
   echo "<br/>";
   var_dump((bool) "0");        //"0"字符串 转boolean       为false;
   echo "<br/>";
   var_dump((bool) 0);
   echo "<br/>";
   var_dump((bool) array());     //空数组，为false
   echo "<br/>";

   $name=null;
   var_dump((bool) $name);
   echo "<br/>";

   var_dump((bool) "false");       //注意字符串false转义为Boolean，为true


   var_dump(round(100/11));
   var_dump((int) (100/11));






?>