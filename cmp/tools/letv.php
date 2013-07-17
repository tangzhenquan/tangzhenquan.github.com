<?php
error_reporting(0);

function file_data($url) {
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        $ch = curl_init();
        $timeout = 30;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
        @ $c = curl_exec($ch);
        curl_close($ch);
        return $c;
}
function re_place($str) {
        $s = str_replace('\/', '/', $str);
        return $s;
}

function get_u($u) {
global $fname;
$list = '';
if ($u == 'c9') {
        $url='http://so.letv.com/list/'.$_GET['u'].'p1.html';   
        $url=file_data($url);
        preg_match('/<div class="pagenav">(.*)<\/div>/imsU',$url,$arr);
        preg_match('|(\d+)</a><a class="next"|',$arr[1],$page);
        $page=$page[1];
        if($page="10")for($i=1;$i<=$page;$i++){
        $q = 'http://so.letv.com/list/' . $u . '_a_mt_sp_vt_d2_o_p'.$i.'.html';

        $list.='<m list_src="'.$fname.'?n='.$q.'" label="第'.$i.'页"/>'."\n";

}}elseif ($u == 'c1_t-1_a-1_y-1_f-1_at1_o7_i-1_') {
        $url='http://so.letv.com/list/'.$_GET['u'].'p1.html';                
        $url=file_data($url);
        preg_match('/<div class="pagenav">(.*)<\/div>/imsU',$url,$arr);
        preg_match('|(\d+)</a><a class="next"|',$arr[1],$page);
        $page=$page[1];
        if($page="10")for($i=1;$i<=$page;$i++){
        $q2 = 'http://so.letv.com/list/'.$u.'p'.$i.'.html';
        $list.='<m list_src="'.$fname.'?sid='.$q2.'" label="第'.$i.'页"/>'."\n";

}}elseif ($u == 'search') {
        $url='http://yuanxian.letv.com/list/'.$_GET['u'].'_4,7_1_-1_1_7_-1_-1_-1_on.html';                $url=file_data($url);
        preg_match('/<div class="pagenav">(.*)<\/div>/imsU',$url,$arr);
        preg_match('|(\d+)</a><a class="next"|',$arr[1],$page);
        $page=$page[1];
        if($page="10")for($i=1;$i<=$page;$i++){
        $q21 = 'http://yuanxian.letv.com/list/'.$u.'_4,7_'.$i.'_-1_1_7_-1_-1_-1_on.html';
        $list.='<m list_src="'.$fname.'?vip='.$q21.'" label="第'.$i.'页"/>'."\n";
}}elseif ($u == 'search_4_') {
        $url='http://yuanxian.letv.com/list/'.$_GET['u'].'2_1_2_7_-1_-1_-1_on.html';                 $url=file_data($url);
        preg_match('/<div class="pagenav">(.*)<\/div>/imsU',$url,$arr);
        preg_match('|(\d+)</a><a class="next"|',$arr[1],$page);
        $page=$page[1];
        if($page="10")for($i=1;$i<=$page;$i++){
        $q21 = 'http://yuanxian.letv.com/list/'.$u.''.$i.'_1_2_7_-1_-1_-1_on.html';
        $list.='<m list_src="'.$fname.'?viptv='.$q21.'" label="第'.$i.'页"/>'."\n";
        }}else {
        $url='http://so.letv.com/list/'.$_GET['u'].'p1.html';                
        $url=file_data($url);
        preg_match('/<div class="pagenav">(.*)<\/div>/imsU',$url,$arr);
        preg_match('|(\d+)</a><a class="next"|',$arr[1],$page);
        $page=$page[1];
        if($page="10")for($i=1;$i<=$page;$i++){
        $q4 = 'http://so.letv.com/list/'.$u.'p'.$i.'.html';

        $list.='<m list_src="'.$fname.'?m='.$q4.'" label="第'.$i.'页"/>'."\n";
        }}
        return $list;
}
function get_s($s) {
global $fname;
$list = '';
if ($s == 'c4_i_a_at_vt_d1_o_') {
        $url='http://so.letv.com/list/'.$_GET['s'].'p1.html';                
        $url=file_data($url);
        preg_match('/<div class="pagenav">(.*)<\/div>/imsU',$url,$arr);
        preg_match('|(\d+)</a><a class="next"|',$arr[1],$page);
        $page=$page[1];
        if($page="10")for($i=1;$i<=$page;$i++){
        $q4 = 'http://so.letv.com/list/'.$s.'p'.$i.'.html';
        $list.='<m list_src="'.$fname.'?o='.$q4.'" label="第'.$i.'页"/>'."\n";

}}elseif ($s == 'c12_i_a_at_vt_d1_o_') {
        $url='http://so.letv.com/list/'.$_GET['s'].'p1.html';                
        $url=file_data($url);
        preg_match('/<div class="pagenav">(.*)<\/div>/imsU',$url,$arr);
        preg_match('|(\d+)</a><a class="next"|',$arr[1],$page);
        $page=$page[1];
        if($page="10")for($i=1;$i<=$page;$i++){
        $q4 = 'http://so.letv.com/list/'.$s.'p'.$i.'.html';
        $list.='<m list_src="'.$fname.'?o='.$q4.'" label="第'.$i.'页"/>'."\n";

        }}else {
        $url='http://www.letv.com/vchannel/new_ch'.$_GET['s'].'_d1_p1.html';                
        $url=file_data($url);
        preg_match('/<div class="pagenav">(.*)<\/div>/imsU',$url,$arr);
        preg_match('|(\d+)</a><a class="next"|',$arr[1],$page);
        $page=$page[1];
        if($page="10")for($i=1;$i<=$page;$i++){
        $q4 = 'http://www.letv.com/vchannel/new_ch'.$s.'_d1_p'.$i.'.html';
        $list.='<m list_src="'.$fname.'?j='.$q4.'" label="第'.$i.'页"/>'."\n";

        }}
        return $list;
}
function get_leshitv($leshitv) {
global $fname;
$list = '';
if ($leshitv == ''.$_GET['leshitv'].'') {
        $url='http://so.letv.com/list/c2_t-1_a'.$_GET['leshitv'].'_y-1_f_at_o1_i-1_p1.html';                
        $url=file_data($url);
        preg_match('/<div class="pagenav">(.*)<\/div>/imsU',$url,$arr);
        preg_match('|(\d+)</a><a class="next"|',$arr[1],$page);
        $page=$page[1];
        if($page="10")for($i=1;$i<=$page;$i++){
        $q4 = 'http://so.letv.com/list/c2_t-1_a'.$u.'_y-1_f_at_o1_i-1_p'.$i.'.html';
        $list.='<m list_src="'.$fname.'?m='.$q4.'" label="第'.$i.'页"/>'."\n";
        }}
        return $list;
}
function get_o($o) {
        global $fname;
        $urll=file_data($o);
        $list = '';
        preg_match_all('#<dd class="tit"><a href="http://www.letv.com/ptv/vplay/(\d+).html" title="([^\"><\']*)" target="_blank">#iUs',$urll,$m1);
        preg_match_all('#src="([^\"><\']*)jpg">#iUs',$urll,$m2);
        $idw=$m1[1];
        $tit=$m1[2];
        foreach($idw as $k=>$z ){
        $list.='<m src="'.$fname.'?vid='.$z.'" label="'.$tit[$k].'"image="'.$m2[1][$k].'jpg"/>'."\n";
       }
        return $list;
}
function get_j($j) {
        global $fname;
        $urlll=file_data($j);
        $list = '';
        preg_match_all('#<dt><a target="_blank" title="([^\"><\']*)"\s+(.*)href="http://www.letv.com/ptv/vplay/(\d+).html"><img#iUs',$urlll,$mm);
        preg_match_all('#src="([^\"><\']*)jpg">#iUs',$urlll,$mm2);
        $idw1=$mm[3];
        $tit1=$mm[1];
        foreach($idw1 as $k=>$z1 ){
        $list.='<m src="'.$fname.'?vid='.$z1.'" label="'.$tit1[$k].'"image="'.$mm2[1][$k].'jpg"/>'."\n";
       }
        return $list;
}
function get_n($n) {
        global $fname;
        $url1=file_data($n);
        $list = '';
        preg_match_all('#<dl class="m_dl">\s+(.*)<dt>\s+(.*)<a href="http://www.letv.com/ptv/pplay/(\d+)/1.html"\s+(.*)title="([^\"><\']*)" target="_blank">\s+(.*)<img src=\s+(.*)"([^\"><\']*)"\s+(.*)onerror=#iUs',$url1,$m);
        $ids=$m[3];
        $title=$m[5];
        foreach($ids as $k=>$v ){
        $list.='<m list_src="'.$fname.'?ls='.$v.'" label="'.$title[$k].'"image="'.$m[8][$k].'"/>'."\n";
       }
        return $list;
}
function get_m($m) {
        global $fname;
        $url3=file_data($m);
        $list = '';
        preg_match_all('#<dl class="m_dl">\s+(.*)<dt>\s+(.*)href="http://so.letv.com/(.*)/(.*).html"\s+(.*)title="(.*)" target="_blank"><img\s+(.*)src="(.*)"\s+(.*)<i>(.*)</i>#iUs',$url3,$e);
        $ids1=$e[4];
        $title1=$e[6];
        foreach($ids1 as $k1=>$v1 ){
       $list.='<m list_src="'.$fname.'?ls='.$v1.'" label="'.$title1[$k1].'"image="'.$e[8][$k1].'"text="'.$e[10][$k1].'"/>'."\n";
       }
        return $list;
}
function get_sid($sid) {
        global $fname;
        $url4=file_data($sid);
        $list = '';
        preg_match_all('#<dl class="m_dl">\s+(.*)<dt>\s+(.*)href="http://www.letv.com/ptv/pplay/(\d+)/1.html"\s+(.*)title="([^\"><\']*)" target="_blank"><img\s+(.*)src="([^\"><\']*)"\s+(.*)alt#iUs',$url4,$b);
        $ids2=$b[3];
        $title2=$b[5];
        foreach($ids2 as $k2=>$v2 ){
       $list.='<m src="'.$fname.'?lsvid='.$v2.'" label="'.$title2[$k2].'"image="'.$b[7][$k2].'"/>'."\n";
       }
        return $list;
}
function get_lsvid($lsvid) {
        global $fname;
        $url6='http://hot.vrs.letv.com/vlist?callback=LETV.Cinema.DespList.gotList&pid=' . $_GET['lsvid'] . '&f=1';
        $a1=file_data($url6);
        preg_match_all('#key":"1","mid":(\d+),"name(.*)vid":"([0-9]+)","viewPic#iUs',$a1,$y); 
        $ids3=$y[3];
        foreach($ids3 as $k2=>$v2 ){      
        $url7='http://app.letv.com/v.php?id=' . $v2 . '';
        $str=file_data($url7);
        $url8= "http://g3.letv.cn/";
        $url9= "?start={start_bytes}";
        preg_match_all('#,"newuri":"&df=(.*)&br=#iUs',$str,$c1);
        $e1=re_place($c1[1]);
        foreach($e1 as $key1=>$value2){
        $list .= "$url8$value2$url9";
 }}
header("location:$list");

}
function get_vip($vip) {
        global $fname;
        $url5=file_data($vip);$url6='http://hot.vrs.letv.com/vlist?callback=LETV.Cinema.DespList.gotList&pid=' . $_GET['ls'] . '&f=1';
        $list = '';
        preg_match_all('#div class="pic">\s+(.*)<a href="/detail/(\d+).html" target="_blank" title="([^\"><\']*)">\s+(.*)<img src="([^\"><\']*)" title="([^\"><\']*)" />\s+(.*)<b class="bk"></b>#iUs',$url5,$f);
        $ids3=$f[2];
        $title3=$f[6];
        foreach($ids3 as $k3=>$v3 ){          
        $list.='<m src="'.$fname.'?lsvid='.$v3.'" label="'.$title3[$k3].'"image="'.$f[5][$k3].'"/>'."\n";
       }
        return $list;
}
function get_viptv($viptv) {
        global $fname;
        $url5=file_data($viptv);
        $list = '';
        preg_match_all('#div class="pic">\s+(.*)<a href="/detail/(\d+).html" target="_blank" title="([^\"><\']*)">\s+(.*)<img src="([^\"><\']*)" title="([^\"><\']*)" />\s+(.*)<b class="bk"></b>#iUs',$url5,$f);
        $ids3=$f[2];
        $title3=$f[6];
        foreach($ids3 as $k3=>$v3 ){            
        $list.='<m list_src="'.$fname.'?ls='.$v3.'" label="'.$title3[$k3].'"image="'.$f[5][$k3].'"/>'."\n";
       }
        return $list;
}
function get_ls($ls) {
        global $fname;
        $url6='http://hot.vrs.letv.com/vlist?callback=LETV.Cinema.DespList.gotList&pid=' . $_GET['ls'] . '&f=1';
        $str=file_data($url6);
        $list = '';
        preg_match_all('#key":"(.*)","mid":([0-9]+),"name":"([^\"><\']*)","periodNO(.*)vid":"([0-9]+)","viewPic":"(.*).jpg"#iUs',$str,$a);
        $c=$a[5];
        $g=$a[3];
        foreach($c as $kk2=>$x ){
       $list.='<m src="'.$fname.'?vid='.$x.'" label="YY6042-'.$g[$kk2].'"image="'.$a[6][$kk2].'.jpg"/>'."\n";
        }
      return $list;
}
function get_vid($vid) {
        global $fname;
        $url7='http://app.letv.com/v.php?id=' . $_GET['vid'] . '';
        $str=file_data($url7);
        $url8= "http://g3.letv.cn/";
        $url9= "?start={start_bytes}";
        preg_match_all('#,"newuri":"&df=(.*)&br=#iUs',$str,$c1);
        $e1=re_place($c1[1]);
        foreach($e1 as $key1=>$value2){
        $list .= "$url8$value2$url9";
 }
header("location:$list");
}
function default_list() {
global $fname;
$leshi1=array('-1'=>'全部','1'=>'大陆','2'=>'香港','3'=>'台湾','41'=>'日本','42'=>'韩国','71'=>'美国','72'=>'英国','101'=>'泰国');  
$type=array("c3_t_a_y_f_at_o_"=>"动漫","c11_i_a_t_tv_o_"=>"综艺","c9"=>"音乐","c1_t-1_a-1_y-1_f-1_at1_o7_i-1_"=>"电影","search"=>"VIP电影","search_4_"=>"VIP电视剧");
$qt=array("c12_i_a_at_vt_d1_o_"=>"体育","c4_i_a_at_vt_d1_o_"=>"娱乐","14"=>"汽车","16"=>"纪录片","17"=>"公开课","8"=>"其他");
$list = '';
$list.='<m label="乐视电视剧">'."\n";
foreach($leshi1 as $key=>$id){ 
$list.='<m list_src="'.$fname.'?leshitv='.$key.'" label="'.$id.'" />'."\n";
     }
$list.='</m>'."\n";
foreach ($type as $k => $v) {
$list .= '<m label="' . $v . '" list_src="' . $fname . '?u=' . $k . '" />' . "\n";
}
foreach($qt as $key=>$id){     
$list.='<m label="'.$id.'" list_src="' . $fname . '?s=' . $key . '"  />'."\n";
        }
return $list;
}
$fname = 'http://www.yy6864.com/cmp/tools/letv.php';
header("Content-type: text/xml;charset=gbk");
$xml = "<?xml version=\"1.0\" encoding=\"gbk\" ?>\n<list>\n";
if (isset ($_GET['u'])) {
        $xml .= get_u($_GET['u']);
}
elseif (isset ($_GET['n'])) {
        $xml .= get_n($_GET['n']);
}
elseif (isset ($_GET['m'])) {
        $xml .= get_m($_GET['m']);
}
elseif (isset ($_GET['sid'])) {
        $xml .= get_sid($_GET['sid']);
}
elseif (isset ($_GET['vip'])) {
        $xml .= get_vip($_GET['vip']);
}
elseif (isset ($_GET['viptv'])) {
        $xml .= get_viptv($_GET['viptv']);
}
elseif (isset ($_GET['vid'])) {
        $xml .= get_vid($_GET['vid']);
}
elseif (isset ($_GET['ls'])) {
        $xml .= get_ls($_GET['ls']);
}
elseif (isset ($_GET['lsvid'])) {
        $xml .= get_lsvid($_GET['lsvid']);
}
elseif (isset ($_GET['s'])) {
        $xml .= get_s($_GET['s']);
}
elseif (isset ($_GET['o'])) {
        $xml .= get_o($_GET['o']);
}
elseif (isset ($_GET['j'])) {
        $xml .= get_j($_GET['j']);
}
elseif (isset ($_GET['leshitv'])) {
        $xml .= get_leshitv($_GET['leshitv']);
}
elseif (isset ($_GET['p'])) {
        get_p($_GET['p']);
} else {
        $xml .= default_list();
}
$xml .= "</list>\n";
echo $xml;
?>