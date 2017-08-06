<?php
//第一步：创建curl
	$ch = curl_init();
	//设置curl
	$url = 'http://www.baidu.com/';
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);//以文档流的形式返回数据
	//执行curl
	$output = curl_exec($ch);
	//判断$output
	if($output === false){
		//输出异常信息
		echo curl_error($ch);
	}else{
		//直接输出$output
		echo $output;
	}
	//关闭crul
	curl_close($ch);