<?php
    $myparam = $_POST['param'];
    $result = "";
    if($myparam == "segitiga")
    {
        $myvalue = $_POST['mynumber'];
        $myvalsplit = str_split($myvalue, 1);
        for($i = 0 ; $i < count($myvalsplit);$i++)
        {
            for($j = 0; $j<$i+1; $j++){
                if($j == 0 ){
                    $result .= $myvalsplit[$i]."0";
                }
                else
                {
                    $result .= "0";
                }
            }
            $result .= "<br>";
        }
        echo $result;
    }
    else if($myparam == "ganjil"){
        $result = "";
        $myvalue = $_POST['mynumber'];
        for($i = 0 ; $i <= $myvalue; $i++){
            if($i %2 == 1){
                $result .= $i."<br>";
            }
        }
        echo $result;
    }
    else if($myparam == "Prima"){
        $myvalue = $_POST['mynumber'];
        $result = "";
        for($i = 1; $i<$myvalue ; $i++){
            $jumlahnol = 0;
            for($j = 1; $j <= $i; $j++)
            {
                if($i % $j == 0)
                {
                    $jumlahnol +=1;
                    
                }
            }
            
            if($jumlahnol == 2){
                $result .= $i."<br>";
            }
                
        }
        echo $result;
    }
?>