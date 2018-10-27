 <?php
  

function send_LINE($msg){
 $access_token = 'N/h001PQ4GZ/ocMxZztKtM4bPDSJopxKjviFIcWGl0muLEyfCLMgxAZyxFjn47eeoVKhifapyxUqeTCcwsgp+YJvc2wj427vDfYt6fzfTWAFPJ8yRPZ6qn/ZiyynBWBLh/t8h7eGFh5Mw/H0yESV9wdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'Userid' => 'Ub358137ef653e469b05224eb48ad6cf2',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
