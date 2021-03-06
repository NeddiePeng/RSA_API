<?php
/**
 * Author: Wei ZhiHua
 * Date: 2017/6/30 0030
 * Time: 上午 10:15
 */
header('Content-Type:text/html;Charset=utf-8;');
include "RSA.php";
echo '<pre>';

$pubfile = 'D:\WWW\api_rsa\rsa_api\openssl\bin\rsa_public_key.pem';
$prifile = 'D:\WWW\api_rsa\rsa_api\openssl\bin\rsa_private_key.pem';
$rsa = new RSA($pubfile, $prifile);
$rst = array(
    'ret' => 200,
    'code' => 1,
    'data' => array(1, 2, 3, 4, 5, 6),
    'msg' => "success",
);
$ex = json_encode($rst);
//加密
$ret_e = $rsa->encrypt($ex);
//解密
$ret_d = $rsa->decrypt($ret_e);
echo $ret_e;
echo '<pre>';
echo $ret_d;

echo '<pre>';

$a = 'test';
//签名
$x = $rsa->sign($a);
//验证
$y = $rsa->verify($a, $x);
var_dump($x, $y);
exit;