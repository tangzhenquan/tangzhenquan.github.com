<?
error_reporting(0);
if($id=$_GET['id']){

echo curl('http://v.youku.com/player/getPlayList/VideoIDS/'.$id);
}


function curl($url) {
   for($i=0;$i<2;$i++){
       @$data=file_get_contents($url);
       if($data){return $data;break;}
}     
                $ch = curl_init();
                $timeout = 30;
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
                $data = curl_exec($ch);
                curl_close($ch);
        return $data;
}
?>