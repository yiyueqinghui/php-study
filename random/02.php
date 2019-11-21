<?php
//最快的   效率最高的方法	
//php生成随机数  方法二      array_rand($array,$number)   返回数组$array中$number个随机键名
function make_password($len=8){
	// 密码字符集，可任意添加你需要的字符  
    $chars = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h',   
    'i', 'j', 'k', 'l','m', 'n', 'o', 'p', 'q', 'r', 's',   
    't', 'u', 'v', 'w', 'x', 'y','z', 'A', 'B', 'C', 'D',   
    'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L','M', 'N', 'O',   
    'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y','Z',   
    '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '!',   
    '@','#', '$');  
    $keys = array_rand($chars,$len);
    var_dump($keys);
    echo "<br/>";
    $password = '';
    for($i=0;$i<count($keys);$i++){
    	$password .=$chars[$keys[$i]];
    }
    return $password;
}

echo make_password();
?>