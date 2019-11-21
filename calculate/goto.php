<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/15
 * Time: 13:41
 * title:goto
 */
//goto 操作符可以用来跳转到程序中的另一位置
//PHP 中的 goto 有一定限制，目标位置只能位于同一个文件和作用域，
//也就是说无法跳出一个函数或类方法，也无法跳入到另一个函数。
goto a;
echo "hellow world!";

a:
 print_r("duizuiliunian welcome you!");
