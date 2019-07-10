<?php
$arr=['1','2','3','4'];
function getJiOu($arr){
    $ji=[];
    $ou=[];
    foreach ($arr as $key=>$value){
        if($value%2==0){
            $ou[]=$value;
        }else{
            $ji[]=$value;
        }
    }
    $arr=array_merge($ji,$ou);

    return $arr;
}
echo  "<pre>";
var_dump(getJiOu($arr));