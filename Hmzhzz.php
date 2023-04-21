<?php 
/*
ملف بوت تصميم اسمك بالعربي.
اصل ملف الي و لعدنان ملف ول Api تنشر بحقوق قناة.
@Api_File_Code
*/
ob_start();
$API_KEY = "6285124108:AAHyzxNESTfm6Kk3AXFtQJG7MIfnI4b488s";
define('API_KEY',$API_KEY);
 file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
 echo "<html>
<meta HTTP-EQUIV='ALSH' content='0; url=https://t.me/ALSHH'/>
<a href='https://t.me/ALSHH'> ALSH،  </a> 
</html>";
function bot($method,$datas=[]){
    $Alsh = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$Alsh";
        $Alsh = file_get_contents($url);
        return json_decode($Alsh);}
       
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$name = $message->from->first_name;
$user = $message->from->username;
$from_id = $message->from->id;
$tws = file_get_contents("tw.txt");
$admin = "5708896703";
$admin2 = file_get_contents("admin2.txt");
$ad = array("$admin","$admin2");
$list = file_get_contents("blocklist.txt");
$ebu = explode("\n",$list);
if(in_array($from_id,$ebu)){
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⛳| عزيزي انت محظور من البوت",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);    
}
#التخزين ايديات
$from_id = $message->from->id;
mkdir("alsh");
if(isset($message)){
$al = file_get_contents('Alsh.txt');
$alo = explode("\n",$al);
if(!in_array($from_id,$alo)){
$alsh2 = fopen("Alsh.txt", "a") or die("Unable to open file!");
fwrite($alsh2, "$from_id\n");
fclose($alsh2);}}
$sta = file_get_contents("start.txt");
#شتراك اجباري خاصه
$all = file_get_contents("id.txt");
$rabt = file_get_contents("rabt.txt");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$all&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"لستخدام البوت عليك اشتراك في قنوات البوت 🎁.
بعد الاشتراك في القنوات اضغط - /start 📦.",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
          'inline_keyboard'=>[
[['text'=>"📦. اشترك -",'url'=>"$rabt"]],
]])]);return false;}
#شتراك اجباري1
$op = file_get_contents("ch.txt");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$op&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"لستخدام البوت عليك اشتراك في قنوات البوت 🎁.
بعد الاشتراك في القنوات اضغط - /start 📦.
قناة البوت : @$op",
'reply_to_message_id'=>$message->message_id,
]);return false;}
#شتراك اجباري2
$oop = file_get_contents("chc.txt");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$oop&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"لستخدام البوت عليك اشتراك في قنوات البوت 🎁.
بعد الاشتراك في القنوات اضغط - /start 📦.
قناة البوت : @$oop",
'reply_to_message_id'=>$message->message_id,
]);return false;}



$Alsh = "TO"; 
$Saa = "قناة التحديثات ⎙";
$ali = "HMS_00";// معرف قناتك 1
if($text == "/start" or $text == "تفعيل"){
$join = file_get_contents("https://api.telegram.org/bot".$Alsh."/getChatMember?chat_id=@$ali&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"*👨‍✈️ ⁞ مرحبا بگ عزيزي 🦁،
👾 ⁞ لا يمڪنـك استخدام البوت ،
™ ⁞ عليك الإشتراگ في قناة البوت ،
🔘 ⁞ *[اضغط هنا للإشتراك في القناة](t.me/HMS_00/1)* ،

- بعد الاشتراك اضغط { /start }*
",'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([
      'inline_keyboard'=>[
   [
['text'=>"$Saa", 'url'=>"https://t.me/$ali"]
     ],[],]])
   ]); return false;}
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"",'reply_to_message_id'=>$message->$message_id,]);}
//-------------//
$Alsh = "$Alsh";
$jaaa = "Ͳᴇᴀᴍ Yᴇᴍᴇɴ 🦁";
$alii = "botatiiii";// معرف قناتك 2
if($text == "/start" or $text == "تفعيل"){
$join = file_get_contents("https://api.telegram.org/bot".$Alsh."/getChatMember?chat_id=@$alii&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"*👨‍✈️ ⁞ مرحبا بگ عزيزي 🦁 ،
👾 ⁞ لا يمڪنـك استخدام البوت ،
™ ⁞ عليك الإشتراگ في قناة البوت ،
🔘 ⁞ *[اضغط هنا للإشتراك في القناة](t.me/botatiiii/1)* ،

- بعد الاشتراك اضغط { /start } ،*
",'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([
      'inline_keyboard'=>[
   [
['text'=>"$jaaa", 'url'=>"https://t.me/$alii"]
     ],[],]])
   ]); return false;}
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"",'reply_to_message_id'=>$message->$message_id,]);}
//------------------------------------------------//

if ($text and $text != "/start" and !in_array($from_id,$ebu) and !in_array($chat_id,$ad)) {
file_put_contents("zkf.txt", $text."\n",FILE_APPEND);}
if($text == "/start" and !in_array($from_id,$ebu) and !in_array($from_id,$ebu) and !in_array($chat_id,$ad) and $sta == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📯| مـرحبا بك عزيزي. ، $name ،
📌| في بوت تصاميم الجديد كليا ،
🌻| يمكنك صنع تصاميم جميله ،
💘| وبالغةه العربيةه فقط كل ماعليك هوا ارسال اسمك ،
📅| مـآذآ تنتظـر قم برسـآل اسمك من فضلك يجب ان يكون الاسم بآلغ‏‏‏‏هہ‏‏ العربيه فقط ،
",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"$name","url"=>"t.me/$user"]],
]])
]);   
}
if($text == "/start" and !in_array($from_id,$ebu) and !in_array($from_id,$ebu) and !in_array($chat_id,$ad) and $sta != null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"مـرحبا بك عزيزي 🎁. ، $name ،
$sta
",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"$name","url"=>"t.me/$user"]],
]])
]);   
}
if($text != "/start"){
if (preg_match('/[أ-ي]/', $text) and !in_array($chat_id,$ad)){
bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"• جاري التصميم انتظر قليلاً . . . 💚",
  ]);
 bot("sendMediaGroup",[
            "chat_id"=>$chat_id,
            "media"=>json_encode([
[ "type"=>"photo", "media" => "https://testtbott.000webhostapp.com/aapi/famil1/?text=$text"],
[ "type"=>"photo", "media" => "https://testtbott.000webhostapp.com/aapi/famil2/?text=$text&color=White"],
[ "type"=>"photo", "media" => "https://testtbott.000webhostapp.com/aapi/api/?text=$text"],
[ "type"=>"photo", "media" => "https://testtbott.000webhostapp.com/iraqapi/12/?text=$text&color=black"],
[ "type"=>"photo", "media" => "https://testtbott.000webhostapp.com/iraqapi/13/?text=$text&color=black"],
[ "type"=>"photo", "media" => "https://testtbott.000webhostapp.com/iraqapi/14/?text=$text&color=white"],
[ "type"=>"photo", "media" => "https://testtbott.000webhostapp.com/iraqapi/15/?text=$text&color=white"],
[ "type"=>"photo", "media" => "https://testtbott.000webhostapp.com/iraqapi/21/?text=$text&color=test"],
[ "type"=>"photo", "media" => "https://testtbott.000webhostapp.com/iraqapi/23/?text=$text&color=black"],
[ "type"=>"photo", "media" => "https://testtbott.000webhostapp.com/iraqapi/16/?text=$text&color=white"]
           ]),
        ]);
        bot("sendMediaGroup",[
            "chat_id"=>$chat_id,
           "media"=>json_encode([         
                [ "type"=>"photo", "media" => "https://testtbott.000webhostapp.com/aapi/boy5/?text=$text&color=yellow"],
     [ "type"=>"photo", "media" => "https://testtbott.000webhostapp.com/iraqapi/23/?text=$text&color=black"],
     [ "type"=>"photo", "media" => "https://testtbott.000webhostapp.com/iraqapi/20/?text=$text&color=test"],
     [ "type"=>"photo", "media" => "https://testtbott.000webhostapp.com/iraqapi/18/?text=$text&color=test"],
             [ "type"=>"photo", "media" => "https://testtbott.000webhostapp.com/iraqapi/11/?text=$text&color=white"],
   [ "type"=>"photo", "media" => "https://testtbott.000webhostapp.com/iraqapi/17/?text=$text&color=black"],
   [ "type"=>"photo", "media" => "https://testtbott.000webhostapp.com/iraqapi/9/?text=$text&color=white"],
   [ "type"=>"photo", "media" => "https://testtbott.000webhostapp.com/iraqapi/8/?text=$text&color=test"],
[ "type"=>"photo", "media" => "https://testtbott.000webhostapp.com/iraqapi/1/?text=$text&color=white"],
[ "type"=>"photo", "media" => "https://testtbott.000webhostapp.com/iraqapi/2/?text=$text&color=white"],
           ]),
        ]); 
        bot("sendMediaGroup",[
            "chat_id"=>$chat_id,
            "media"=>json_encode([
[ "type"=>"photo", "media" => "https://testtbott.000webhostapp.com/iraqapi/3/?text=$text&color=white"],
[ "type"=>"photo", "media" => "https://testtbott.000webhostapp.com/iraqapi/5/?text=$text&color=test"],
[ "type"=>"photo", "media" => "https://testtbott.000webhostapp.com/iraqapi/6/?text=$text&color=test"],
[ "type"=>"photo", "media" => "https://testtbott.000webhostapp.com/iraqapi/7/?text=$text&color=test"],
[ "type"=>"photo", "media" => "https://testtbott.000webhostapp.com/iraqapi/?text=$text&color=white"], 
           ]),
        ]);
        bot("sendMediaGroup",[
            "chat_id"=>$chat_id,
            "media"=>json_encode([
[ "type"=>"photo", "media" => "https://testtbott.000webhostapp.com/iraqapi/4/?text=$text&color=test"],
[ "type"=>"photo", "media" => "https://testtbott.000webhostapp.com/iraqapi/10/?text=$text&color=white"],
[ "type"=>"photo", "media" => "https://alsh-you.000webhostapp.com/APi/?image=https://i.imgur.com/V9RLXMp.jpg&fontsize=110&Height=175&Width=290&Rotation=-15&color=black&text=$text&font=3.ttf"],
[ "type"=>"photo", "media" => "https://alsh-you.000webhostapp.com/APi/?image=https://i.imgur.com/cDOlu8U.jpg&fontsize=110&Height=175&Width=290&Rotation=-15&color=black&text=$text&font=3.ttf"],
]),
]);
}
}
if($text != "/start"){
if (preg_match('/[a-z]/', $text) and !in_array($chat_id,$ad)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🌻| البوت لايدعم الغةه الانجليزيةه",
]);
}
}
$bot = file_get_contents("com.txt");
if($text == "/start" and in_array($chat_id,$ad)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"آهلا بك $name 🍟.
🎺| يمكنك استخدام الاوامر الموجوده في اسفل.
📌| لعرض احصائيات البوت ارسل : /mem.
🔖| #مـلآحظـهہ‏‏ آلبوت لايقوم بالتصميم لك عزيز المطور.
",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"تغير رساله ال/start ،📎.","callback_data"=>"start"]],
[["text"=>"تفعيل التواصل ،📯.","callback_data"=>"utws"],["text"=>"تعطيل التواصل ،📌.","callback_data"=>"ntws"]],
[["text"=>"حظـر عضو ،📤.","callback_data"=>"bn"],["text"=>"الغاء حظر العضو ،📦.","callback_data"=>"unbn"]],
[["text"=>"آضـآفهہ‏‏ آدمـن للبوت ،📚.","callback_data"=>"admin"]],
[["text"=>"مـعلومـآت لعضـو ،🎺.","callback_data"=>"info"]],
[["text"=>"قسم شتراك اجباري ،🎯.","callback_data"=>"chh"],["text"=>"قسم الاذاعه ،🏆.","callback_data"=>"bcc"]],
[["text"=>"حذف جميع احصائيات البوت ،🌻.","callback_data"=>"delbot"]],
]])
]);   
unlink("com.txt");
}
#رجوع
if($data == "bk" and in_array($chat_id2,$ad)){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"آهلا بك $name 🍟.
🎺| يمكنك استخدام الاوامر الموجوده في اسفل.
📌| لعرض احصائيات البوت ارسل : /mem.
🔖| #مـلآحظـهہ‏‏ آلبوت لايقوم بلتصميم لك عزيز المطور.",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"تغير رساله ال/start ،📎.","callback_data"=>"start"]],
[["text"=>"تفعيل التواصل ،📯.","callback_data"=>"utws"],["text"=>"تعطيل التواصل ،📌.","callback_data"=>"ntws"]],
[["text"=>"حظـر عضو ،📤.","callback_data"=>"bn"],["text"=>"الغاء حظر العضو ،📦.","callback_data"=>"unbn"]],
[["text"=>"آضـآفهہ‏‏ آدمـن للبوت ،📚.","callback_data"=>"admin"]],
[["text"=>"مـعلومـآت لعضـو ،🎺.","callback_data"=>"info"]],
[["text"=>"قسم شتراك اجباري ،🎯.","callback_data"=>"chh"],["text"=>"قسم الاذاعه ،🏆.","callback_data"=>"bcc"]],
[["text"=>"حذف جميع احصائيات البوت ،🌻.","callback_data"=>"delbot"]],
]])
]);   
unlink("com.txt");
}

#قسم حذف كل
if($data == "delbot" and in_array($chat_id2,$ad)){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📮| عزيزي هل انت متاكد من انك تريد حذف جميع احصائيات البوت،
🎄| #مـلآحظـهہ‏‏ سيتم حذف جميع ايديات الاعضا،الاشتراك الاجباري،اعضا المحظورين،عدد زخارف و....،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"نعم ،📌.","callback_data"=>"dell"],["text"=>"لآ ،📌.","callback_data"=>"bk"]],
]])
]);   
}
if($data == "dell" and in_array($chat_id2,$ad)){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📮| تم حذف جميع احصائيات البوت اصبح الان جديد",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،📌.","callback_data"=>"bk"]],
]])
]);   
unlink("start.txt");
unlink("tw.txt");
unlink("blocklist.txt");
unlink("admin2.txt");
unlink("Alsh.txt");
unlink("rabt.txt");
unlink("id.txt");
unlink("ch.txt");
unlink("chc.txt");
unlink("zkf.txt");
}
#قسم الاذاعه
if($data == "bcc" and in_array($chat_id2,$ad)){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"💛| حسننا الان قم بختيار الاذاعه من فضلك،",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"آذآعهہ‏‏ رسـآلهہ‏‏ ،🌻.","callback_data"=>"bc"],["text"=>"آذآعهہ‏‏ بآلتوجيهہ‏‏ ،🌻.","callback_data"=>"for"]],
[["text"=>"آذآعهہ‏‏ شـفآف ،🌻.","callback_data"=>"inln"],["text"=>"آذآعهہ‏‏ بآلمـيديآ ،🌻.","callback_data"=>"med"]],
[["text"=>"رجوع ،🌻.","callback_data"=>"bk"]],
]])
]);   
}
#قسم شتراك اجباري
if($data == "chh" and in_array($chat_id2,$ad)){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🌻| حسننا عزيزي قم بلختيار من الاسفل لوضع شتراك اجباري،",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"قناة عامه 1 ،🎺.","callback_data"=>"add2"],["text"=>"قناة عامه 2 ،🎺.","callback_data"=>"add1"]],
[["text"=>"قناة خاصه ،🎺.","callback_data"=>"add"]],
[["text"=>"حذف جميع القنوات من شتراك ،🎺.","callback_data"=>"remch"]],
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
}
#الاحصائيات
$tkzk = explode("\n",file_get_contents("zkf.txt"));
$meb = explode("\n",file_get_contents("Alsh.txt"));
$band = explode("\n",file_get_contents("blocklist.txt"));
$mem = count($meb)-1;
$zktex = count($tkzk)-1;
$bnn = count($band)-1;
if($text == "/mem" and in_array($chat_id,$ad)){
 date_default_timezone_set("Asia/Baghdad");
$getMe = bot('getMe')->result;
$date = $message->date;
$gettime = time();
$sppedtime = $gettime - $date;
$time = date('h:i');
$date = date('y/m/d');
$userbot = "{$getMe->username}";
$userb = strtoupper($userbot);
if ($sppedtime == 3  or $sppedtime < 3) {
$f = "ممتازة 👏🏻";}
if ($sppedtime == 9 or $sppedtime > 9 ) {
$f = "لا بأس 👍🏻";}
if ($sppedtime == 10 or $sppedtime > 10) {
$f = " سئ جدا 👎🏻"; }
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🌻| عدد العضاء : *$mem*،
🌻| عدد التصاميم الاعضاء : *$zktex*،
🌻| عدد الاعضا المحظورين : *$bnn*،
🌻| حاله البوت : *$f*،
🌻| الوقت و التاريخ : *20$date - $time*،",
'parse_mode'=>'MarkDown',
'reply_to_message_id'=>$message->message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
}
#رساله ستارت
if($data == "start" and in_array($chat_id2,$ad)){
file_put_contents("com.txt","start");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🌻| حسننا الان قم برسال النص،
🐞| يمكنك ايضا استخدام الماركدوان كمثال،
[اضغط هنا وتابع جديدنا](t.me/alshh)",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
}
if($bot == "start" and $text != "/h" and $text != "/start" and in_array($chat_id,$ad)){
file_put_contents("start.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🎯| تم حفظ نص الاستارت،",
'reply_to_message_id'=>$message->message_id,
]);
unlink("com.txt");
}
#تفعيل تواصل
if($data == "utws" and in_array($chat_id2,$ad)){
file_put_contents("tw.txt","on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📦|تم تفعيل التواصل ،",
]); 
}
#تعطيل تواصل
if($data == "ntws" and in_array($chat_id2,$ad)){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📮|تم تعطيل التواصل ،",
]); 
unlink("tw.txt");
}
if($text and !in_array($from_id,$ebu) and !in_array($chat_id,$ad) and $tws == "on"){
bot('forwardMessage',[
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$update->message->message_id,
'text'=>$text,
]);
}
if($text and $message->reply_to_message && $text!="/info" && $text!="/ban" && $text!="/unban" && $text!="/forward" and !$data ){
bot('sendMessage',[
'chat_id'=>$message->reply_to_message->forward_from->id,
'text'=>$text,
]);
}
#اضافه ادمن
if($data == "admin" and $chat_id2 == $admin){
file_put_contents("com.txt","ad");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📮| حسننا الان قم برسال ايدي العضو،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
}
if($bot == "ad" and $text != "/start" and $chat_id == $admin){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"📮| تم حفظ ايدي العضو،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
bot('sendMessage',[
'chat_id'=>$text,
'text'=>"🌻| تم رفعك ادمن بواسط صاحب البوت،",
'parse_mode'=>'MarkDown',
]);
unlink("com.txt");
file_put_contents("admin2.txt","$text");
}
#مـآيخصـك
if($data == "admin" and $chat_id2 == $admin2){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🌻| هاذ الامر لايخصك،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
}
#حظر
if($data == "bn" and in_array($chat_id2,$ad)){
file_put_contents("com.txt","bn");
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"💘| حسننا الان قم برسال ايدي العضو،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
}
if($bot == "bn" and $text != "/start" and in_array($chat_id,$ad)){
$myfile2 = fopen("blocklist.txt", "a") or die("Unable to open file!");	
fwrite($myfile2, "$text\n");
fclose($myfile2);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📨| تم حظر العضو بنجاح،",
]);
bot('sendmessage',[
'chat_id'=>$text,
'text'=>"📨| عذرا عزيزي تم حظرك،",
]);
unlink("com.txt");
}
#الغاء حظر
$listt = file_get_contents("blocklist.txt");
if($data == "unbn" and in_array($chat_id2,$ad)){
file_put_contents("com.txt","unbn");
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📮| حسننا الان قم برسال ايدي العضو،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
}
if($bot == "unbn" and $text != "/start" and in_array($chat_id,$ad)){
$newlist = str_replace($text,"",$listt);
file_put_contents("blocklist.txt",$newlist);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🌻| تم آلغآء حظر العضو بنجاح،",
]);
bot('sendmessage',[
'chat_id'=>$text,
'text'=>"🌻| عزيزي تم آلغآء آلحظر عنك،",
]);
unlink("com.txt");
}
#معلومات
if($data == "info" and in_array($chat_id2,$ad)){
file_put_contents("com.txt","info");
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🎁| حسننا الان قم برسال ايدي العضو،
🌻| #ملاحظه يجب العضو يكون مشترك في لبوت مسبقا،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
}
if($bot == "info" and $text != "/start"and in_array($chat_id,$ad)){
$ine = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$text"));
$infe4 =$ine->result->first_name;
$infe2 =$ine->result->id;
$infe3 =$ine->result->username;
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"*🎯| INFO MEMBER*
🔖| Name 💬 : *$infe4* \n 🎧| User 💌 : [@$infe3] \n 📚| Id 🎄 : `$infe2`",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>'MarkDown', 
]);
unlink("com.txt");
}
#شتراك اجباري1
if($data == "add2" and in_array($chat_id2,$ad)){
file_put_contents("com.txt","ab");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📦| حسـننا عزيزي قم برسال معرف قناتك مـندون ل @
📥| كمثال : `I8F8I`",
'parse_mode'=>"Markdown",
]);
}
if($bot == "ab" and $text != "/h" and $text != "/start" and in_array($chat_id,$ad)){
file_put_contents("chc.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🎯| حسننا عزيزي تم حفظ قناتك الان قم برفعي مشرف في قناتك .
📮| قناتك : @$text.
لرجوع اضغط /start.",
'reply_to_message_id'=>$message->message_id,
]);
unlink("com.txt");
}
#شـترآك اجباري1
if($data == "add1" and in_array($chat_id2,$ad)){
file_put_contents("com.txt","al");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📦| حسـننا عزيزي قم برسال معرف قناتك مـندون ل @
📚| كمثال : `I8F8I`",
'parse_mode'=>"Markdown",
]);
}

if($bot == "al" and $text != "/h" and $text != "/start" and in_array($chat_id,$ad)){
file_put_contents("ch.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🎯| حسننا عزيزي تم حفظ قناتك الان قم برفعي مشرف في قناتك .
📮| قناتك : @$text.
لرجوع اضغط /start.",
'reply_to_message_id'=>$message->message_id,
]);
unlink("com.txt");
}
#شتراك خاص
if($data == "add"  and in_array($chat_id2,$ad)){
file_put_contents("com.txt","vv");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📌| حسننا عزيزي قم برسال ايدي قناتك !
📮| كمثال : `-1001416392355` !
📎| آن لم تعرف كيفه استخراج ايدي قناتك كل ماعليك قم برسال توجيه من قناتك لهاذ البوت ! @X59BoT !
لرجوع اضغط /start.",
'parse_mode'=>"Markdown",
]);
}

if($bot == "vv" and $text != "/o" and $text != "/start" and in_array($chat_id,$ad)){
file_put_contents("com.txt","alo");
file_put_contents("id.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✂| تم حفظ ايدي قناتك !
📛| حسننا الان قم برسال رابط قناتك !
لرجوع اضغط /start.",
'reply_to_message_id'=>$message->message_id,
]);
}
if($bot == "alo" and $text != "/o" and $text != "/start" and in_array($chat_id,$ad)){
file_put_contents("rabt.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"💛| تم حفظ رابط القناة .
📚| رابط قناتك : `[$text]`
🔖| آيدي قناتك : `$al`
🔖| آلآن قم برفع لبوت مشرفي في قناتك
لرجوع اضغط /start.",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
unlink("com.txt");
}
#حذف قنوات
if($data == "remch" and in_array($chat_id2,$ad)){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📦| تم حذف جميع القنوات،",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
unlink("rabt.txt");
unlink("id.txt");
unlink("ch.txt");
unlink("chc.txt");
}
#اذاعه
if($from_id == $admin and $text != "إلغاء ❌"){
if($text != 'إلغاء ❌' and $send == "txt" and $from_id == $admin){
	for($i=0;$i<count($members); $i++){
bot('sendMessage', [
'chat_id'=>$members[$i],
'text'=>"$text",
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'photo'){
	for($i=0;$i<count($members); $i++){
bot('sendphoto', [
'chat_id'=>$members[$i],
'photo'=>$photo_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'video'){
	for($i=0;$i<count($members); $i++){
bot('Sendvideo',[
'chat_id'=>$members[$i],
'video'=>$video_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'sticker'){
	for($i=0;$i<count($members); $i++){
bot('Sendsticker',[
'chat_id'=>$members[$i],
'sticker'=>$sticker_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'file'){
	for($i=0;$i<count($members); $i++){
 bot('SendDocument',[
'chat_id'=>$members[$i],
'document'=>$file_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'music' and $music){
	for($i=0;$i<count($members); $i++){
 bot('Sendaudio',[
'chat_id'=>$members[$i],
'audio'=>$music_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'music' and $voice){
	for($i=0;$i<count($members); $i++){
 bot('Sendvoice',[
'chat_id'=>$members[$i],
'voice'=>$voice_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'Markdown'){
	for($i=0;$i<count($members); $i++){
bot('sendMessage', [
'chat_id'=>$members[$i],
'text'=>"$text",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'HTML'){
	for($i=0;$i<count($members); $i++){
bot('sendMessage', [
'chat_id'=>$members[$i],
'text'=>"$text",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
}
if($text == "إلغاء ❌" and $from_id == $admin){
unlink("sting.txt") ;
unlink('send.txt');
}
if($data == "for" and in_array($chat_id2,$ad)){
file_put_contents("com.txt","fd");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>" ارسل توجيهك الان عزيزي 📌.",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);
}
if($bot == "fd" and $text != "/start" and in_array($chat_id,$ad)){
$ali = fopen( "Alsh.txt", 'r');
while(!feof( $ali)){
$ali2 = fgets($ali);
bot('forwardMessage',[
 'chat_id'=>$ali2,
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("com.txt");
 }
 }
 if($data == "med" and in_array($chat_id2,$ad)){
file_put_contents("com.txt","mide");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🔖| حسـننآ الان ارسل احد ميديا،
📌| مثلا : صور،فيديو،ملف،اغنيه،ملصق،ملف صوتي،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);
}
#اذاعه ب ميديا
 if($message->video and $bot == "mide" and in_array($chat_id,$ad) and $text != "/start"){
 $ali = fopen( "Alsh.txt", 'r');
while(!feof( $ali)){
$aly = fgets($ali);
bot('sendvideo',['chat_id'=>$aly,'video'=>$message->video->file_id,'caption'=>$message->caption,'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,]);
bot('sendmessage',[ 
'chat_id'=>$chat_id, 'text'=>"تم نشر الفيديو '📚!",]); }unlink("com.txt"); }
if($message->document and $bot == "mide" and in_array($chat_id,$ad) and $text != "/start"){
$ali = fopen( "Alsh.txt", 'r');
while(!feof( $ali)){
$aly = fgets($ali);
bot('Senddocument',['chat_id'=>$aly,'document'=>$message->document->file_id,'caption'=>$message->caption,'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
]);bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"تم نشر الملف او متحركه '🎻!", ]); } unlink("com.txt");}
 if($message->audio and $bot == "mide" and in_array($chat_id,$ad) and $text != "/start"){
 	$ali = fopen( "Alsh.txt", 'r');
while(!feof( $ali)){
$aly = fgets($ali);
 bot('sendaudio',[    'chat_id'=>$aly,    'audio'=>$message->audio->file_id,    'caption'=>$message->caption,'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
 ]); bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"تم نشر الاغنيه '🎺!", ]); } unlink("com.txt");}
if($message->photo and $bot == "mide" and in_array($chat_id,$ad) and $text != "/start"){
	$ali = fopen( "Alsh.txt", 'r');
while(!feof( $ali)){
$aly = fgets($ali);
    bot('sendPhoto',[      'chat_id'=>$aly,      'photo'=>$message->photo[0]->file_id,      'caption'=>$message->caption,      'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
    ]);bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"تم نشر الصورة '📇!", ]); } unlink("com.txt");}
if($message->voice and $bot == "mide" and in_array($chat_id,$ad) and $text != "/start"){
	$ali = fopen( "Alsh.txt", 'r');
while(!feof( $ali)){
$aly = fgets($ali);
    bot('sendvoice',[     'chat_id'=>$aly,      'voice'=>$message->voice->file_id,     'caption'=>$message->caption,'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
      ]);      bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"تم نشر الاغنيه '📜!", ]); } unlink("com.txt");}
      if($message->sticker and $bot == "mide" and in_array($chat_id,$ad) and $text != "/start"){
      	$ali = fopen( "Alsh.txt", 'r');
while(!feof( $ali)){
$aly = fgets($ali);
bot('sendsticker',['chat_id'=>$aly,'sticker'=>$message->sticker->file_id
]);bot('sendmessage',['chat_id'=>$chat_id, 'text'=>"تم نشر الملصق '📂!", ]); }unlink("com.txt"); }

function save($array){
    file_put_contents('ABoWatan.json', json_encode($array));
}


######
