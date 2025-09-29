<?php
function read_data($path){
    if(!file_exists($path)) return [];
    $json = file_get_contents($path);
    $arr = json_decode($json, true);
    return $arr ?: [];
}
function write_data($path, $data){
    file_put_contents($path, json_encode($data, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE));
}
