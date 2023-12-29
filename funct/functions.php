<?php  
$botToken = "6778123440:AAFy-V-cHZg0xADqspnb4vA_JXD8cjNFJik"; // Enter ur bot token
$website = "https://api.telegram.org/bot".$botToken;
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);  
return $str[0];
};
function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}
function random_strings($length_of_string) 
{
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    return substr(str_shuffle($str_result),  
                       0, $length_of_string); 
}
function amtran($length_of_string) 
{
    $str_result = '0123456789'; 
    return substr(str_shuffle($str_result),  
                       0, $length_of_string); 
}
function reply_to($chatId,$message,$messageId) {
  sendChatAction($chatId,"type");
        $url = $GLOBALS['website']."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$messageId."&parse_mode=HTML&disable_web_page_preview=True";
        return file_get_contents($url);
}
function edit_message($chatId,$message,$message_id_1) {
  sendChatAction($chatId,"type");
   $url = $GLOBALS['website']."/editMessageText?chat_id=".$chatId."&text=".$message."&message_id=".$message_id_1."&parse_mode=HTML&disable_web_page_preview=True";
	file_get_contents($url);
}

function gibarray($message){
    return explode("\n", $message);
}
function clean($string) {
  $text = preg_replace("/\r|\n/", " ", $string);
     $str1 = preg_replace('/\s+/', ' ', $text);
$str = preg_replace("/[^0-9]/", " ", $str1);
$string = trim($str, " ");
$lista = preg_replace('/\s+/', ' ', $string);
   return $lista; 
}
function sendMessage ($chatId, $message, $messageId){
  sendChatAction($chatId,"type");
$url = $GLOBALS['website']."/sendMessage?chat_id=".$chatId."&text=".$message."&parse_mode=html&disable_web_page_preview=True";
file_get_contents($url);
  
};
function delMessage ($chatId, $messageId){
$url = $GLOBALS['website']."/deleteMessage?chat_id=".$chatId."&message_id=".$messageId."";
file_get_contents($url);
};

function sendChatAction($chatId, $action)
{
  
$data = array("type" => "typing", "photo" => "upload_photo", "rcvideo" => "record_video", "video" => "upload_video", "rcvoice" => "record_voice", "voice" => "upload_voice", "doc" => "upload_document", "location" => "find_location", "rcvideonote" => "record_video_note", "uvideonote" => "upload_video_note");
$actiontype = $data["$action"];
$url = $GLOBALS['website']."/sendChatAction?chat_id=".$chatId."&action=".$actiontype."&parse_mode=HTML";
file_get_contents($url);
  
}
function balancechk($userId,$bln)
  {
$cred = explode("\n", file_get_contents('func/premium.txt'));
foreach ($cred as $creds )
    {
      $cred1 = substr($creds,0,10);
      if ($cred1 == $userId)
      {
        $usercrd = substr($creds,11);
        $credit = $usercrd - $bln;
      $dir = "func/premium.txt";
        $contents = file_get_contents($dir);
$contents = str_replace($creds, '', $contents);
file_put_contents($dir, $contents);
$file = fopen('func/premium.txt','a');
fwrite($file,$userId." ".$credit."\n");
        break;
      }
    }
  }
function checkLuhn($cardNo) {
    $nDigits = strlen($cardNo);
    $nSum = 0;
    $isSecond = false;

    for($i = $nDigits - 1; $i >= 0; $i--) {
        $d = ord($cardNo[$i]) - ord('0');
        if($isSecond == true) {
            $d = $d * 2;
        }
        $nSum += floor($d / 10);
        $nSum += $d % 10;

        $isSecond = !$isSecond;
    }
    if ($nSum % 10 == 0) {
        return true;
    } else {
        return false;
    }
}
function getCards($text) {
    $text = str_replace(["\n", "\r"], '', $text);
    preg_match_all('/[0-9]+/', $text, $card);
    $card = $card[0];  // get the first match

    if (!$card || count($card) < 3) {
        return;
    }

    if (count($card) == 3) {
        $cc = $card[0];
        if (strlen($card[1]) == 3) {
            $mes = substr($card[2], 0, 2);
            $ano = substr($card[2], 2);
            $cvv = $card[1];
        } else {
            $mes = substr($card[1], 0, 2);
            $ano = substr($card[1], 2);
            $cvv = $card[2];
        }
    } else {
        $cc = $card[0];
        if (strlen($card[1]) == 3) {
            $mes = $card[2];
            $ano = $card[3];
            $cvv = $card[1];
        } else {
            $mes = $card[1];
            $ano = $card[2];
            $cvv = $card[3];
        }
        if (strlen($mes) == 2 && ($mes > '12' || $mes < '01')) {
            $ano1 = $mes;
            $mes = $ano;
            $ano = $ano1;
        }
    }

    if ($cc[0] == 3 && strlen($cc) != 15 || strlen($cc) != 16 || !in_array(intval($cc[0]), [3,4,5,6])) {
        return;
    }

    if (strlen($mes) != 2 && strlen($mes) != 4 || strlen($mes) == 2 && $mes > '12' || strlen($mes) == 2 && $mes < '01') {
        return;
    }

    if (strlen($ano) != 2 && strlen($ano) != 4 || strlen($ano) == 2 && $ano < '21' || strlen($ano) == 4 && $ano < '2021' || strlen($ano) == 2 && $ano > '29' || strlen($ano) == 4 && $ano > '2029') {
        return;
    }

    if ($cc[0] == 3 && strlen($cvv) != 4 || strlen($cvv) != 3) {
        return;
    }

    if ($cc && $mes && $ano && $cvv) {
        return [$cc, $mes, $ano, $cvv];
    }
}

////////////====[MUTE]====////////////
if(strpos($message, "/bin ") === 0 || strpos($message, "!bin ") === 0){   
    $antispam = antispamCheck($userId);
    addUser($userId);
    
     }else{
        $messageidtoedit1 = bot('sendmessage',[
          'chat_id'=>$chat_id,
          'text'=>"<b>Wait for Result...</b>",
          'parse_mode'=>'html',
          'reply_to_message_id'=> $message_id

        ]);

        $messageidtoedit = capture(json_encode($messageidtoedit1), '"message_id":', ',');
        $bin = substr($message, 5);
        $bin = substr($bin, 0, 6);
        
        if(preg_match_all("/^\d{6,20}$/", $bin, $matches)) {
            $bin = $matches[0][0];
        

            ###CHECKER PART###  
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
            $bank = capture($fim, '"bank":{"name":"', '"');
            $bname = capture($fim, '"name":"', '"');
            $brand = capture($fim, '"brand":"', '"');
            $country = capture($fim, '"country":{"name":"', '"');
            $phone = capture($fim, '"phone":"', '"');
            $scheme = capture($fim, '"scheme":"', '"');
            $type = capture($fim, '"type":"', '"');
            $emoji = capture($fim, '"emoji":"', '"');
            $currency = capture($fim, '"currency":"', '"');
            $binlenth = strlen($bin);
            $schemename = ucfirst("$scheme");
            $typename = ucfirst("$type");
            
            
            /////////////////////==========[Unavailable if empty]==========////////////////
            
            
            if (empty($schemename)) {
            	$schemename = "Unavailable";
            }
            if (empty($typename)) {
            	$typename = "Unavailable";
            }
            if (empty($brand)) {
            	$brand = "Unavailable";
            }
            if (empty($bank)) {
            	$bank = "Unavailable";
            }
            if (empty($bname)) {
            	$bname = "Unavailable";
            }
            if (empty($phone)) {
            	$phone = "Unavailable";
            }

            ###END OF CHECKER PART###
            
            if(strlen($bin) < '6'){ 
              bot('editMessageText',[
                'chat_id'=>$chat_id,
                'message_id'=>$messageidtoedit,
                'text'=>"<b>❌ INVALID BIN LENGTH ❌</b>
<b>Checked By <a href='tg://user?id=$userId'>$firstname</a></b>",
                'parse_mode'=>'html',
                'reply_to_message_id'=> $message_id]);}
            

            elseif($fim){ //If Response from Bin Lookup Site exists
                bot('editMessageText',[
              'chat_id'=>$chat_id,
              'message_id'=>$messageidtoedit,
              'text'=>"BIN/IIN: <code>$bin</code> $emoji
Card Brand: <b><ins>$schemename</ins></b>
Card Type: <b><ins>$typename</ins></b>
Card Level: <b><ins>$brand</ins></b>
Bank Name: <b><ins>$bank</ins></b>
Country: <b><ins>$bname</ins> - 💲<ins>$currency</ins></b>
Issuers Contact: <b><ins>$phone</ins></b>
<b>━━━━━━━━━━━━━
Checked By <a href='tg://user?id=$userId'>$firstname</a></b>
<b>Bot By: <a href='t.me/RedHoodPRO'>𝓡𝓮𝓭𝓗𝓸𝓸𝓭𝓟𝓡𝓞</a></b>",
              'parse_mode'=>'html',
              'reply_to_message_id'=> $message_id,
              'disable_web_page_preview'=>'true']);}
            
            else{
              bot('editMessageText',[
                'chat_id'=>$chat_id,
                'message_id'=>$messageidtoedit,
                'text'=>"<b>❌ INVALID BIN ❌</b>
<b>Checked By <a href='tg://user?id=$userId'>$firstname</a></b>",
                'parse_mode'=>'html',
                'disable_web_page_preview'=>'true'
                
            ]);}
          
        }else{
          bot('editMessageText',[
            'chat_id'=>$chat_id,
            'message_id'=>$messageidtoedit,
            'text'=>"<b>Never Gonna Give you Up!

Provide a Bin!</b>",
            'parse_mode'=>'html',
            'disable_web_page_preview'=>'true'
            
        ]);

        }
    }
}

?>
