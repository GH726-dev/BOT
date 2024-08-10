<?php
ob_start();
error_reporting(0);
define("API_KEY",7477702096:AAF9Vq_BsPO1tG2JA6sEbghts2LCFyAMmrM'');
$botname = bot('getme',['bot'])->result->username;
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/$method";
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas); 
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}
}

$admin = 1427981991;// ايديك تلي
$user = "T_0_M0";// يوزرك تلي بدون @
$update = json_decode(file_get_contents('php://input'));
$message= $update->message;
$text = $message->text;
$chat_id= $message->chat->id;
$name = $message->from->first_name;
$user = $message->from->username;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;
$a = strtolower($text);
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;

$msg = file_get_contents("msg.php");
$forward = file_get_contents("forward.php");
$midea = file_get_contents("midea.php");
$inlin = file_get_contents("inlin.php");
$photoi = file_get_contents("photoi.php");
$upq = file_get_contents("up.php");
$skor = file_get_contents("skor.php");


mkdir("data");

$channel = file_get_contents("link.php");
$link = file_get_contents("link2.php");
$ch = "$channel"; #لا تلعب هنا
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
 'text'=>"
🚸| عذرا عزيزي
🔰| عليك الاشتراك بقناة البوت لتتمكن من استخدامه

- [اضغط هنا للشتراك في القناة]($link)

‼️| اشترك ثم ارسل /start",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);return false;}

$uuser = file_get_contents("uuser.php");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$uuser&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
 'text'=>"
🚸| عذرا عزيزي
🔰| عليك الاشتراك بقناة البوت لتتمكن من استخدامه

- $uuser

‼️| اشترك ثم ارسل /start",
]);return false;}

$users = explode("\n",file_get_contents("abbas.json"));

if($message){
if(!in_array($from_id,$users)){
file_put_contents("abbas.json",$from_id."\n",FILE_APPEND);}}

$tc = $message->chat->type;
$abbas09 = json_decode(file_get_contents("abbas09.json"),true);
$suodo = $abbas09['sudoarr'];
$al = $abbas09['addmessage'];
$ab = $abbas09['messagee'];
$xll = $al + $ab;
if($message and $from_id !== $admin){
$abbas09['messagee'] = $abbas09['messagee']+1;
file_put_contents("abbas09.json",json_encode($abbas09,32|128|265));
}
if($message and $from_id == $admin){
$abbas09['addmessage'] = $abbas09['addmessage']+1;
file_put_contents("abbas09.json",json_encode($abbas09,32|128|265));
}

$all = count($users)-1;

$adminss = explode("\n",file_get_contents("ad.json"));

$k088 = file_get_contents("data/k088.txt");
$q1 = file_get_contents("data/q1.txt");
$q2 = file_get_contents("q2.txt");
$q3 = file_get_contents("data/q3.txt");
$q4 = file_get_contents("q4.txt");
$q5 = file_get_contents("data/q5.txt");
$aralikan = file_get_contents("q6.txt");


if($message){
if(!in_array($admin,$adminss)){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
تم تحديث القائمه /start
",
]);
file_put_contents("ad.json",$admin."\n",FILE_APPEND);
}}

$d = date('D');
$day = explode("\n",file_get_contents($d.".txt"));
$todayuser = count($day);
if($d == "Sat"){
unlink("Fri.txt");
}
if($d == "Sun"){
unlink("Sat.txt");
}
if($d == "Mon"){
unlink("Sun.txt");
}
if($d == "Tue"){
unlink("Mon.txt");
}
if($d == "Wed"){
unlink("The.txt");
}
if($d == "Thu"){
unlink("Wedtxt");
}
if($d == "Fri"){
unlink("Thu.txt");
}
if($message and !in_array($from_id, $day)){ 
file_put_contents($d.".txt",$from_id. "\n",FILE_APPEND);
}

$from_id = $message->from->id;
$name = $message->from->first_name;
$id = $message->from->id;
$user = $message->from->username;
if($user){
$user = "@$user";
}
elseif(!$uaer){
$user = "بلا معرف";
}
if($text =="/start" and !in_array($from_id,$users)){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
٭ دخل شخص جديد الى البوت الخاص بك 
ٴ𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳
• اسمه : $name ⦘
• يوزره : ⦗ $user ⦘
• ايديه : ⦗ $id ⦘
ٴ𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳
• عدد الاعضاء الكلي : ⦗ $all ⦘
",
]);
}

$bot = file_get_contents("bot.txt");



//
if($data =="lIllabbas"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"اهلا", 
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"⦅ رفع ادمن ⦆","callback_data"=>"adl"]],
[["text"=>"⦅ اخر الادمن ⦆","callback_data"=>"addmin"]],
[["text"=>"⦅ حذف الادمنيه ⦆","callback_data"=>"delateaddmin"]],
]])
]);   
}

if($data == "adl"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
قم بارسال ايدي العضو
 ",
]); 
file_put_contents("data/k088.txt","k088");
}
if($text !="/start" and $k088 == "k088" and !in_array($text,$adminss)){
file_put_contents("data/k088.txt","none");
file_put_contents("ad.json",$text."\n",FILE_APPEND);} 

if($text != "/start" and $k088 == "k088" and !in_array($text,$adminss)){
file_put_contents("data/k088.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم رفع العضو", 
]);
bot('sendmessage',[
'chat_id'=>$text,
'text'=>"تم رفعك ادمن في البوت", 
]);
}
if($text !="/start" and $k088 == "k088" and in_array($text,$adminss)){
file_put_contents("data/k088.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"العضو ادمن بالفعل", 
]);
}
if($data =="addmin"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"اخر خمس ادمنيه :
 1 - ".$adminss[count($adminss)-2]."
 2 - ️".$adminss[count($adminss)-3]."
 3 - ️".$adminss[count($adminss)-4]."
 4 - ️".$adminss[count($adminss)-5]."
 5 - ️".$adminss[count($adminss)-6]."
",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"⦅ رجوع ⦆","callback_data"=>"backcell"]],
]])
]);   
}
if($data =="delateaddmin" and $chat_id2 =="$admin"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
هل انت متاكد من الحذف
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'⦅ لا ⦆' ,'callback_data'=>"backcell"]],
[['text'=>'⦅ نعم ⦆' ,'callback_data'=>"yesaarsslan"]],
]])
]);
}
if($data =="yesaarsslan"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
تم حذف الادمنيه
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'⦅ رجوع ⦆' ,'callback_data'=>"backcell"]],
]])
]);
unlink("ad.json");
}

if($data =="abcde"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- اهلا بك عزيزي
- تم فتح البوت 
- /start",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'⦅ رجوع ⦆' ,'callback_data'=>"backcell"]],
]])
]);
file_put_contents("bot.txt","مفتوح");
} 
if($data =="abcd"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- اهلا بك عزيزي
- تم قفل البوت
- /start ",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'⦅ رجوع ⦆' ,'callback_data'=>"backcell"]],
]])
]); 
file_put_contents("bot.txt","متوقف");
} 

if($text =="/start" and $bot =="متوقف" and $chat_id != "$admin"){
 bot("sendmessage",[
 "chat_id"=>$chat_id,
 "text"=>"عذرا البوت يخضع للتحديث الان",]);
}

if($data =="userd"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 اهلا بك عزيزي الادمن
 عدد الاعضاء : ( $all )",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'⦅ رجوع ⦆' ,'callback_data'=>"backcell"]],
]])
]);
}

if($data == 'ont'){
file_put_contents("ont.php", "on");
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>"
 مرحبا عزيزي
 تم تفعيل الاشعارات في البوت
",
'show_alert'=>true
]);
}
if($data == 'oft'){
file_put_contents("ont.php", "off");
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>"
 مرحبا عزيزي
⚠ تم تعطيل الاشعارات في البوت
",
'show_alert'=>true
]);
}
$ont = file_get_contents("ont.php");
if($ont == "on"){
if($from_id != $admin){
if($message){
bot('ForwardMessage',[
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}}}

if($data == "for"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم باختيار ما يناسبك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"⦅ اذاعه صورة ⦆",'callback_data'=>"photoi"]],
[['text' => "⦅ اذاعه رسالة ⦆", 'callback_data' => "msg"],['text' => "⦅ اذاعه توجيه ⦆", 'callback_data' => "forward"]],
[['text' => "⦅ اذاعه ميديا ⦆", 'callback_data' => "midea"],['text' => "⦅ اذاعه انلاين ⦆", 'callback_data' => "inline"]],
[['text'=>"⦅ رجوع ⦆",'callback_data'=>"backcell"]],
]])
]);
}
if($data == "msg"){
file_put_contents("msg.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بأرسال رسالتك لتحويلها لجميع المشتركين",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"⦅ الغاء ⦆",'callback_data'=>"backcell"]],
]])
]);
}
if($msg == "on"){
if($message){
for($i=0;$i<count($users); $i++){
bot('sendmessage',[
'chat_id'=>$users[$i],
'text'=>"$text",
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم عمل اذاعه بنجاح
 الى ( $all ) مشترك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"⦅ رجوع ⦆",'callback_data'=>"backcell"]],
]])
]);
unlink("msg.php");
}}
if($data == "forward"){
file_put_contents("forward.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بأرسال رسالتك لتحويلها لجميع المشتركين على شكل توجيه",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"⦅ الغاء ⦆ ",'callback_data'=>"backcell"]],
]])
]);
}
if($forward == "on"){
if($message){
for($i=0;$i<count($users); $i++){
bot('ForwardMessage',[
'chat_id'=>$users[$i],
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم عمل اذاعه توجيه بنجاح
 الى ( $all ) مشترك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"⦅ رجوع ⦆",'callback_data'=>"backcell"]],
]])
]);
unlink("forward.php");
}}
if($data == "midea"){
file_put_contents("midea.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 يمكنك استخدام جميع انوع الميديا ماعدى الصوره
 (ملصق - فيديو - بصمه - ملف صوتي - ملف - متحركه - جهة اتصال )",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"⦅ الغاء ⦆",'callback_data'=>"backcell"]],
]])
]);
}
$up = json_decode(file_get_contents('php://input'),true);
if(!isset($message->text)){
$types = ['voice','audio','video','photo','contact','document','sticker'];
foreach($up['message'] as $key => $val){
if(in_array($key,$types) and $midea == "on"){
for($i=0;$i<count($users); $i++){
bot('send'.$key,[
'chat_id'=>$users[$i],
'caption'=>$message->caption,
$key=>$val['file_id']]);
unlink("midea.php");
}
}
}}
if($data == "photoi"){
file_put_contents("photoi.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بأرسال الصورة لنشرها لجميع المشتركين",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"⦅ الغاء ⦆ ",'callback_data'=>"backcell"]],
]])
]);
}
if($photoi == "on"){
if($message->photo){
for($i=0;$i<count($users); $i++){
bot('sendphoto',[
'chat_id'=>$users[$i],
'photo'=>$message->photo[0]->file_id,
'caption'=>$message->caption,
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم نشر الصورة بنجاح
 الى ( $all ) مشترك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"⦅ رجوع ⦆",'callback_data'=>"backcell"]],
]])
]);
unlink("photoi.php");
}}
if($data == "inline"){
file_put_contents("inlin.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بتوجيه نص الانلاين لاقوم بنشره للمشتركين",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"⦅ الغاء ⦆",'callback_data'=>"backcell"]],
]])
]);
}
if($inlin == "on"){
if($message->forward_from or $message->forward_from_chat){
for($i=0;$i<count($users); $i++){
bot('forwardmessage',[
'chat_id'=>$users[$i],
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم نشر الانلاين بنجاح
 الى ( $all ) مشترك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"⦅ رجوع ⦆",'callback_data'=>"backcell"]],
]])
]);
unlink("inlin.php");
}}

if($data == "channel"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بتحديد الامر لأتمكن من تنفيذه",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"⦅ قناة خاصة ⦆",'callback_data'=>"link"]],
[['text'=>"⦅ قناة عامة ⦆",'callback_data'=>"user"]],
[['text'=>"⦅ رجوع ⦆",'callback_data'=>"backcell"]],
]])
]);
}
if($data == "link"){
file_put_contents("link.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم برفع البوت ادمن في القناة
 ثم ارسل توجيه من القناة الى هنا",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"⦅ رجوع ⦆",'callback_data'=>"backcell"]],
]])
]);
}
$channel_id = $message->forward_from_chat->id;
if($channel == "on"){
if($message->forward_from_chat){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 قم الان بأرسال رابط القناة هنا",
]);
file_put_contents("link.php", $channel_id);
file_put_contents("link2.php", "on");
}}
if($link == "on"){
if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me|(.*)telesco.me|telesco.me(.*)/i',$text)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم تفعيل الاشتراك بنجاح",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"⦅ اتمام العملية ⦆",'callback_data'=>"backcell"]],
]])
]);
file_put_contents("link2.php", $text);
file_put_contents("skor.php", "مفعل ✅");
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 عذرا عزيزي
 قم بأرسال الرابط بصورة صحيحه",
]);
}
}

if($data == "user"){
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم برفع البوت ادمن في القناة
 ثم ارسل يوزر القناة لتفعيل الاشتراك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"⦅ رجوع ⦆",'callback_data'=>"backcell"]],
]])
]);
file_put_contents("uuser.php", "on");
}
if($uuser == "on"){
if(preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم تفعيل الاشتراك بنجاح",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"⦅ اتمام العملية ⏱ ⦆",'callback_data'=>"backcell"]],
]])
]);
file_put_contents("skor.php", "مفعل ✅");
file_put_contents("uuser.php", $text);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 عذرا عزيزي
 قم بأرسال يوزر بصورة صحيحه",
]);
}
}

if($skor == "معطل ⚠️"){
if($data == 'off'){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'
 مرحبا عزيزي
 حالة الاشتراك الاجباري معطل
 قم بختيار - قائمةه الاشتراك .وقم بتفعيله
',
 'show_alert'=>true
 ]); 
}}
if($skor == "مفعل ✅"){
if($data == 'off'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'
 حسنا عزيزي
 حالت الاشتراك الخاص بك مفعل
 هل انت متأكد من رغبتك في تعطيل الاشتراك
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'⦅ نعم ⦆', 'callback_data'=>'yesde2'],
['text'=>'⦅ لا ⦆','callback_data'=>'backcell'],
]
]])
]);
}}

if($data == "yesde2"){
unlink("uuser.php");
unlink("link.php");
file_put_contents("skor.php", "معطل ⚠️");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 تم تعطيل الاشتراك في جميع القنواة
 يمكنك تفعيل الاشتراك لقناتك في مابعد",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"⦅ رجوع ⦆",'callback_data'=>"backcell"]],
]])
]);
}

$bloktime = date('h:i:s A');
if($data == "file"){
$path = realpath("abbas.json");
bot('senddocument',[
'chat_id'=>$chat_id2,
'document'=>new CURLFile($path),
'caption'=>"
 نسخة لمشتركينك
 وقت الارسال : ( $bloktime )
 عدد المشتركين : ( $all )
",
]);
}

if($data == "up"){
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بأرسال ملف الاعضاء الان
 ارسل الملف بأسم : abbas.json",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"⦅ رجوع ⦆",'callback_data'=>"backcell"]],
]])
]);
file_put_contents("up.php", "on");
}
$rep = $message->document->file_name;
if($upq == "on"){
if($message->document and $message->document->file_name == "abbas.json" ){
$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->reply_to_message->document->file_id])->result->file_path;
file_put_contents($message->reply_to_message->document->file_name,file_get_contents($file));
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"* تم رفع الملف  : $rep*",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
unlink("up.php");
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"* لايمكن رفع الملف  : $rep*",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"⦅ الغاء ⦆",'callback_data'=>"backcell"]],
]])
]);
}
}

if($data =="pannel"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*• اهلا بك في قسم - الاحصائيات . 📊
ٴ𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳
• عدد اعضاء بوتك : ⦗ $all ⦘
• المتفاعلين اليوم  : ⦗ $todayuser ⦘
• عدد الرسائل المرسله : ⦗ ".$abbas09['addmessage']." ⦘
• عدد الرسائل المستلمه : ⦗ ".$abbas09['messagee']." ⦘
• مجموع الرسائل : ⦗ $xll ⦘
ٴ𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳*",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'⦅ رجوع ⦆' ,'callback_data'=>"backcell"]],
]])
]);
}



$update = json_decode(file_get_contents('php://input'));
if($update->message){
	$message = $update->message;
$message_id = $update->message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$title = $message->chat->title;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
}


if($update->callback_query ){
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $update->callback_query->from->id;
}

mkdir("PHOTOS");
$path_images = "PHOTOS/";

function SetSetting($INPUT){
    if ($INPUT != NULL || $INPUT != "") {
        $F = "info_bot.json";
        $N = json_encode($INPUT, JSON_PRETTY_PRINT);   
        file_put_contents($F, $N);
        
    }
  }

  $email = json_decode(file_get_contents('info_bot.json'),1);

  $VipMuRad = json_decode(file_get_contents("VipMuRad.json"),true);

// الخزن
function SETJSON($Input){
	
  if($Input != NULL || $Input != ""){
  file_put_contents("VipMuRad.json",json_encode($Input,32|128|265));
  }
  
}

  $AdMin = $admin;
$start_msg = "*
☆︙اهلا بك عزيزي المطور الاساسي
☆︙في لوحه التحكم الاشتراكات
☆︙يمكنك التحكم في الازرار التاليه
*" ;

if($from_id == $AdMin) {
if($text == "/start") {
	$VipMuRad["meAT"][$chat_id]= null;
		SETJSON($VipMuRad) ; 
	bot('sendmessage', [
                'chat_id' => $chat_id,
                "text" => $start_msg, 
                "parse_mode" => "markdown", 
                'reply_to_message_id' => $message_id, 
                'reply_markup' => json_encode([
    'inline_keyboard' => [
        [['text' => '⦅ اضف اشتراك ⦆', 'callback_data' => 'addShtrak' ], ['text' => '⦅ حذف اشتراك ⦆', 'callback_data' => 'delShtrak' ]], 
        [['text' => '⦅ الاشتراكات ⦆', 'callback_data' => 'shtraks' ], ['text' => '⦅ حذف جميع الاشتراكات ⦆', 'callback_data' => 'delall' ]], 
        [['text' => '⦅ تفعيل التنبيه ⦆', 'callback_data' => 'ont' ], ['text' => '⦅ ايقاف التنبيه ⦆', 'callback_data' => 'oft' ]], 
        [["text"=>"⦅ قفل البوت ⦆","callback_data"=>"abcd"],["text"=>"⦅ فتح البوت ⦆","callback_data"=>"abcde"]],
        [["text"=>"⦅ تفعيل التنبيه ⦆","callback_data"=>"ont"],["text"=>"⦅ تعطيل التنبيه ⦆","callback_data"=>"oft"]],
        [["text"=>"⦅ قسم الاذاعه ⦆","callback_data"=>"for"],["text"=>"⦅ اعضاء البوت ⦆","callback_data"=>"userd"]],
        [['text' => "⦅ قائمه الاشتراك ⦆", 'callback_data' => "channel"],['text' => "⦅ الاشتراك ($skor) ⦆", "callback_data" => "off"]],
        [['text' => "⦅ نسخة احتياطيه ⦆", 'callback_data' => "nnn"],['text' => "⦅ رفع نسخه ⦆", 'callback_data' => "up"]],
        [['text' => "⦅ الاحصائيات ⦆", 'callback_data' => "pannel"],['text' => "⦅ قسم الادمن ⦆", 'callback_data' => "lIllabbas"]],
        
    ]
])
            ]);
	} 
	
	if($data == "backcell") {
		$VipMuRad["meAT"][$chat_id]= null;
		SETJSON($VipMuRad) ; 
		bot('editMessagetext', [
                'chat_id' => $chat_id,
                'message_id' => $message_id ,
                'chat_id' => $chat_id,
                "text" => $start_msg, 
                "parse_mode" => "markdown", 
                'reply_to_message_id' => $message_id, 
                'reply_markup' => json_encode([
    'inline_keyboard' => [
        [['text' => '⦅ اضف اشتراك ⦆', 'callback_data' => 'addShtrak' ], ['text' => '⦅ حذف اشتراك ⦆', 'callback_data' => 'delShtrak' ]], 
        [['text' => '⦅ الاشتراكات ⦆', 'callback_data' => 'shtraks' ], ['text' => '⦅ حذف جميع الاشتراكات ⦆', 'callback_data' => 'delall' ]], 
        [['text' => '⦅ تفعيل التنبيه ⦆', 'callback_data' => 'ont' ], ['text' => '⦅ ايقاف التنبيه ⦆', 'callback_data' => 'oft' ]], 
        [["text"=>"⦅ قفل البوت ⦆","callback_data"=>"abcd"],["text"=>"⦅ فتح البوت ⦆","callback_data"=>"abcde"]],
        [["text"=>"⦅ تفعيل التنبيه ⦆","callback_data"=>"ont"],["text"=>"⦅ تعطيل التنبيه ⦆","callback_data"=>"oft"]],
        [["text"=>"⦅ قسم الاذاعه ⦆","callback_data"=>"for"],["text"=>"⦅ اعضاء البوت ⦆","callback_data"=>"userd"]],
        [['text' => "⦅ قائمه الاشتراك ⦆", 'callback_data' => "channel"],['text' => "⦅ الاشتراك ($skor) ⦆", "callback_data" => "off"]],
        [['text' => "⦅ نسخة احتياطيه ⦆", 'callback_data' => "nnn"],['text' => "⦅ رفع نسخه ⦆", 'callback_data' => "up"]],
        [['text' => "⦅ الاحصائيات ⦆", 'callback_data' => "pannel"],['text' => "⦅ قسم الادمن ⦆", 'callback_data' => "lIllabbas"]],
    ]
])
            ]) ; return false ;
            
		} 
		
		if($data == "delall") {
		$VipMuRad["meAT"][$chat_id]= null;
		SETJSON($VipMuRad) ; 
		bot('editMessagetext', [
                'chat_id' => $chat_id,
                'message_id' => $message_id ,
                'chat_id' => $chat_id,
                "text" => "*☆︙هل انت متأكد من حذف جميع الاشتراكات*" , 
                "parse_mode" => "markdown", 
                'reply_to_message_id' => $message_id, 
                'reply_markup' => json_encode([
    'inline_keyboard' => [
        [['text' => '⦅ نعم ⦆', 'callback_data' => 'delal' ], ['text' => '⦅ لا ⦆', 'callback_data' => 'backcell' ]], 
        [['text' => '⦅ رجوع ⦆', 'callback_data' => 'backcell' ]],
    ]
])
            ]) ; return false ;
            
		} 
		
		if($data == "delal") {
		$VipMuRad["shtrak"]= null;
		$VipMuRad["time"] = null ;
		SETJSON($VipMuRad) ; 
		bot('editMessagetext', [
                'chat_id' => $chat_id,
                'message_id' => $message_id ,
                'chat_id' => $chat_id,
                "text" => "*☆︙تم حذف جميع الاشتراكات بنجاح*" , 
                "parse_mode" => "markdown", 
                'reply_to_message_id' => $message_id, 
                'reply_markup' => json_encode([
    'inline_keyboard' => [
        [['text' => '⦅ رجوع ⦆', 'callback_data' => 'backcell' ]],
    ]
])
            ]) ; return false ;
            
		} 
	
	if($data == "shtraks") {
		$co = 0;
		$VipMuRad["shtrak"] = array_unique($VipMuRad["shtrak"]);
		foreach ( $VipMuRad["shtrak"] as $mshtrk) {
			if($mshtrk != null) {
				if (strtotime($VipMuRad["time"][$mshtrk]) >= time()) {
				$co +=1;
				$MSG = "*المشتركين المدفوعين في البوت*" ;
				$ms = $ms. "\n [$mshtrk](tg://user?id=$mshtrk)" ;
				} else {
					$msg2 = "*تنتهي صلاحيه اشتراكهم*" ;
					$ms2 = $ms2. "\n [$mshtrk](tg://user?id=$mshtrk)" ;
					} 
				} else {
					$MSG = "*لايوجد مشتركين مدفوعين*" ; 
					} 
			} 
			if($MSG == null) { $MSG ="*لايوجد مشتركين مدفوعين*";} 
		bot('editMessagetext', [
                'chat_id' => $chat_id,
                'message_id' => $message_id ,
                "text" => "☆︙$MSG\n$ms\n\n$msg2\n$ms2" , 
                "parse_mode" => "markdown", 
                'reply_to_message_id' => $message_id, 
                'reply_markup' => json_encode([
    'inline_keyboard' => [
        [['text' => '⦅ رجوع ⦆', 'callback_data' => 'backcell' ]],
    ]
])
            ]); 
            $VipMuRad["meAT"][$chat_id]= null;
		SETJSON($VipMuRad) ; 
		} 
	
	if($data == "addShtrak") {
		bot('editMessagetext', [
                'chat_id' => $chat_id,
                'message_id' => $message_id ,
                "text" => "*☆︙ارسل ايدي الشخص الان*" , 
                "parse_mode" => "markdown", 
                'reply_to_message_id' => $message_id, 
                'reply_markup' => json_encode([
    'inline_keyboard' => [
        [['text' => '⦅ رجوع ⦆', 'callback_data' => 'backcell' ]],
    ]
])
            ]); 
            $VipMuRad["meAT"][$chat_id]= "addShtrak";
		SETJSON($VipMuRad) ; 
		} 
		
		if($data == "delShtrak") {
		bot('editMessagetext', [
                'chat_id' => $chat_id,
                'message_id' => $message_id ,
                "text" => "*☆︙ارسل ايدي الشخص الان*" , 
                "parse_mode" => "markdown", 
                'reply_to_message_id' => $message_id, 
                'reply_markup' => json_encode([
    'inline_keyboard' => [
        [['text' => '⦅ رجوع ⦆', 'callback_data' => 'backcell' ]],
    ]
])
            ]); 
            $VipMuRad["meAT"][$chat_id]= $data ;
		SETJSON($VipMuRad) ; 
		} 
		if($text and $VipMuRad["meAT"][$chat_id] == "delShtrak") {
			if(is_numeric($text)) {
        $K['inline_keyboard'][] = [['text' => '⦅ رجوع ⦆', 'callback_data' => "backcell" ]];

				bot('sendmessage', [
                'chat_id' => $chat_id,
                "text" => "*☆︙العضو  ⦅* [$text](tg://user?id=$text) *⦆ تم حذف اشتراكه*" , 
                "parse_mode" => "markdown", 
                'reply_to_message_id' => $message_id, 
                'reply_markup' => json_encode($K), 
            ]); 
            $date = date('Y-m-d');
$fg = date('Y-m-d', strtotime($date . " - 1 days"));
            $VipMuRad["time"][$text] = $fg;
            $VipMuRad["meAT"][$chat_id]= null;
            SETJSON($VipMuRad) ; 
				} 
			} 
		
		$data_=explode("|", $data) ;
		
		if($text and $VipMuRad["meAT"][$chat_id] == "addShtrak") {
			if(is_numeric($text)) {
				$VipMuRad["meAT"][$chat_id]= null;
				SETJSON($VipMuRad) ; 
				$K = ['inline_keyboard' => []];
        for($i=1;$i<30;$i++){
            $K['inline_keyboard'][] = [['text' => $i. " يوم" , 'callback_data' => "addday|$text|$i" ]];
        }
        $K['inline_keyboard'][] = [['text' => '⦅ نضام شهري ⦆', 'callback_data' => "month|$text" ]];
        $K['inline_keyboard'][] = [['text' => '⦅ رجوع ⦆', 'callback_data' => "backcell" ]];

				bot('sendmessage', [
                'chat_id' => $chat_id,
                "text" => "*☆︙اختر الان الاشهر او الايام لمده الاشتراك لـ ⦅* [$text](tg://user?id=$text) *⦆*" , 
                "parse_mode" => "markdown", 
                'reply_to_message_id' => $message_id, 
                'reply_markup' => json_encode($K), 
            ]); 
				} 
			} 

if($data_[0] == "month") {
	$text = $data_[1];
	$K = ['inline_keyboard' => []];
        for($i=1;$i<13;$i++){
            $K['inline_keyboard'][] = [['text' => $i. " شهر" , 'callback_data' => "addmonth|$text|$i" ]];
        }
        $K['inline_keyboard'][] = [['text' => '⦅ نضام اليومي ⦆', 'callback_data' => "days|$data_[1]" ]];
        $K['inline_keyboard'][] = [['text' => '⦅ رجوع ⦆', 'callback_data' => "backcell" ]];

				bot('editMessagetext', [
                'chat_id' => $chat_id,
                'message_id' => $message_id,
                "text" => "*☆︙اختر الان الاشهر لتاريخ اشتراك* [$data_[1]](tg://user?id=$data_[1])" , 
                "parse_mode" => "markdown", 
                'reply_to_message_id' => $message_id, 
                'reply_markup' => json_encode($K), 
            ]); 
	} 
	
	if($data_[0] == "days") {
		$text = $data_[1];
	$K = ['inline_keyboard' => []];
        for($i=1;$i<30;$i++){
            $K['inline_keyboard'][] = [['text' => $i. " يوم" , 'callback_data' => "addday|$text|$i" ]];
        }
        $K['inline_keyboard'][] = [['text' => '⦅ نضام شهري ⦆', 'callback_data' => "month|$text" ]];
        $K['inline_keyboard'][] = [['text' => '⦅ رجوع ⦆', 'callback_data' => "backcell" ]];

				bot('editMessagetext', [
                'chat_id' => $chat_id,
                'message_id' => $message_id,
                "text" => "*☆︙اختر الان الاشهر او الايام لمده الاشتراك لـ ⦅* [$text](tg://user?id=$text) *⦆*" , 
                "parse_mode" => "markdown", 
                'reply_to_message_id' => $message_id, 
                'reply_markup' => json_encode($K), 
            ]); 
	} 
	
	date_default_timezone_set('Asia/Baghdad');
 
	if($data_[0] == "addday" || $data_[0] == "addmonth" ) {
		if($data_[0] == "addmonth") { $nm = "اشهر" ; $y = true;} else { $nm = "ايام" ; $y = false;} 
		$text = $data_[1];
		$K['inline_keyboard'][] = [['text' => '⦅ تعيين نوع الاشتراك ⦆', 'callback_data' => "set|$text" ]];
        $K['inline_keyboard'][] = [['text' => '⦅ رجوع ⦆', 'callback_data' => "backcell" ]];
if($y == true) {
	$date = date('Y-m-d');
$time = date('Y-m-d', strtotime($date . " + $data_[2] months"));
			$VipMuRad["shtrak"][]= $text ;
$VipMuRad["time"][$text]= $time ;
		SETJSON($VipMuRad) ; 
		} else {
			$date = date('Y-m-d');
$time = date('Y-m-d', strtotime($date . " + $data_[2] days"));
			$VipMuRad["shtrak"][]= $text ;
			
			$VipMuRad["time"][$text]= $time ;
		SETJSON($VipMuRad) ; 
			} 
		
				bot('editMessagetext', [
                'chat_id' => $chat_id,
                'message_id' => $message_id,
                "text" => "*☆︙تم اضافه الاشتراك المدفوع الي ⦅* [$text](tg://user?id=$text) *⦆ \n ☆︙المده $data_[2] : $nm*" , 
                "parse_mode" => "markdown", 
                'reply_to_message_id' => $message_id, 
                'reply_markup' => json_encode($K), 
            ]); 
	} 
	
	if($data_[0] == "set") {
		$text = $data_[1];
        $K['inline_keyboard'][] = [['text' => '⦅ رجوع ⦆', 'callback_data' => "backcell" ]];

				bot('editMessagetext', [
                'chat_id' => $chat_id,
                'message_id' => $message_id,
                "text" => "*☆︙ارسل الان نوع الاشتراك مثلا اشتراك بوت سبام لـ ⦅* [$text](tg://user?id=$text) *⦆*" , 
                "parse_mode" => "markdown", 
                'reply_to_message_id' => $message_id, 
                'reply_markup' => json_encode($K), 
            ]); 
            $VipMuRad["meAT"][$chat_id]= $data_[0];
            $VipMuRad["to"][$chat_id]= $text ;
		SETJSON($VipMuRad) ; 
	} 

if($text and $VipMuRad["meAT"][$chat_id] == "set") {
	if(!$data) {
	
		
	bot('sendmessage', [
                'chat_id' => $chat_id,
                "text" => "*
☆︙تم حفظ نوع الاشتراك
☆︙اليك [". $VipMuRad["to"][$chat_id]. "](tg://user?id=". $VipMuRad["to"][$chat_id]. ") 
☆︙النوع : $text 
*" , 
                "parse_mode" => "markdown", 
                'reply_to_message_id' => $message_id, 
            ]); 
            $VipMuRad["meAT"][$chat_id]= null ;
            
            $VipMuRad["type"][$VipMuRad["to"][$chat_id]]= $text ;
            
            $VipMuRad["to"][$chat_id]= null ;
            SETJSON($VipMuRad) ;  
           } 
	} 
	
	
}


  
       
                 
if($update) {
	
	if(in_array($from_id, $VipMuRad["shtrak"])) {
		if (strtotime($VipMuRad["time"][$from_id]) >= time()) {
			if($VipMuRad["type"][$from_id] !=null) { $SD = "▪️| نوع اشتراكك :". $VipMuRad["type"][$from_id] ;}
            if($text == "/me") {
		bot('sendmessage', [
                'chat_id' => $chat_id,
                "text" => "*
☆︙مرحبا بك عزيزي 
☆︙انت من المشتركين المدفوعين في البوت
$SD
☆︙تاريخ انتهاء الاشتراك : *". $VipMuRad["time"][$from_id]. "*
" , 
                "parse_mode" => "markdown", 
                'reply_to_message_id' => $message_id, 
            ]); 
        }
           } else {
           	$VipMuRad["msg_id"][$from_id]= $message_id - 1;
	SETJSON($VipMuRad) ;  
	bot('deleteMessage', [
                'chat_id' => $chat_id,
                'message_id' => $VipMuRad["msg_id"][$from_id], 
            ]);  
           	bot('sendmessage', [
                'chat_id' => $chat_id,
                "text" => "*
☆︙الاشتراك المدفوع لديك انتهت صلاحيته
☆︙الرجاء تجديد الاشتراك لاستخدام البوت
*" , 
                "parse_mode" => "markdown", 
                'disable_web_page_preview' => "true",
        'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⦗ مطور البوت ⦘",'url'=>"https://t.me/$user"]],
      ]
    ]) 
            ]);
            die();
          } 
		} else {
			bot('sendmessage', [
                'chat_id' => $chat_id,
                "text" => "*☆︙مرحبا بك عزيزي هذا البوت مدفوع
☆︙يمكنك الاشتراك في البوت والاستمتاع في مميزاته
*" , 
                "parse_mode" => "markdown", 
                'disable_web_page_preview' => "true",
        'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⦗ مطور البوت ⦘",'url'=>"https://t.me/$user"]],
      ]
    ]) 
            ]); 
            die();
			} 
	}
	

if(true){

if($text == "/start"){
    bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"*☆︙اهلا بك عزيزي ⦅* [$name](tg://user?id=$from_id) *⦆
☆︙في بوت الشد الخارجي 
☆︙يمكنك التحكم في الازرار بالاسفل 👇🏻*", 
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"⦅ بدء الارسال ⦆",'callback_data'=>"startsend" ]], 
    [['text'=>"⦅ تعيين حساب ⦆",'callback_data'=>"setacount" ],['text'=>"⦅ تعيين رمز ⦆",'callback_data'=>"setpass" ]], 
    [['text'=>"⦅ اضافه حسابات متعدده ⦆",'callback_data'=>"ADD_ANOTHERS" ]], 
    [['text'=>"⦅ تعيين موضوع ⦆",'callback_data'=>"setsubject" ],['text'=>"⦅ تعيين كليشة ⦆",'callback_data'=>"setmsg" ]], 
    [['text'=>"⦅ تعيين عدد الارسال ⦆",'callback_data'=>"setcount" ]],[['text'=>"⦅ تعيين صورة ⦆",'callback_data'=>"setphoto" ],['text'=>"⦅ تعيين ايميلات ⦆",'callback_data'=>"setemails" ]],[['text'=>"⦅ تعيين السليب ⦆",'callback_data'=>"setsleep" ]], 
    [['text'=>"⦅ مسح صورة الرفع ⦆",'callback_data'=>"delphoto" ],['text'=>"⦅ عرض معلوماتك ⦆",'callback_data'=>"myinfo" ]], 
    [['text'=>"⦅ مسح معلوماتك ⦆",'callback_data'=>"delinfos" ]], 
     ]
   ])
]); 
unset($email['mode'][$from_id]);
SetSetting($email);
die();
}

if($data == "back_be"){
    bot('editmessagetext', [
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*☆︙اهلا بك عزيزي ⦅* [$name](tg://user?id=$from_id) *⦆
☆︙في بوت الشد الخارجي 
☆︙يمكنك التحكم في الازرار بالاسفل 👇🏻*", 
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"⦅ بدء الارسال ⦆",'callback_data'=>"startsend" ]], 
    [['text'=>"⦅ تعيين حساب ⦆",'callback_data'=>"setacount" ],['text'=>"⦅ تعيين رمز ⦆",'callback_data'=>"setpass" ]], 
    [['text'=>"⦅ اضافه حسابات متعدده ⦆",'callback_data'=>"ADD_ANOTHERS" ]], 
    [['text'=>"⦅ تعيين موضوع ⦆",'callback_data'=>"setsubject" ],['text'=>"⦅ تعيين كليشة ⦆",'callback_data'=>"setmsg" ]], 
    [['text'=>"⦅ تعيين عدد الارسال ⦆",'callback_data'=>"setcount" ]],[['text'=>"⦅ تعيين صورة ⦆",'callback_data'=>"setphoto" ],['text'=>"⦅ تعيين ايميلات ⦆",'callback_data'=>"setemails" ]],[['text'=>"⦅ تعيين السليب ⦆",'callback_data'=>"setsleep" ]], 
    [['text'=>"⦅ مسح صورة الرفع ⦆",'callback_data'=>"delphoto" ],['text'=>"⦅ عرض معلوماتك ⦆",'callback_data'=>"myinfo" ]], 
    [['text'=>"⦅ مسح معلوماتك ⦆",'callback_data'=>"delinfos" ]], 
     ]
   ])
]); 
unset($email['mode'][$from_id]);
SetSetting($email);
die();
} 
$acount = $email['mail_me'][$from_id] ?? "( لم يتم وضع حساب )";
$pass = $email['pass_me'][$from_id] ?? "( لم يتم وضع رمز )";
$sbject = $email['sub_me'][$from_id] ?? "( لم يتم وضع موضوع رساله )";
$msg = $email['msg_me'][$from_id] ?? "( لم يتم وضع رساله )";
$count = $email['count_me'][$from_id] ?? "( لم يتم وضع عدد ارسال )";
$sleep = $email['slep_me'][$from_id] ?? "( لم يتم وضع سليب وقتي )";
$phto = $email['image_me'][$from_id];
if($phto == null){
    $phto = "( لم يتم وضع صوره )";
    $ys = "لايحتوي علي صوره";
}else{
    $name_phto = explode("otos/",$phto)[1];
    $phto = "° $name_phto";
    $ys = "نعم";
}
foreach($email['mails_me'][$from_id] as $mailx){
    $emailsmv = $emailsm."\n $mailx ";
    $emailsm = $mailx;
}
if($data == "startsend"){
$g = "https://".$_SERVER['SERVER_NAME'].str_replace('bots.php','',$_SERVER['SCRIPT_NAME'])."sender.php?token=".urlencode(API_KEY)."&update=".urlencode(json_encode($update))."";
    bot('editmessagetext', [
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
- تم بدأ الارسال 
", 

'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"⦅ رجوع ⦆",'callback_data'=>"back_be" ]], 
     ]
   ])
]); 

$send = $_SERVER['SERVER_NAME'];
$url = "https://" . $_SERVER['SERVER_NAME'] . str_replace('bots.php', '', $_SERVER['SCRIPT_NAME']) . "sender.php?token=" . urlencode(API_KEY) . "&update=" . urlencode(json_encode($update)) . "&mail=" . urlencode($acount) . "&pass=" . urlencode($pass) . "&sub=" . urlencode($sbject) . "&msg=" . urlencode($msg) . "&count=" . urlencode($count) . "&sleep=" . urlencode($sleep) . "&from_id=" . urlencode($from_id) . "&emailsm=" . urlencode($emailsm);

$timeout = 10;
$context = stream_context_create(['http' => ['timeout' => $timeout]]);

try {
    $response = file_get_contents($url, false, $context);

    if ($response === false) {
        throw new Exception('Failed to get content from the server.');
    }

    echo $response;
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
}

// عرض المعلومات

foreach($email['mails_me'][$from_id] as $mailx){
    $emailsmv = $emailsmv."\n $mailx ";
    $emailsm = $mailx;
}
if($data == "myinfo"){
    bot('editmessagetext', [
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
• معلوماتك 👇🏻

☆︙ايميلك : $acount 
☆︙كلمه السر : $pass 
☆︙الكليشة :  $msg 
☆︙العنوان : $sbject 
☆︙يحتوي على صوره : $ys 
☆︙السليب وعدد الرفع : $sleep ثانية ،  $count مره
☆︙ايميلات الشركه :  $emailsmv ", 
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⦅ رجوع ⦆",'callback_data'=>"back_be" ]], 
 ]
])
]); 
unset($email['mode'][$from_id]);
SetSetting($email);
die();
}


// مسح المعلومات
if($data == "delinfos"){
    bot('editmessagetext', [
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
- تم بنجاح مسح معلوماتك 
*", 
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⦅ رجوع ⦆",'callback_data'=>"back_be" ]], 
 ]
])
]); 
unset($email['mail_me'][$from_id]);
unset($email['pass_me'][$from_id]);
unset($email['sub_me'][$from_id]);
unset($email['msg_me'][$from_id]);
unset($email['count_me'][$from_id]);
unset($email['slep_me'][$from_id]);

unlink($path_images.$from_id.'.jpg');

unset($email['image_me'][$from_id]);
unset($email['mode'][$from_id]);
SetSetting($email);
die();
}
// مسح صوره الرفع
if($data == "delphoto"){
    bot('editmessagetext', [
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
- تم بنجاح مسح الصوره عزيزي .
*", 
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⦅ رجوع ⦆",'callback_data'=>"back_be" ]], 
 ]
])
]); 
unlick($path_images.$from_id.'.jpg');
unset($email['image_me'][$from_id]);
unset($email['mode'][$from_id]);
SetSetting($email);
die();
}


// وضع السليب



if($data == "ADD_ANOTHERS"){
    $m = -1;
    foreach($email['myaie'][$chat_id] as $b){
        $emaila = explode('??',$b)[0];
        $pass = explode('??',$b)[1];
        $m += 1;
        $bb = $bb."\nالايميل : $emaila\nالباسورد : $pass \n للحذف ارسل /deler_$m\n\n\n";
    }
    bot('editmessagetext', [
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
- في هذا القسم يمكنك اضافه حسابات متعدده .

- حساباتك المضافه :
 $bb
*", 

'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"⦅ أضافه حساب ⦆",'callback_data'=>"ADDx" ]], 
[['text'=>"⦅ رجوع ⦆",'callback_data'=>"back_be" ]], 
 ]
])
]); 
$email['mode'][$from_id] = $data;
SetSetting($email);
die();
}


if(preg_match('/deler_/',$text)){
    $JJ = explode('ler_',$text)[1];
    unset($email['myaie'][$chat_id][$JJ]);
    SetSetting($email);
            bot('sendmessage', [
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
- تم الحذف
*", 
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
'inline_keyboard'=>[

[['text'=>"⦅ رجوع ⦆",'callback_data'=>"ADD_ANOTHERS" ]], 
 ]
])
]); 
}
if($data == "ADDx"){
    bot('editmessagetext', [
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
- أرسل الايميل مع @gmail.com الأن
*", 
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
'inline_keyboard'=>[

[['text'=>"⦅ رجوع ⦆",'callback_data'=>"ADD_ANOTHERS" ]], 
 ]
])
]); 
$email['mode'][$from_id] = $data;
SetSetting($email);
die();
}

if($text and $email['mode'][$from_id] == "ADDx"){
    if(preg_match('/@gmail.com/',$text)){
        bot('sendmessage', [
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
- حلو أرسل رمز الحساب الداخلي من فضلك
*", 
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
'inline_keyboard'=>[

[['text'=>"⦅ رجوع ⦆",'callback_data'=>"ADD_ANOTHERS" ]], 
 ]
])
]); 
$email['mode'][$from_id] = "passer";
$email['saves'][$from_id] = "$text";
SetSetting($email);
die();
    }
}

if($text and $email['mode'][$from_id] == "passer"){
    $mai = $email['saves'][$from_id];
            bot('sendmessage', [
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
- تم اضافه بريد جديد [$mai] .
- رمز : $text
*", 
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
'inline_keyboard'=>[

[['text'=>"⦅ رجوع ⦆",'callback_data'=>"ADD_ANOTHERS" ]], 
 ]
])
]); 
unset($email['mode'][$from_id]);
unset($email['saves'][$from_id]);
$email['myaie'][$chat_id][] = $mai.'??'.$text;
SetSetting($email);
}


if($data == "setsleep"){
    bot('editmessagetext', [
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
- أرسل السليب ( الوقت بين كل ارسال )
*", 
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⦅ رجوع ⦆",'callback_data'=>"back_be" ]], 
 ]
])
]); 
$email['mode'][$from_id] = $data;
SetSetting($email);
die();
}

if($text and $email['mode'][$from_id] == "setsleep"){
    if(!is_numeric($text)){
        bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"*
- ارسل السليب صحيحا !
~ الارقام فقط 
*", 

'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"⦅ رجوع ⦆",'callback_data'=>"back_be" ]], 
 ]
])
]); 
die();
    }
    bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"*
- تم تعيين السليب
~ $text
*", 

'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"⦅ رجوع ⦆",'callback_data'=>"back_be" ]], 
 ]
])
]); 
$email['slep_me'][$from_id] = $text;
unset($email['mode'][$from_id]);
SetSetting($email);
die();
}

// وضع أيميلات
if($data == "setemails"){
    bot('editmessagetext', [
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
- أرسل الايميل لاضافته للقائمه :
*", 
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⦅ رجوع ⦆",'callback_data'=>"back_be" ]], 
 ]
])
]); 
$email['mode'][$from_id] = $data;
SetSetting($email);
die();
}

if($text and $email['mode'][$from_id] == "setemails"){
    bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"*
- تم اضافه ايميل جديد للقائمه :
~ $text
*", 

'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"⦅ رجوع ⦆",'callback_data'=>"back_be" ]], 
 ]
])
]); 
$email['mails_me'][$from_id][] = $text;
unset($email['mode'][$from_id]);
SetSetting($email);
die();
}

// وضع عدد الارسال
if($data == "setphoto"){
    bot('editmessagetext', [
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
- أرسل الصوره الان :


", 
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⦅ رجوع ⦆",'callback_data'=>"back_be" ]], 
 ]
])
]); 
$email['mode'][$from_id] = $data;
SetSetting($email);
die();
}

if($update->message->photo and $email['mode'][$from_id] == "setphoto"){
    $file_id = "https://api.telegram.org/file/bot".API_KEY."/".bot("getfile",["file_id"=>$update->message->photo[0]->file_id])->result->file_path;
    $name_phto = explode("otos/",$file_id)[1];

    bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
- تم وضع الصورة بنجاح
~ $name_phto
", 
'disable_web_page_preview'=>true, 
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"⦅ رجوع ⦆",'callback_data'=>"back_be" ]], 
 ]
])
]); 
file_put_contents($path_images.$from_id.'.jpg',file_get_contents($file_id));
$email['image_me'][$from_id] = $file_id;
unset($email['mode'][$from_id]);
SetSetting($email);
die();
}

// وضع عدد الارسال
if($data == "setcount"){
    bot('editmessagetext', [
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
- أرسل العدد للارسال الان :


", 
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⦅ رجوع ⦆",'callback_data'=>"back_be" ]], 
 ]
])
]); 
$email['mode'][$from_id] = $data;
SetSetting($email);
die();
}

if($text and $email['mode'][$from_id] == "setcount"){
    bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
- تم وضع العدد
~ `$text`

", 
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"⦅ رجوع ⦆",'callback_data'=>"back_be" ]], 
 ]
])
]); 
$email['count_me'][$from_id] = $text;
unset($email['mode'][$from_id]);
SetSetting($email);
die();
}

// وضع رساله
if($data == "setmsg"){
    bot('editmessagetext', [
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
- أرسل الرساله الأان :


", 
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⦅ رجوع ⦆",'callback_data'=>"back_be" ]], 
 ]
])
]); 
$email['mode'][$from_id] = $data;
SetSetting($email);
die();
}

if($text and $email['mode'][$from_id] == "setmsg"){
    bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
- تم وضع الرساله 
~ `$text`

", 
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"⦅ رجوع ⦆",'callback_data'=>"back_be" ]], 
 ]
])
]); 
$email['msg_me'][$from_id] = $text;
unset($email['mode'][$from_id]);
SetSetting($email);
die();
}

// وضع موضوع رساله
if($data == "setsubject"){
    bot('editmessagetext', [
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
- أرسل موضوع الرساله الان :


", 
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⦅ رجوع ⦆",'callback_data'=>"back_be" ]], 
 ]
])
]); 
$email['mode'][$from_id] = $data;
SetSetting($email);
die();
}

if($text and $email['mode'][$from_id] == "setsubject"){
    bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
- تم وضع موضوع الرساله 
~ `$text`

", 
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"⦅ رجوع ⦆",'callback_data'=>"back_be" ]], 
 ]
])
]); 
$email['sub_me'][$from_id] = $text;
unset($email['mode'][$from_id]);
SetSetting($email);
die();
}

// وضع باسورد
if($data == "setpass"){
    bot('editmessagetext', [
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
- أرسل باسوردك ألان :
~ تنبيه : ليس باسورد الحساب بل الرمز الداخلي 

", 
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⦅ رجوع ⦆",'callback_data'=>"back_be" ]], 
 ]
])
]); 
$email['mode'][$from_id] = $data;
SetSetting($email);
die();
}

if($text and $email['mode'][$from_id] == "setpass"){
    bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
- تم وضع الرمز بنجاح
~ `$text`

", 
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"⦅ رجوع ⦆",'callback_data'=>"back_be" ]], 
 ]
])
]); 
$email['pass_me'][$from_id] = $text;
unset($email['mode'][$from_id]);
SetSetting($email);
die();
}

// وضع ايميل
if($data == "setacount"){
        bot('editmessagetext', [
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
- ارسل ايميلك الأان :
يجب ان ينتهي ب @gmail.com
- ex : MuRad@gmail.com

", 
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"⦅ رجوع ⦆",'callback_data'=>"back_be" ]], 
     ]
   ])
]); 
$email['mode'][$from_id] = $data;
SetSetting($email);
die();
}

if($text and $email['mode'][$from_id] == "setacount"){
if(preg_match("/@gmail.com/",$text)){
        bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
- تم وضع الايميل بنجاح 
~ $text

", 
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"⦅ رجوع ⦆",'callback_data'=>"back_be" ]], 
     ]
   ])
]); 
$email['mail_me'][$from_id] = $text;
unset($email['mode'][$from_id]);
SetSetting($email);
die();
}
}


}