<?php
/**
 * Created by PhpStorm.
 * User: yiyueqinghui
 * Date: 2018/5/18
 * Time: 15:00
 * title:trait静态属性   静态方法
 */
  trait ad{
      public static $name="this is a ad";
      public static function Propaganda(){
          echo "propaganda as it<br/>";
      }
      public function big_say(){
          echo "a nice ad! ";
      }
  }

  class adClass{
      use ad;
  }

  $ad = new adClass();
  echo $ad::$name."<br/>";
  $ad::Propaganda();
  $ad->big_say();