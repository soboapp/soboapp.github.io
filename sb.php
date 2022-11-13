<?php
$str=$_GET['t'];
if(strstr($str,"tj"))
{
   $str='https://m.sbyy1.com/';
}else if(strstr($str,"dy"))
{
   $str='https://m.sbyy1.com/t/1-1.html';
}else if(strstr($str,"jj"))
{
   $str='https://m.sbyy1.com/t/2-1.html';
}else if(strstr($str,"fl"))
{
   $str='https://m.sbyy1.com/t/18-1.html';
}else if(strstr($str,"ll"))
{
   $str='https://m.sbyy1.com/index.php?m=vod-list-id-16-pg-1-order--by-time-class--year--letter--area--lang-.html';
}else {
   //$str='http://sobo.me';
}

Header("HTTP/1.1 303 See Other"); 
Header("Location: $str"); 
exit; 
?>
