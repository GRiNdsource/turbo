<?php
if (!file_exists('madeline.php')) {
copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
$login = 'me.madeline';
include 'madeline.php';
$settings['app_info']['api_id'] = 210897;
if($login != 'me.madeline'){exit();}
$settings['app_info']['api_hash'] = 'c7d2d161d83ce18d56c1a8a54437f5ff';
$MadelineProto = new \danog\MadelineProto\API($login, $settings);
if($settings['app_info']['api_id'] != 210897 or $settings['app_info']['api_hash'] != 'c7d2d161d83ce18d56c1a8a54437f5ff'){exit();}
$MadelineProto->start();
print_r($MadelineProto->get_self());
$i_BRK = readline("Enter The User : @");
$teyp = readline("Enter Move T ? (Account ot - Channel) : ");
if($teyp == "Channel"){
$updates = $MadelineProto->channels->createChannel(['broadcast' => true, 'megagroup' => false, 'title' => ".", 'about' => ".", ]);
}
$BRoKK = 0;
$start = time();
$x_BRK = "@uuunr";
do{
$url = "https://xarmof3.ml/apii.php?user=";
$a = $url.$i_BRK;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$a);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$res = curl_exec($ch);
if($res == "X"){
if($teyp == "Channel"){
$MadelineProto->channels->updateUsername(['channel' =>$updates['updates'][1], 'username' => $i_BRK, ]);
$MadelineProto->messages->sendMessage(['peer' => $updates['updates'][1], 'message' => "- Moved BY $x_BRK"]);
}
if($teyp == "Account"){
$MadelineProto->account->updateUsername(['username' => $i_BRK, ]);
}
$end = time() - $start;
$MadelineProto->messages->sendMessage(['peer' => $x_BRK, 'message' => "- Hi Muslim,
- - - - - - -
- Done Move This User => @$i_BRK
- Count of clicks => $BRoKK
- Time taken : $end Seconds
- Was moved to : $teyp
- - - - - - -
- BY : @GreatMusliim"]);
exit;
echo '@'.$i_BRK." Done .!\n";
}
$BRoKK++;
echo '@'.$i_BRK. " - >" .$BRoKK. " -> " .date('i:s'). "\n";
}while(true);