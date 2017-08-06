<?php
//定义请求的url地址
$url = '';
//使用http_request函数发送请求
$str = http_request($url);
//使用json_decode对$str进行转移
$json = json_decode($str);
//输出access_token
echo $json->access_token;
//封装curl库
function http_request($url){
	//第一步：创建curl
	$ch = curl_init();
	//设置curl
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);//禁止服务器端校验ssl证书
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);以文档流的形式返回数据
	//执行curl
	$output = curl_exec($ch);
	//关闭crul
	curl_close($ch);

	return $output;

}