<?php
   function addTo($max){
   	if($max<20){
   		$max+=1;
   		echo "$max  <br/>";
   		addTo($max);
   	}
   }
   addTo(10);
?>