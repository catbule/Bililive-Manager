<?php
include 'head.php';
include 'config.php';
$name = $_POST['name'];
$time = $_POST['time'];
$curl = curl_init(); 
$cookie = $_COOKIE['bili_cookies'];
curl_setopt($curl,CURLOPT_URL, 'http://api.live.bilibili.com/liveact/room_block_user'); 
curl_setopt($curl,CURLOPT_REFERER, 'https://live.bilibili.com'); 
curl_setopt($curl,CURLOPT_COOKIE,$cookie);
curl_setopt($curl,CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl,CURLOPT_POST, 1);
curl_setopt($curl,CURLOPT_POSTFIELDS, 'roomid='.$roomid.'&type=1&content='.$name.'&hour='.$time.'&csrf_token='.$_COOKIE['bili_jct']);
curl_setopt($curl,CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($curl,CURLOPT_REFERER,'https://live.bilibili.com/');
curl_setopt($curl,CURLOPT_USERAGENT,'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.56 Safari/536.5');
// 结果保存在$result中 
$result = curl_exec($curl); 
 echo $result;
if (preg_match('/(19|20)(\d{2})-(\d{1,2})-(\d{1,2})/', $result)) {
    echo '<p class="main">禁言成功，用户'.$name.'已被关进小黑屋</br></p>';
}
else echo '<p class="main">禁言失败，用户名错误或该用户已被禁言</br></p>';
echo '<p class="main"></br><a href="index.php">点此返回</a></br></p>';
echo '<pre>禁言状态</pre></div><p class="foot">Hosted by 猫不乐</p></body></html>';
curl_close($curl); 	