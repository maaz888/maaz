<?php

//$x=25;
//$y =89;
///function additionel ()
//{$GLOBALS['z']= $GLOBALS['x'] + $GLOBALS['y'];
//}
//additionel();
//echo $z;
//echo $_SERVER['PHP_SELF'];echo "<br>";
//echo $_SERVER['SERVER_NAME'];echo "<br>";
//echo $_SERVER['HTTP_HOST'];echo "<br>";
//echo $_SERVER['HTTP_REFERER'];echo "<br>";
//echo $_SERVER['HTTP_USER_AGENT'];echo "<br>";
//echo $_SERVER['SCRIPT_NAME'];echo "<br>";
setcookie ("maaz","web devolper",time()+30*24*60*60);

echo $_COOKIE["maaz"];
?>