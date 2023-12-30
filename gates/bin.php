<?php

if ((strpos($message, "/gen") === 0)||(strpos($message, "!gen") === 0)||(strpos($message, ".gen") === 0)){

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

