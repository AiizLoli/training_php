<?php
function notify_message($message,$token){
    $line_notify_url = "https://notify-api.line.me/api/notify";
     $queryData = $message;
     $queryData = http_build_query($queryData,"","&");
     $headerOptions = array( 
             "http"=>array(
                "method"=>"POST",
                "header"=> "Content-Type: application/x-www-form-urlencoded\r\n"
                          ."Authorization: Bearer ".$token."\r\n"
                          ."Content-Length: ".strlen($queryData)."\r\n",
                "content" => $queryData
             ),
     );
     $context = stream_context_create($headerOptions);
     $result = file_get_contents($line_notify_url,FALSE,$context);
     $res = json_decode($result);
     return $res;
}
