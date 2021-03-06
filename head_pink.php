<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $upname; ?> - bilibili手机房管</title>
<meta name="ViewPort" content="initial-scale=1, minimum-scale=1, width=device-width"/>
<meta name="HandheldFriendly" content="true" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="renderer" content="webkit">
<style type="text/css">
html,body{width:100%;height:100%;cursor:default}
html,body,p,h2,div{margin:0;padding:0}
body{background:#ff85ad;text-align:center;user-select:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none}
html{font:12px "Segoe UI","Microsoft YaHei",FreeSans,Arimo,"Droid Sans","Hiragino Sans GB","Hiragino Sans GB W3",Arial,sans-serif}
h2{margin-bottom:15px;font-size:30px;font-weight:300;color:#ff4e8e}
p{line-height:1.5em;font-size:12px;color:#ff2e8e;margin-bottom:5px}
.title{position:relative;top:75px;margin-bottom:.7em;line-height:30px;font-size:26px;font-weight:300;color:#fff;text-shadow:0 0 4px #666666}
.box{position:relative;top:80px;width:600px;max-width:85%;margin:0 auto;background:#fff;padding:15px;box-shadow:0 0 50px #ff2e8e}
.main{font-size:18px;color:#000;font-weight:500;line-height:1.7em;margin:0 0 10px}
.foot{position:relative;top:90px;margin:15px 15px 0;font-size:12px;color:#ffffff}
pre{background:#fb7299;color:#ffffff;padding:15px 20px;margin:25px -15px -15px;line-height:1.4em;font-size:14px;text-align:left;word-break:break-all;white-space:pre-wrap}</style>
</head>
<body>
<p class="title">哔哩哔哩手机房管</p>
<div class="box">
<h2><b><?php echo $upname; ?></b> - <?php echo $roomid; ?></h2>