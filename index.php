<?php
//定义一个常量，存储token
define("TOKEN","hello");


//获取微信服务器get请求的4个参数
$signature = $_GET['signature'];
$timestamp = $_GET['timestamp'];
$nonce = $_GET['nonce'];
$echostr = $_GET['echostr'];
//定义一个数组，存储三个参数
$tempArr = array($timestamp,$nonce,TOKEN);
//因为数组存放的数组元素的顺序是不一样的，所以要进行排序
sort($tempArr,SORT_STRING);

//将数组转换成字符串
$tmpStr = implode($tempArr);

//进行sha1加密算法
$tmpStr = sha1($tmpStr);

//判断请求是否来自微信服务器：对比$tmpStr和$signature

if($tmpStr==$signature){
	echo '$echostr';
}
















