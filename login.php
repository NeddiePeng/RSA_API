<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/14
 * Time: 9:48
 */
header('Content-type:text/html;charset=utf-8');
//私钥
$private_key = "-----BEGIN RSA PRIVATE KEY-----
MIICXgIBAAKBgQDoPvftMlFtQ1TTc0BkDpWDbRn8a3Uiia5U1FOnfuBZsj0LIF8i
U4oJzOx2yHSKg8N84URcXET9Yz+TOZ7VhmiPxc2Gwn3u5kmM1yJbdQKzsGYx/L+U
vN6BcJJOWm0z3NaRs1bKcTZ1aDi0xXn1XZUoSlylMroFRT1QuXvO3Z9IPQIDAQAB
AoGBAK1U0ZSlyT/S0Kw/h/8lI1FDS/GoAXQVbZbCIO0RND+9VvHG5zmnP46w8op0
cQYv8OZy+aI0+whh2kD28CRMfBvlZcMjYa7Rdq0+8NW2+E7qddnO/44Qgtk9aZ7G
OprLmSFLrHmlTA3rI7f2ClJyx9sSNozPs1i/WUmKx85cv7ABAkEA+W8C2o3N9D4U
1vnDlrultBscGJXWp994CUM+oGqVcS9rx0Nl87pt/QDbg6zFq+5Y/6bCyMUs0Hpo
u78baqnRQQJBAO5cIDR0At2VO0IS4S+EkwmVV6/xUMxNnqF+paBAlS0pIeCdXzSD
4kiKUYsl0yyIAPtl6muhZOCxxrllejqxu/0CQQD1SfXEdy7RwTs9LODqmh2ZwA8h
Hji5XUjt0vMDTc0oQTn7+ouH4w3Gf9Fe68h4Cyv6PEPQrBYl7jqQZp7PhbABAkAB
egShDo7t/HyvfhpzBuk6R/iRGHedrGVtLrGr+npyGy0gjRkH5EFEnca/i+5w+i63
X/xBynArjC5k+6H0NyGpAkEAw++Z9BJQcTfhLJf9zCdF67DHKbUPkR7y/qUpweEg
HsVRgj4PM6eLuxaMbmvzToRvJIRBX1hc6Va6a7oeXhezHQ==
-----END RSA PRIVATE KEY-----";
$hex_encrypt_data = trim($_POST['password']); //十六进制数据
$encrypt_data = pack("H*", $hex_encrypt_data);//对十六进制数据进行转换
openssl_private_decrypt($encrypt_data, $decrypt_data, $private_key);
echo '解密后的数据：' . $decrypt_data;
