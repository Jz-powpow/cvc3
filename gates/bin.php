<?php
if ((strpos($message, "/bin $bin") === 0)||(strpos($message, "!bin $bin") === 0)||(strpos($message, ".bin $bin") === 0)){


$mail = random_strings(5)."@gmail.com";
//---------------------------------------//
# -------------------- [PROXY SECTION] -------------------#

//---------------------------------------//
$upd = urlencode("
➜ 𝘾𝙃𝙀𝘾𝙆𝙄𝙉𝙂 𝙎𝙏𝘼𝙍𝙏𝙀𝘿...
");
$sss = reply_to($chatId,"$upd",$messageId);
$respon = json_decode($sss, TRUE);
$message_id_1 = $respon['result']['message_id'];

  $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$bin.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$bank = GetStr($fim, '"bank":{"name":"', '"');
$name = GetStr($fim, '"name":"', '"');
$brand = GetStr($fim, '"brand":"', '"');
$country = GetStr($fim, '"country":{"name":"', '"');
$emoji = GetStr($fim, '"emoji":"', '"');
$scheme = GetStr($fim, '"scheme":"', '"');
$type = GetStr($fim, '"type":"', '"');
$currency = GetStr($fim, '"currency":"', '"');
///$test2 = GetStr($fim, '"alpha2":"', '"'); ////country abbreviated example (US)
if(strpos($fim, '"type":"credit"') !== false){
$bin = 'Credit';
}else{
$bin = 'Debit';
}
curl_close($ch);
{
  $upd = urlencode("
𝙒𝘼𝙄𝙏𝙄𝙉𝙂 𝙁𝙊𝙍 𝙍𝙀𝙎𝙐𝙇𝙏𝙎...
");
edit_message($chatId,"$upd ",$message_id_1);
  exit();
  }

  
  ?>
