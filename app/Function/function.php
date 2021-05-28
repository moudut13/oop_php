<?php

function move($photo): string
{
    $photo_name = $photo['name'];
    $temp = $photo['tmp_name'];
    $photo_name = $_FILES['photo']['name'];
    $photo_arr = explode('.',$photo_name);
    $txt = end($photo_arr);
    $quine_name = md5(rand(1,999999).time()).".".$txt;
    move_uploaded_file($temp,"assets/media/student/".$quine_name);
    return $quine_name;


}
