<?php

if ((strpos($message, "/bin") === 0)||(strpos($message, "!bin") === 0)||(strpos($message, ".bin") === 0)){

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


# -------------------- [PROXY SECTION] -------------------#
//==================[Randomizing Details-END]======================//  
function value($str,$find_start,$find_end)
{
    $start = strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}
function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}
 if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
} 
  sendaction($chatId, typing);
$bin = substr($message, 6);
$bin = substr("$bin", 0, 6);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$bin.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'bin='.$bin.'');
$fim = curl_exec($ch);
$bank = GetStr($fim, '"bank":{"name":"', '"');
$name = strtoupper(GetStr($fim, '"name":"', '"'));
$brand = strtoupper(GetStr($fim, '"brand":"', '"'));
$country = strtoupper(GetStr($fim, '"country":{"name":"', '"'));
$scheme = strtoupper(GetStr($fim, '"scheme":"', '"'));
$emoji = GetStr($fim, '"emoji":"', '"');
$type =strtoupper(GetStr($fim, '"type":"', '"'));
if(empty($bank)) {
  $lookup = '<b>Lookup Failed ❌';
  sendMessage($chatId, "<b>$lookup%0A%0ABin : $bin</b>", $message_id);
  exit();
}
else 
{
  $lookup = '<b>Lookup Sucess ✅</b>';
sendMessage($chatId, "<b>$lookup%0A%0ABin : $bin%0A%0AInfo : $scheme - $type - $brand%0ABank : $bank%0ACountry : $name $emoji</b>", $message_id);
}
}
?>
