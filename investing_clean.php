<?php

$json=json_decode(file_get_contents('Result.json'));
$result=[];

foreach($json as $data){
    if(is_null($data->ticker) || is_null($data->url)){
        continue;
    }
    $result[$data->ticker]=$data->url;
}

file_put_contents('investing_mini.json',json_encode($result));