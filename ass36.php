<?php
 $str = "LARRVEL";
if(ctype_lower($str)){
    //  we can aslo use strtolower($str) to convert upper case to lower case
 echo "all lower case";
}
else{
    echo "not in lower case";
}
  $str = "laravel";
if(ctype_upper($str)){
    //  we can aslo use strtoupper($str) to convert lower case to upper case
 echo "all upper case";
}
else{
    echo "not in lower case";
}
?>