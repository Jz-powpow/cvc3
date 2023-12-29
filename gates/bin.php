<?php 
if ((strpos($message, "/bin") === 0)||(strpos($message, "!bin") === 0)||(strpos($message, ".bin") === 0)){
  $message = substr($message, 5);
$message = clean($message);
$bin = substr($message,0,6);
  $ch = $curl = curl_init();
    
curl_setopt_array($curl, array(
CURLOPT_URL => 'https://zylalabs.com/api/3100/bin+lookup+api/3286/bin+checker?bin=373723',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'GET',
CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer 3112|PlsFKPeSgfWiKlvcXHGBs8xirjelH1wYrjNZMRg5'
    ),
));
    
$response = curl_exec($curl);
    
curl_close($curl);
echo $response;
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

 "status": 200,
  "success": true,
  "isValid": true,
  "message": "The BIN number is valid.",
  "data": {
    "bin_iin": "373723",
    "card_brand": "AMERICAN EXPRESS",
    "card_type": "CREDIT",
    "card_level": "OPTIMA",
    "issuer_name_bank": "AMERICAN EXPRESS US CONSUMER",
    "issuer_bank_website": "------",
    "issuer_bank_phone": "------",
    "iso_country_name": "UNITED STATES",
    "iso_country_code": "US"
  }
}
  
?>
