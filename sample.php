<?php

require('./include.php');
use TencentYoutuyun\Youtu;
use TencentYoutuyun\Conf;


// 设置APP 鉴权信息 请在http://open.youtu.qq.com 创建应用

$appid='10000010';
$secretId='AKIDOiuFc9M6mTtMUmK8GbWMczOKyWn464Rn';
$secretKey='mSh3ULXSJ1qMk6gXDEvbLJJwuVP1jelY';
$userid='267266206';


Conf::setAppInfo($appid, $secretId, $secretKey, $userid );


// 人脸检测 调用列子
//$uploadRet = YouTu::detectface('a.jpg', 1);
//var_dump($uploadRet);


// 人脸定位 调用demo
//$uploadRet = YouTu::faceshape('a.jpg', 1);
//var_dump($uploadRet);

//黄图识别
//$uploadRet = YouTu::imageporn('test.jpg', 1);
//var_dump($uploadRet);
//$uploadRet = YouTu::imagepornurl('http://open.youtu.qq.com/content/img/product/face/face_05.jpg', 1);
//var_dump($uploadRet);

//身份证ocr

//$uploadRet = YouTu::idcardocr('test.jpg', 1);
//var_dump($uploadRet);
//$uploadRet = YouTu::idcardocrurl('http://open.youtu.qq.com/content/img/product/face/face_05.jpg', 1);
//var_dump($uploadRet);

//名片
$uploadRet = YouTu::namecardocr('test.jpg', 1);
var_dump($uploadRet);
$uploadRet = YouTu::namecardocrurl('http://open.youtu.qq.com/content/img/product/face/face_05.jpg', 1);
var_dump($uploadRet);

?>
