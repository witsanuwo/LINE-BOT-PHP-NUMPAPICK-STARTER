 <?php
  

function send_LINE($msg){
 $access_token = 'fybwIoIf6IZx9bxwu17v3Um5AruhYai8MMbttBeZD8a+/rIgv05xGAsKlXgq4UQToVKhifapyxUqeTCcwsgp+YJvc2wj427vDfYt6fzfTWAkpbJ62eI3dJs6qTfX+O5OoQJMKhqIJnGzGzsGXjzjtAdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Ub358137ef653e469b05224eb48ad6cf2',
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
