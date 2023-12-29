<?php

$rl = explode("\n", file_get_contents('func/premium.txt'));
foreach ($rl as $rls )
    {
      //sendMessage('6321377431',$rls,$messageId);
      $rls2 = substr($rls,0,10);
      if ($rls2 == $userId)
      {
      $usr = substr($rls,11);
        //sendMessage('6321377431',$usr,$messageId);
       if ($usr <= 0)
       {
         $dir = "func/premium.txt";
        $contents = file_get_contents($dir);
$contents = str_replace($rls, '', $contents);
file_put_contents($dir, $contents);
$file = fopen('func/users.txt','a');
fwrite($file,"\n".$userId);
        reply_to($chatId,urlencode(" 
➜ 𝗖𝗥𝗘𝗗𝗜𝗧𝗦 : 𝟬 
➜ 𝗨𝗦𝗘𝗥 𝗦𝗧𝗔𝗧𝗨𝗦 : 𝗙𝗥𝗘𝗘 
"),$messageId);
         
       }
      }
    }
    

?>
