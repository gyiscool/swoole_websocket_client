<meta charset="utf-8">
<?php

require('WebSocket.php');
require_once('WebSocketParser.php');
require_once('WebSocketParser.php');
require_once('TCP.php');
require_once('Socket.php');
require_once('Parser.php');
//连接 需要权限
$client = new WebSocket('192.168.88.128', 9501, '/VH4OKgcjVHZTPlFzBnVTYwExCS9RdFdwDX5VdwFiV3ADaFRjBio=');

echo '准备'."<br>";
if(!($temp = $client->connect()))
{
    var_dump($temp);echo "失败"."<br>";
    echo "connect to server failed.\n";
    exit;
}
$message = json_encode(array('data'=>'这是广播消息','to'=>[1,2,3,4,5,6,7,8,9]),JSON_UNESCAPED_UNICODE);

    $client->send($message);
    $message = $client->recv();
    echo '发送'."<br>";
    if ($message === false)
    {
        exit;
    }
    echo "Received from server: {$message}\n";


echo "Closed by server.\n";