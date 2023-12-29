<?php 
}if(strpos($text,"/bin") !== false){ 
$bin = trim(str_replace("/bin","",$text)); 

$data = json_decode(file_get_contents("https://bins-su-api.vercel.app/api/$bin"),true);
$bank = $data['data']['bin'];
$vendor =  $data['data']['vendor'];
$type =  $data['data']['type'];
$level =  $data['data']['level'];
$bank =  $data['data']['bank'];
$country =  $data['data']['country'];

 if($data['data']){
bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"***
  {
    $msg = "𝗡𝗢𝗧 𝗩𝗔𝗟𝗜𝗗 ❌";
    goto binn;
  }
if(empty($bank))
{
  $bank = "N/A";
}
  if(empty($country))
{
  $country = "N/A";
}
  if(empty($brand))
{
  $brand = "N/A";
}
  if(empty($type))
{
  $type = "N/A";
}
$msg = urlencode(
  "
𝗩𝗔𝗟𝗜𝗗 𝗕𝗜𝗡 ✅
 
➜ 𝘽𝙄𝙉: $bin - $brand
➜ 𝘽𝘼𝙉𝙆: $bank
➜ 𝘾𝙊𝙐𝙉𝙏𝙍𝙔: $country
➜ 𝙏𝙔𝙋𝙀: $type 

$header
𝗕𝗢𝗧 𝗕𝗬 - $bowner"
);
  binn:
 reply_to($chatId,$msg,$messageId);

}
?>
