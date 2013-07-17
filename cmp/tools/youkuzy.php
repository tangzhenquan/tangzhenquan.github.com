<?php



$fname='http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'];





function file_data($url, $bool=false) {



        for ($i = 0; $i < 3; $i++) {



                $data = file_get_contents($url);



                if ($data)



                        break;



        }



        if ($data){



                if ($bool) {return iconv('gbk', 'utf-8', $data);}



                return $data; 

        } 



        $ch = curl_init();



        $timeout = 60;



        curl_setopt($ch, CURLOPT_URL, $url);



        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);



        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);



        $data = curl_exec($ch);



        curl_close($ch);



        if ($bool) {return iconv('gbk', 'utf-8', $data);}



        return $data;



}



$youid=$_GET['id'];



if (isset ($youid)){



                    $fmt = "<m type='youku'    src='%s' label='%s'/> \n";



        $page = file_data('http://www.youku.com/show_episode/id_' . $youid . '.html');



                preg_match_all('#<a charset="(.*)" title="(.*)" href="http://v.youku.com/v_show/id_(.*).html" target="_blank">#iUs',$page,$u);



                foreach($u[3] as $key=>$value){



             $list .= sprintf($fmt,$value,$u[2][$key]);



         }



        echo "<list>$list</list>";        

                          



} else {



$fmt .= '<m list_src="'.$fname.'?id=%s" label="%s"color="#FFFFFF"  size="15"/>'. "\n";



$url = "http://zy.youku.com/top/";





             $page = file_data($url);



          



         preg_match_all('#<td class="show_title">(.*)<a title="(.*)" href="http://www.youku.com/show_page/id_(.*).html"  target="_blank">(.*)<span class="pub">#iUs',$page,$u);



          



                 foreach($u[3] as $key=>$value){



                        

            $list .= sprintf($fmt,$value,$u[2][$key]);



         }



        echo "<list>$list</list>";





} 

?>
