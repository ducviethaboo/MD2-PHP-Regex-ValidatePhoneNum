<?php
function checkPhoneNum($str)
{
    $pattern = '/[(]+[0-9]{2}+[)]+[-]+[(]+[0]{1}+[0-9]{9}+[)]/';
    if (preg_match($pattern, $str)) {
        echo "Hop le";
    } else {
        echo "Khong hop le";
    }
}

checkPhoneNum("(a8)-(22222222)");