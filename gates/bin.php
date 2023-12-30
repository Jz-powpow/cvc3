<?php
if ((strpos($message, "/bin $bin") === 0)||(strpos($message, "!bin $bin") === 0)||(strpos($message, ".bin $bin") === 0)){

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
 
 ?>
