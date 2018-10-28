<?php
include 'head.php';
include 'BiliAuth.php';
include 'HttpClient.php';
use Lkeme\BiliAuth;
$api = new BiliAuth();
$username = $_POST['name'];
$password = $_POST['pass'];
$captcha = $_POST['captcha'];
$cookie = $_POST['cookie'];
$data = $api->loginByCaptcha($username, $password, $captcha, $cookie);
//echo $data;
$data = json_decode($data, JSON_UNESCAPED_UNICODE);
//echo $data;
if (isset($data['code']) && $data['code']) {
    echo '<p class="main"></br><a href="index.php">登陆失败，点此返回</a></br></br></p>';
    echo '<pre>登陆失败</pre></div><p class="foot">Hosted by 猫不乐</p></body></html>';
} else {
setcookie('bili_cookies', $data['data']['cookieInfo'], time()+3600*24*31*365);
setcookie('bili_jct', $data['data']['csrfToken'], time()+3600*24*31);
setcookie('bili_name', $data['data']['userName'], time()+3600*24*31*365);
echo '<p class="main"></br><a href="index.php">登陆成功，点此刷新</a></br></br></p>';
echo '<pre>登陆成功</pre></div><p class="foot">Hosted by 猫不乐</p></body></html>';
}