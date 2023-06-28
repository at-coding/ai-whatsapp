<?php

   // 17 May 2023 at 23:00 
   // https://platform.openai.com/docs/api-reference/completions/create

   $json_data = file_get_contents('php://input');
       
   askQuestion($json_data);
        
function askQuestion($question_data){
   
   $paras = json_decode($question_data, true);
                     
   file_put_contents('text.txt', $paras['question'].PHP_EOL, FILE_APPEND );
     
   $ch = curl_init("https://api.openai.com/v1/completions");
        
   curl_setopt( $ch, CURLOPT_HTTPHEADER, array (
                                              'Content-Type:application/json',
                                              'Authorization: Bearer sk-ioioijiuhukjnjknjhnhjikhgu'
                                                     ) );
        
   $question = json_encode( array(
                                   "model" => "text-davinci-003",
                                   "prompt" => $paras['question'],
                                   "temperature" => (double) $paras['temp'],
                                   "max_tokens" => (int) $paras['maxtoken'],
                                   ) );
        
      curl_setopt( $ch, CURLOPT_POSTFIELDS, $question );
      curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        
     $response = curl_exec($ch);
        
     $res = json_decode($response, true);
        
   if( !$res['choices'][0]['text'] ){
              
           echo(" may be not connected to internet ... ");
           
           var_dump($res);
           var_dump($paras);
            
       };
   if($res['choices'][0]['text']){
       
      echo $res['choices'][0]['text'];
            
      file_put_contents('conversation.txt', $res['choices'][0]['text'].PHP_EOL, FILE_APPEND );
                 
        }
            
}
    

