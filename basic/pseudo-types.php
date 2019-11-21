<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/14
 * Time: 11:40
 */
$html='
   <h4>伪类型（pseudo-types） 是 PHP 文档里用于指示参数可以使用的类型和值。 请注意，它们不是 PHP 语言里原生类型。 所以不能把伪类型用于自定义函数里的类型约束（typehint）。</h4>
   <ul>
     <li>mixed    说明一个参数可以接受多种不同的（但不一定是所有的）类型。</li>
     <li>number    说明一个参数可以是 integer 或者 float。 </li>
     <li>array|object   意思是参数既可以是 array 也可以是 object。</li>
     <li>void     作为返回类型意味着函数的返回值是无用的。void 作为参数列表意味着函数不接受任何参数。</li>
     <li>在函数原型中，$... 表示等等的意思。当一个函数可以接受任意个参数时使用此变量名。</li>
</ul>
';
echo $html;





?>