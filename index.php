<?php




$html =  file_get_contents('https://muzoff.net/sborniki/lovemusic/');



preg_match_all("/\<{1}a\s{1}class\={1}\"{1}play\-{1}dl\s{1}play\-{1}btn\"{1}\s{1}href\={1}\"{1}([a-zA-Z0-9\:\/\.\_\-]+)\"{1}/",$html,$array);


foreach ($array[1] as $key=>$value){
    $mp3 = file_get_contents($value);
    $newname = uniqid();
    file_put_contents("music/$newname.mp3",$mp3);
}