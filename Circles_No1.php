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
$zjoin = $_GET['zjoin'];
$space = $_GET['space'];
$regist_day = date('Y-m-d (H:i)');
$name1 = $_GET['name1'];
$tell1 = $_GET['tell1'];
$jo = $_GET['jo'];
$sider = $_GET['sider'];
$msider = $_GET['msider'];
$relay = $_GET['relay'];

// DB 연동
$sql = "select * from circles ";
$result = mysql_query($sql, $connect);

$sql = "insert into circles (name, tell, zjoin, sider, regist_day, msg, gita) 
values('$name','$tell','$zjoin','$sider',
                    '$regist_day','$msg','$gita')";
mysql_query($sql, $connect);

mysql_close();


//  동아리 뷰어 관리자 텔
$url = BASE_URL.'/sendMessage?chat_id=-1001330071019&text='.urlencode($name1).urlencode($name).urlencode($space).urlencode($tell1).urlencode($tell).urlencode($space).urlencode($jo).urlencode($zjoin).urlencode($space).urlencode($msider).urlencode($sider).urlencode($space).urlencode($msg).urlencode($gita);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$response = curl_exec($ch);
curl_close($ch);

$test = $_GET['test'];
switch($zjoin){

    // case "01 램덤(청년)": 
    //     $test = -1; 
    //     break;

    case "02 감성변태(청년)🍃": 
        $test = -1001378003012; 
        break;

    case "03 무비터칭(청년)🍃": 
        $test = -1001268008124; 
        break;

    case "04 이웃집외국인(청년)🍃": 
        $test = -1001331525362; 
        break;

    case "05 누리(청년)🍃": 
        $test = -1001302999501; 
        break;

    case "06 서울명소탐방(청년)🍃": 
        $test = -1001179725770; 
        break;

    case "07 STOP(청년)🍃": 
        $test = -1001307341400; 
        break;

    case "08 심폐술(청년)🍃": 
        $test = -1001217059893; 
        break;

    // case "09 TWIN-TINT(청년)🍃": 
    //     $test = -1001223541064; 
    //     break;

    // case "10 함께영화보기(청년)🍃": 
    //     $test = -1001345987897; 
    //     break;

    // case "11 소소한버킷리스트(청년)🍃": 
    //     $test = -1001179256452; 
    //     break;

    case "12 중국어(부녀)🍃": 
        $test = -1001258044367; 
        break;

    case "13 한글 붓글씨(장년)🍃": 
        $test = -1001197941464; 
        break;

    case "14 우남까(행정)🍃": 
        $test = -1001350183681;
        break;

    case "15 챠동차동(행정)🍃": 
        $test = -1001286182195; 
        break;

    case "21 식탁(청년)🍃": 
        $test = -1001315209640; 
        break;

        // case "22 Diet&healing(청년)": 
        // $test = -1; 
        // break;

        // case "23 P.T 운동(청년)": 
        // $test = -1; 
        // break;

        // case "24 하트힙(청년)": 
        // $test = -1001150638608; 
        // break;

    case "25 비기너(청년)🍃": 
        $test = -1001345999975; 
        break;

    case "26 건강댄스 다이어트(장년)🍃": 
        $test = -1001246278488; 
        break;

    case "27 걷기 다이어트(장년)🍃": 
        $test = -1001158332522; 
        break;

    // case "28 주말등산(장년)🍃": 
    //     $test = -1001386118718; 
    //     break;

        // case "29 족구(장년)": 
        // $test = -1; 
        // break;

    case "30 배드민턴(장년)🍃": 
        $test = -1001343544542; 
        break;

    case "31 당구친구(장년)🍃": 
        $test = -1001282871377; 
        break;
        
    case "32 이글스FC(장년)🍃": 
        $test = -1001204960886; 
        break;
        
    case "33 명문,88탁구(장년)🍃": 
        $test = -1001162062312; 
        break;

    case "34 헬스 다이어트(장년)🍃": 
        $test = -1001165854440; 
        break;

    case "35 슬램덩크(장년)🍃": 
        $test = -1001294918461; 
        break;

    case "36 요가(부녀)🍃": 
        $test = -1001154247752; 
        break;

    case "37 위션(청년)🍃": 
        $test = -1001326480874; 
        break;

    case "41 하플(청년)🍃": 
        $test = -1001218840049; 
        break;
        
    case "42 덩굴(청년)🍃": 
        $test = -1001311173074; 
        break;
        
    case "43 독서하브루타(부녀)🍃": 
        $test = -1001362215695; 
        break;
        
    case "44 구약스토리 텔링(장년)🍃": 
        $test = -1001162424440; 
        break;

    case "45 마태강해(행정)🍃": 
        $test = -1001316018937; 
        break;

        // case "51 제멋대로(청년)": 
        // $test = -1; 
        // break;

    // case "52 식탁보(청년)🍃": 
    //     $test = -1001193864890; 
    //     break;

    case "53 타로로(청년)🍃": 
        $test = -1001266447357; 
        break;

    case "54 리커버리 공방(청년)🍃": 
        $test = -1001151373418; 
        break;

    case "55 소소한동아리(청년)🍃": 
        $test = -1001282825712; 
        break;

    case "56 명화그리기 그사람(부녀)🍃": 
        $test = -1001212732520; 
        break;

    case "57 공동육아(부녀)🍃": 
        $test = -1001339022660; 
        break;

    case "58 스타일메이퀸(부녀)🍃": 
        $test = -1001184473560; 
        break;

    case "59 생생명화(부녀)🍃": 
        $test = -1001175510288; 
        break;

    case "60 인문학 토크(부녀)🍃": 
        $test = -1001180954656; 
        break;

    case "61 귀반사(부녀)🍃": 
        $test = -1001397806946; 
        break;

    case "62 팔체질(부녀)🍃": 
        $test = -1001299638340; 
        break;

    case "63 수채켈리(부녀)🍃": 
        $test = -1001214090098; 
        break;

    case "64 봉사캠프(장년)🍃": 
        $test = -1001281707263; 
        break;

    case "65 애그머니(장년)🍃": 
        $test = -1001313552937; 
        break;

    case "66 잡담(장년)🍃": 
        $test = -1001215787840; 
        break;

    case "67 수리수리(장년)🍃": 
        $test = -1001315537480; 
        break;

    case "68 미인[자격증](행정)🍃": 
        $test = -1001270194522; 
        break;

    case "69 블링블링네일아트(행정)🍃": 
        $test = -1001286129196; 
        break;

    case "70 미인[부녀반](행정)🍃": 
        $test = -1001353262831; 
        break;

    case "71 미인[챠밍수업](행정)🍃": 
        $test = -1001311489487; 
        break;

    case "72 미인 뷰티클래스(행정)🍃": 
        $test = -1001218320642; 
        break;

    case "73 좌우명쓰기(장년)🍃": 
        $test = -1001332154267; 
        break;

    case "79 뜨사랑실사랑(부녀)🍃": 
        $test = -1001353446288; 
        break;

    case "80 네일아트(부녀)🍃": 
        $test = -1001376985117; 
        break;

    case "81 세계명화그리기(부녀)🍃": 
        $test = -1001380394082; 
        break;

        case "82 캘리그라피(부녀)🍃": 
        $test = -1001386617351; 
        break;

    case "83 천연 면사랑(부녀)🍃": 
        $test = -1001389296090;
        break;

    case "84 신생아 모자뜨기(부녀)🍃": 
        $test = -1001343727399; 
        break;

    case "85 천생ㆍ연분(부녀)🍃": 
        $test = -1001319782025; 
        break;

    case "86 옹기종기 뜨개방(부녀)🍃": 
        $test = -1001315710403; 
        break;

    case "87 꼼지락(부녀)🍃": 
        $test = -1001112773287; 
        break;

    // case "88 뷰티풀마인드(부녀)🍃": 
    //     $test = -1001214594450; 
    //     break;

    case "89 뜨개질(부녀)🍃": 
        $test = -1001293810740; 
        break;

    case "90 소확행(행정)🍃": 
        $test = -1001253487088; 
        break;

    case "91 집안센스수납(행정)🍃":
        $test = -1001253487088; 
        break;

    case "92 삼시세끼(행정)🍃": 
        $test = -1001253487088; 
        break;

    case "93 쓱(청년)🍃": 
        $test = -1001186224471; 
        break;

    // case "94 사진동아리(청년)🍃": 
    //     $test = -1001239371470; 
    //     break;

    case "95 열린 수채캘리(청년)🍃": 
        $test = -1001263082054; 
        break;

    case "96 공친소(행정)🍃": 
        $test = -1001258794871; 
        break;

    case "97 GameP.A(행정)🍃": 
        $test = -1001153724163; 
        break;

    case "98 아사모(행정)🍃": 
        $test = -1001260502601; 
        break;

    case "99 나영만(행정)🍃": 
        $test = -1001239913860; 
        break;

    // case "100 모두의 사진관(행정)🍃": 
    //     $test = -1001319016011; 
    //     break;

    case "110 음사모(장년)🍃": 
        $test = -1001171218801; 
        break;

    case "111 뮤직마켓(장년)🍃": 
        $test = -1001359630017; 
        break;

    case "112 노래교실 짐베이(장년)🍃": 
        $test = -1001394690780; 
        break;

    case "113 음악교실(장년)🍃": 
        $test = -1001354399155; 
        break;

    case "114 물빛소리합창단(행정)🍃": 
        $test = -1001205326892; 
        break;

    // case "115 통기타모여요(행정)🍃": 
    //     $test = -1001216025269; 
    //     break;
        
    default : echo "선택해주세요";       
}


$url = BASE_URL.'/sendMessage?chat_id='.$test.'&text='.urlencode($name1).urlencode($name).urlencode($space).urlencode($tell1).urlencode($tell).urlencode($space).urlencode($jo).urlencode($zjoin).urlencode($space).urlencode($msider).urlencode($sider).urlencode($space).urlencode($msg).urlencode($gita).urlencode($space).urlencode($relay);
// $url = "http://www.google.com";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$response = curl_exec($ch);
curl_close($ch);

echo $response;
