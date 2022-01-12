<?php

$user_chatid = "628579122";
$data = ' <strong>muhammad</strong> '."\n".
        ' <i>ikram</i> '."\n".
        ' bin '."\n".
        ' azhar'."\n";

                    

                    
$parameters = [
  "chat_id" => $user_chatid,
  "text" => $data
];

$bot_token = "2057401856:AAHQiemesQo03GJJasmafoh0avn2sRzJg-E";

 
$a = file_get_contents("https://api.telegram.org/bot".$bot_token."/sendMessage?parse_mode=HTML&".http_build_query($parameters));

?>

