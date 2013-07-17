<?php
error_reporting(0);
header("Content-type:text/html; charset=UTF-8");
$fname='http://'.$_SERVER['SERVER_NAME'].$_SERVER["SCRIPT_NAME"];
$xml= "<list>\n";
if(isset($_GET['id'])){
   $url='http://tu.video.qiyi.com/tvx/album/'.$_GET['id'].'/672a074c2e4bf1fd53310df498995cae/';
   $url= file_get_contents($url);
   $urlstr = str_replace ("var playlist=","",$url);
   $obj = json_decode($urlstr);
   $json=json_decode($urlstr)->data;
  foreach($json as $son){
     $title=$son->title;  
     $vid=$son->videoId;  
  $xml.='<m type="qiyi" src="http://cache.video.qiyi.com/v/'.$vid.'" label="YY6042-'.$title.'"/>'."\n";
   }
}
$xml.='</list>';
echo $xml;
?>