<?php
include 'head.php';	
include 'BiliAuth.php';
include 'HttpClient.php';
use Lkeme\BiliAuth;
$api = new BiliAuth();
if (empty($_COOKIE['bili_cookies']) || !$api->checkCookie($_COOKIE['bili_cookies'])) {
	$data = json_decode($api->getCapcha(), JSON_UNESCAPED_UNICODE);
	$img_src = $data['bash64_head'] . $data['captcha_img'];
?>
<p class="main">
	<form class="main" method="post" action="login.php">
	<div>
		<input name="name" type="text" required="ture" placeholder="你的手机号/邮箱" style="padding:9px; width:260px;"></br>
		<input name="pass"type="text" required="ture" placeholder="密码" style="padding:9px; width:260px;"></br>
		<?php echo "<a href='index.php'><img src='{$img_src}' /></a>";?>
		<input name="captcha" type="text" required="ture" placeholder="验证码" style="padding:9	px; height: 36px; width:75px;"><br>
		<input name="cookie"  type="hidden" value="<?php echo $data['cookie'];?>">
		<input style="display: inline-block;height: 36px;margin-top: 10px;width: 184px;line-height: 38px;font-size: 14px;text-align: center;" type="submit" name="submit" value="登录" />
	</div>
	</form>
</p>
<pre>房管未登录或者登陆过期</pre>
</div><p class="foot">Hosted by 猫不乐</p></body></html>';
<?php

} else {
    echo '<p class="main"><form class="main" method="post" action="J.php"><span class="textblack">用户名：</span><input name="name" type="text" required="ture" style="width:150px;"></br><span class="textblack">禁言时长：</span><input name="time" type="text" value="720" style="width:60px;">（小时） <div><input style="display: inline-block;height: 36px;margin-top: 10px;width: 184px;line-height: 38px;font-size: 14px;text-align: center;" type="submit" name="submit" value="进去吧你" /></div></form></p>';
    echo '<pre>'.$_COOKIE['bili_name'].' cookies OK!</pre></div><p class="foot">Hosted by 猫不乐</p></body></html>';
}
?>