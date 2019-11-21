<?php
    //2.键值操作类：【都有返回值，没有在原来参数上修改】
     $arr = [
	   "10"=>11,
	   "5"=>5,
	   "17"=>71,
	   "8"=>2,
	   "0"=>0.5,
	   "h"=>'hellow',
	   "a"=>'abc'
	];
    
    //2.1 array_values($arr);//获取$arr中的值组成数组,（默认下标为数字）
     $allvals = array_values($arr);
     var_dump($allvals); 
    
    //2.2 array_column(array(),'name'[,name_two])
    // — 返回数组中指定的name(键)列，作为值（默认键是数字）。name_two为可选参数,若存在，则将name_two(键)列也返回，作为新数字的键。
     $allperson = [
        [
          "name"=>"yiyueqinghui",
          "age"=>27,
          "score"=>100,
          "isbol"=>true
        ],
        [
          "name"=>"chenjun",
          "age"=>29,
          "score"=>90,
          "isbol"=>false
        ],
        [
          "name"=>"lucy",
          "age"=>31,
          "score"=>50,
          "isbol"=>true
        ]
     ];
     $name = array_column($allperson,"name");
     var_dump($name);
     $name_score = array_column($allperson,"score","name");
     var_dump($name_score);
     
     //2.3  array_search($str,$arr) — 在数组中搜索给定的值，如果成功则返回首个相应的键名,否则返回false
     $keys= array_search("hellow",$arr);
     echo "$keys  <br/>";
     
     //2.4 in_array("str",$arr);//判断"str"在$arr中是否存在，【返回BOOL】
     var_dump(in_array("abc",$arr));
     
     //2.5 array_key_exists($key,$arr); //查询$arr中是否有$key，【返回BOOL】
     var_dump(array_key_exists("abc",$arr));
     
     //2.6 array_reverse($arr[,true]) — 返回单元顺序相反的数组 ,
     //若参数为true,则返回的相反的数组仍然保持原来数组的下标。若省略，则返回的相反的数组的下标重新排列
     $input = array("php", 4.0, array("green", "red"));
     var_dump($input);
     $reversed = array_reverse($input);        //键会收到影响，重新开始排练
     var_dump($reversed);
     $protected_key = array_reverse($input,true);   //键值保持与原来的相对应
     var_dump($protected_key);              



?>