<?php 
	$string = $_POST['strings'];
	$strlen = strlen($string);
    if($strlen<=1){
		echo "Panjang String : ", $strlen;
		exit;
    }
    $subStrlen = [];
 
    for($i=0;$i<$strlen;$i++){
        $subStrArr = [];
        $subStrArr[] = $string[$i];
        for($j=$i+1;$j<$strlen;$j++){
            $subStrArr[] = $string[$j];
            if(count(array_unique($subStrArr))!=count($subStrArr)){
                array_pop($subStrArr);
                break;
            }
 
        }
        $subStrlen = count($subStrArr)>count($subStrlen)?$subStrArr:$subStrlen;
    }

	echo "String Input : ", $string,"</br>";
	echo "Panjang String : ", count($subStrlen),"</br>";
	echo "String : ", implode($subStrlen);

	
?>

