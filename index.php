<?php
//����һ���������洢token
define("TOKEN","hello");


//��ȡ΢�ŷ�����get�����4������
$signature = $_GET['signature'];
$timestamp = $_GET['timestamp'];
$nonce = $_GET['nonce'];
$echostr = $_GET['echostr'];
//����һ�����飬�洢��������
$tempArr = array($timestamp,$nonce,TOKEN);
//��Ϊ�����ŵ�����Ԫ�ص�˳���ǲ�һ���ģ�����Ҫ��������
sort($tempArr,SORT_STRING);

//������ת�����ַ���
$tmpStr = implode($tempArr);

//����sha1�����㷨
$tmpStr = sha1($tmpStr);

//�ж������Ƿ�����΢�ŷ��������Ա�$tmpStr��$signature

if($tmpStr==$signature){
	echo '$echostr';
}
















