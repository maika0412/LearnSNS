<?php

//echoではarreyは出力できないのでprint
$hoge = ['ja' => 'りんご','us' => 'apple'];
$array =["ringo" => $hoge];

$array["ringo"]["ja"] = "バナナ";
$array['ringo']["ja"] = "バナナ";

print_r($array["ringo"]["ja"]);
