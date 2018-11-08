
<?php
/*
https://telegram.me/botfather 접속하여 봇아빠를 채팅창에 호출 하고 다음 커맨드를 입력

-------------------------------

봇이름 /newbot
봇실재아이디(끝에 bot을 붙여준다)
/token /setabouttext 봇정보 안내문구
/setdescription 접속문구

-------------------------------
*/

header('Content-Type: text/html; charset=utf-8');
include './dbconnection.php';
$connect=dbconn();
# 기본환경설정
define('TOKEN_KEY','575677939:AAEszVgZdaoRtdzqWBTjc-gnHQSWZZv9qY0');
define('BASE_URL', 'https://api.telegram.org/bot'.TOKEN_KEY);

$num = $_GET['num'];
$msg = $_GET['msg'];
$name = $_GET['name'];
$tell = $_GET['tell'];
$gita = $_GET['gita'];
$join = $_GET['join'];
$space = $_GET['space'];
$regist_day = date('Y-m-d (H:i)');
$name1 = $_GET['name1'];
$tell1 = $_GET['tell1'];
$jo = $_GET['jo'];
$sider = $_GET['sider'];
$msider = $_GET['msider'];

// DB 연동
$sql = "select * from circles ";
$result = mysql_query($sql, $connect);

$sql = "insert into circles (name, tell, zjoin, sider, regist_day, msg, gita) 
values('$name','$tell','$zjoin','$sider',
                    '$regist_day','$msg','$gita')";
mysql_query($sql, $connect);

mysql_close();

//  SCJ Circles 개인 봇

$url = BASE_URL.'/sendMessage?chat_id=194714710&text='.urlencode($name1).urlencode($name).urlencode($space).urlencode($tell1).urlencode($tell).urlencode($space).urlencode($jo).urlencode($join).urlencode($space).urlencode($msider).urlencode($sider).urlencode($space).urlencode($msg).urlencode($gita);
// $url = "http://www.google.com";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$response = curl_exec($ch);
curl_close($ch);

