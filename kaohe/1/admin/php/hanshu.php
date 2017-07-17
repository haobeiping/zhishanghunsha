<?php
function strLength($str)
{
    $length = strlen(preg_replace('/[\x00-\x7F]/', '', $str));
    $arr['en'] = strlen($str) - $length;
    $arr['cn'] = intval($length / 3);
    return $arr['en']+$arr['cn'];
}
?>