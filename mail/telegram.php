<?php
/**
 * Created by PhpStorm.
 * User: HAN
 * Date: 2018-03-27
 * Time: 오전 12:38
 */
header('Content-Type: text/html; charset=utf-8');

#기본환경설정
define('TOKEN_KEY','575677939:AAEszVgZdaoRtdzqWBTjc-gnHQSWZZv9qY0');
define('BASE_URL', 'https://api.telegram.org/bot'.TOKEN_KEY);


# CURL Function
function GetCurl($msg){ /*$date=array()){*/
    $url = BASE_URL.'/sendMessage?chat_id=194714710&text='.urlencode($msg);
    $rest = curl_init();
    curl_setopt($rest, CURLOPT_URL, $url);
    curl_setopt($rest, CURLOPT_POST, false);
    curl_setopt($rest, CURLOPT_RETURNTRANSFER, true);
    $Result = curl_exec($rest);
    curl_close($rest);

    return json_decode($Result, true);
}

$msg = $_GET['msg'];
$Result = GetCurl(BASE_URL.'/sendMessage?chat_id=194714710&text='.urlencode($msg));

if($_GET['type'] == 'room'){

    #채팅룸 추출
    $Room = GetCurl(BASE_URL.'/getUpdates?limit=100');
    $Room_id = array();
    foreach($Room['result'] as $k=>$v) {

            $Room_id[] = $v['message']['chat']['id'];
    }
    $Room_id = array_unique($Room_id);
    $room_id = array_values($Room_id);

    var_dump($Room_id);

    var_dump($Room);
} else {

        #지정발송
        if($_GET['room_id']) $Room_id = $_GET['room_id'];
        else $Room_id = array('11','22','33');

        if($_GET['msg']) $msg = $_GET['msg'];
        else $msg = date('Y-m-d H:i:s');

        if(sizeof($Room_id) > 0){
                # 발송하기

                foreach($Room_id as $k=>$v) {

                        $Result = GetCurl(BASE_URL.'/sendMessage?chat_id'.$v.'&text='.urlencode($msg));

                        print_r($Result);
                }
        }
        else if(is_array($Room_id) === false && $Room_id) {
                $Result = GetCurl(BASE_URL.'/sendMessage?chat_id='.$Room_id.'&text='.urlencode($msg));

                print_r($Result);
        }
}

?>