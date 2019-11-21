<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/22
 * Time: 9:32
 */
//DateInterval构造函数的参数是一个表示时间间隔约定的字符串，
//这个时间间隔约定以字母P开头，后面跟着一个整数，最后是一个周期标识符，限定前面的整数。
//有效周期标识符如下： Y（年） M（月） D（日） W（周） H（时） M（分） S（秒）
// 间隔约定中既可以有时间也可以有日期，如果有时间需要在日期和时间之间加上字母T，
//例如，间隔约定P2D表示间隔两天，间隔约定P2DT5H2M表示间隔两天五小时两分钟。

$date = new DateTime('2000-01-04');     //???会出现1分钟的差距
//$date->add(new DateInterval('P7Y5M4DT4H3M2S'));
$date->add(new DateInterval('P1Y2D'));
echo $date->format('Y-m-d H:m:s');

