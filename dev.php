<?php
flush();
ob_start();
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);

###########
if( $text=="/start" &&  $tc == "private" or $text=="⋄ رجوع" &&  $tc == "private" ){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌯⁞ آهہ‌‏لآ عزيزي آلمـطـور !
⌯⁞ آنتهہ‌‏ آلمـطـور آلآسـآسـي هہ‌‏نآ 
 
⌯⁞ تسـتطـيع‌‏ آلتحكم بكل آلآوآمـر آلمـمـوجودهہ‌‏ بآلكيبورد
⌯⁞ فقط آضـغط ع آلآمـر آلذي تريد تنفيذهہ‌‏

⋄︙ [تحديثات السورس الجديده](https://t.me/$devchink)
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"⋄ نقل الملكية"],['text'=>"⋄ حذف المالك الثاني"]],
[['text'=>"⋄ تحديث السورس"]],
[['text'=>"⋄ تعين الاسم"],['text'=>"⋄ تحديث"],['text'=>"⋄ حذف الاسم"]],
[['text'=>"⋄ قسم كت تويت"],['text'=>"⋄ قسم الاستارت"]],
[['text'=>"⋄ قسم الاذاعه"],['text'=>"⋄ قسم الاوامر"],['text'=>"⋄ قسم الاشتراك"]],
[['text'=>"⋄ الاحصائيات"],['text'=>"⋄ المشتركين"],['text'=>"⋄ المجموعات"]],
[['text'=>"⋄ تفعيل بوت المطور"],['text'=>"⋄ تفعيل بوت الخدمي"]],
[['text'=>"⋄ وضع عدد التفعيل"]],
[['text'=>"⋄ تفعيل الاحصائيات"],['text'=>"⋄ تعطيل الاحصائيات"]],
[['text'=>"⋄ روابط الكروبات"]],
[['text'=>"⋄ تعين كليشة المطور"],['text'=>"⋄ حذف كليشة المطور"]],
[['text'=>"⋄ حظر مجموعه"],['text'=>"⋄ قسم تواصل"]],
[['text'=>"⋄ قسم رد عام"]],
[['text'=>"⋄ تفعيل التبنيه"],['text'=>"⋄ تعطيل التنبيه"]],
[['text'=>"⋄ مسح المكتومين عام"]],
[['text'=>"⋄ مسح قائمة العام"]],
[['text'=>"⋄ المكتومين عام"],['text'=>"⋄ المحظورين عام"]],
[['text'=>"⋄ مسح المحظورين عام"]],
[['text'=>"⋄ ترتيب الاوامر"]],
[['text'=>"⋄ تجربة السورس"],['text'=>"⋄ المطورين الثانويه"]],
[['text'=>"⋄ مسح المطورين الثانويه"]],
],
'resize_keyboard'=>true
])
]);
}
}
if( $text=="⋄ قسم تواصل"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙ مرحبا ⋙ [$first_name](tg://user?id=$from_id)
⋄︙ انت الان في القسم العام بالتواصل
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"⋄ جلب تواصل"]],
[['text'=>"⋄ تعين تواصل"],['text'=>"⋄ حذف تواصل"]],
[['text'=>"⋄ تعطيل تواصل"],['text'=>"⋄ تفعيل تواصل"]],
[ ['text'=>"⋄ رجوع"] ],
],
'resize_keyboard'=>true
])
]);
}
}
if( $text=="⋄ قسم الاستارت"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙ مرحبا ⋙ [$first_name](tg://user?id=$from_id)
⋄︙ انت الان في القسم الستارت
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"⋄ تفعيل الاستارت"],['text'=>"⋄ تعطيل الاستارت"]],
[['text'=>"⋄ جلب الاستارت"]],
[['text'=>"⋄ تعين الاستارت"],['text'=>"⋄ حذف الاستارت"]],
[['text'=>"⋄ رجوع"]],
],
'resize_keyboard'=>true
])
]);
}
}
if( $text=="⋄ قسم كت تويت"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙ مرحبا ⋙ [$first_name](tg://user?id=$from_id)
⋄︙ انت الان في القسم الستارت
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"⋄ اضف كت"],['text'=>"⋄ حذف كت"]],
[['text'=>"⋄ عدد الاسئله"]],
[['text'=>"⋄ مسح الاسئله"]],
[ ['text'=>"⋄ رجوع"] ],
],
'resize_keyboard'=>true
])
]);
}
}
if( $text=="⋄ قسم الاذاعه"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙ مرحبا ⋙ [$first_name](tg://user?id=$from_id)
⋄︙ انت الان في القسم الاحصائيات و الاذاعه",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"⋄ الاحصائيات"]],
[['text'=>"⋄ توجيه خاص"]],
[['text'=>"⋄ اذاعه عام"],['text'=>"⋄ اذاعه خاص"]],
[['text'=>"⋄ توجيه عام"]],
[['text'=>"⋄ المجموعات"]],
[['text'=>"⋄ المشتركين"]],
[ ['text'=>"⋄ رجوع"] ],
],
'resize_keyboard'=>true
])
]);
}
}
if( $text=="⋄ قسم الاوامر"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙ مرحبا ⋙ [$first_name](tg://user?id=$from_id)
⋄︙ انت الان في القسم تعين الاوامر",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"⋄ تعين م1"],['text'=>"⋄ تعين م2"]],
[['text'=>"⋄ تعين م3"],['text'=>"⋄ تعين م4"]],
[['text'=>"⋄ تعين م5"],['text'=>"⋄ تعين م6"]],
[['text'=>"⋄ اعادة تعين"]],
[['text'=>"⋄ حذف م1"],['text'=>"⋄ حذف م2"]],
[['text'=>"⋄ حذف م3"],['text'=>"⋄ حذف م4"]],
[['text'=>"⋄ حذف م5"],['text'=>"⋄ حذف م6"]],
[['text'=>"⋄ تعين السورس"],['text'=>"⋄ حذف السورس"]],
[['text'=>"⋄ رجوع"]],
],
'resize_keyboard'=>true
])
]);
}
}
if($text=="⋄ قسم الاشتراك"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙مرحبا ⋙ [$first_name](tg://user?id=$from_id)
⋄︙ انت الان في القسم الاشتراك الاجباري",
'parse_mode'=>'MarkDown',
'reply_to_message_id'=>$message_id, 
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"⋄ حذف الاشتراك"],['text'=>"⋄ تعين الاشتراك"]],
[['text'=>"⋄ جلب الاشتراك"]],
[['text'=>"⋄ تفعيل الاشتراك"]],
[['text'=>"⋄ تعطيل الاشتراك"]],
[ ['text'=>"⋄ رجوع"] ],
],
'resize_keyboard'=>true
])
]);
}
}
if($text=="⋄ قسم رد عام"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙ مرحبا ⋙ [$first_name](tg://user?id=$from_id)
⋄︙ انت الان في القسم الردود العام  ",
'parse_mode'=>'MarkDown',
'reply_to_message_id'=>$message_id, 
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"⋄ اضف رد عام"],['text'=>"⋄ حذف رد عام"]],
[['text'=>"⋄ حذف ردود المطور"],['text'=>"⋄ ردود المطور"]],
[['text'=>"⋄ رجوع"]],
],
'resize_keyboard'=>true
])
]);
}
}

$developers_info = file_get_contents("data/developers/developer.txt");
$developer = explode ("\n",$developers_info);
$developers_infos = file_get_contents("data/developers/developers.txt");
$developers = explode("\n",$developers_infos);
$list_developers ="";
$list_developers = $list_developers.""."$developers_infos ➖➖➖➖➖➖➖";
/*===== dev ~ @FF8FFI =====*/
$AUBEHABB_info = file_get_contents("data/AUBEHAB/AUBEHAB.txt");
$AUBEHAB = explode ("\n",$AUBEHABB_info);
$AUBEHABB_infos = file_get_contents("data/AUBEHAB/AUBEHABB.txt");
$AUBEHABB = explode("\n",$AUBEHABB_infos);
$list_AUBEHAB ="";
$list_AUBEHAB = $list_AUBEHAB.""."$AUBEHABB_infos";
/*===== dev ~ @FF8FFI =====*/
$nazarr_info = file_get_contents("data/nazar/$chat_id.txt");
$nazar  = explode("\n",$nazarr_info);
$nazarr_infos = file_get_contents("data/nazar/$chat_id/nazr.txt");
$nazarr = explode ("\n",$nazarr_infos);
/*===== dev ~ @FF8FFI =====*/
$carloss_info = file_get_contents("data/carlos/$chat_id.txt");
$carlos  = explode("\n",$carloss_info);
$carloss_infos = file_get_contents("data/carlos/$chat_id/crlo.txt");
$carloss = explode ("\n",$carloss_infos);
/*===== dev ~ @FF8FFI =====*/
$mangers_info = file_get_contents("data/manger/$chat_id.txt");
$manger  = explode("\n",$mangers_info);
$mangers_infos = file_get_contents("data/manger/$chat_id/mange.txt");
$mangers = explode ("\n",$mangers_infos);
/*===== dev ~ @FF8FFI =====*/
$admin_users_info = file_get_contents("data/admin_user/$chat_id.txt");
$admin_user  = explode("\n",$admin_users_info);
$admin_users_infos = file_get_contents("data/admin_user/$chat_id/mange.txt");
$admin_users = explode ("\n",$admin_users_infos);
/*===== dev ~ @FF8FFI =====*/
$mmyazs_info = file_get_contents("data/mmyaz/$chat_id.txt");
$mmyaz  = explode("\n",$mmyazs_info);
$mmyazs_infos = file_get_contents("data/mmyaz/$chat_id/mange.txt");
$mmyazs = explode ("\n",$mmyazs_infos);
/*===== dev ~ @FF8FFI =====*/
$motay_info = file_get_contents("data/motay/$chat_id.txt");
$motay  = explode("\n",$motay_info);
$motaya_infos = file_get_contents("data/motay/$chat_id/mange.txt");
$motaya = explode ("\n",$motaya_infos);
/*===== dev ~ @FF8FFI =====*/
$bans = file_get_contents("data/ban/$chat_id.txt");
$banids  = explode("\n",$bans);
$banslist = file_get_contents("data/ban/$chat_id/list.txt");
$banlist = explode ("\n",$banslist);
/*===== dev ~ @FF8FFI =====*/
mkdir("data");
mkdir("data/developers");
mkdir("data/AUBEHAB");
mkdir("data/nazar");
mkdir("data/nazar/$chat_id");
mkdir("data/ban");
mkdir("data/ban/$chat_id");
mkdir("data/carlos");
mkdir("data/carlos/$chat_id");
mkdir("data/manger");
mkdir("data/manger/$chat_id");
mkdir("data/motay");
mkdir("data/motay/$chat_id");
mkdir("data/admin_user");
mkdir("data/admin_user/$chat_id");
mkdir("data/mmyaz");
mkdir("data/mmyaz/$chat_id");
mkdir("data/miss/$chat_id");
mkdir("data/miss/$chat_id/miss.json");
mkdir("statistics");

$DRPP = "$token";
$ckl = "@$devchink"; 
$ch2 = file_get_contents("https://api.telegram.org/bot$DRPP/getChatMember?chat_id=".$ckl."&user_id=".$from_id);
$getch2 = json_decode(file_get_contents("http://api.telegram.org/bot$DRPP/getChat?chat_id=".$ckl))->result;
$Namech2 = $getch2->title;
$getch2li = str_replace("@","",$ckl);
if($text == "تفعيل" or $text == "حظر" or $text == "ايدي" or $text == "كتم" or $text == "تقيد" or $text == "الاوامر" or $text == "ا" or $text == "الاعدادات" or $text == "رتبتي" or $text == "كشف" or $text == "الرتبه" or $text == "رتبته" or $text == "اضف رد" or $text == "حذف رد" or $text == "تاك" or $text == "حذف امر" or $text == "اضف امر" or $text == "تاك للكل" or $text == "/start"){
if($message && (strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>'
⌔︙عذرا عزيزي ⚠️.
⌔︙لا يمكنك استخدام البوت 🔰.
⌔︙الا بعد الاشتراك بقناة 🚫.
⌔︙القناة : '.$ckl.' ✅
',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>$Namech2,'url'=>"https://t.me/$getch2li"]],
]])
]);return false;}}

$setch = file_get_contents("data/setch.json");
$setchannel = file_get_contents("data/setchannel.json");
if($text == "تفعيل" or $text == "حظر" or $text == "ايدي" or $text == "كتم" or $text == "تقيد" or $text == "الاوامر" or $text == "الاعدادات" or $text == "رتبتي" or $text == "كشف" or $text == "الرتبه" or $text == "رتبته" or $text == "اضف رد" or $text == "حذف رد" or $text == "تاك" or $text == "حذف امر" or $text == "اضف امر" or $text == "تاك للكل" or $text == "/start"){
if(!in_array($from_id,$Dev) and !in_array($from_id,$developer) and !in_array($from_id,$eri)){
if($setchannel == "مفعل ✔️"){
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$setch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⌯⁞  مرحبا عزيزي\n⌯⁞ عليك الاشتراك في قناة البوت اولا [@$setch]\n⌯⁞  ليمكنك استخدامه",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🎖اضغط هنا 🎖",'url'=>"t.me/$setch"]],]])]);
 bot("sendmessage",[
      "chat_id"=>$Devd,
      "text"=>"",
      ]);
      die('اا');
  }
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>" ",'reply_to_message_id'=>$message->message_id,]);}}}

$new = $message->new_chat_member;
$newbot = $update->message->new_chat_member;
if ($new and $new->id == $bot_id) {
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"⋄︙بوت ← $namebot
⋄︙لحماية المجموعات من التخريب
⋄︙يتم حذف (الفشار،الاباحي،...)
⋄︙البوت الاول علي التلجرام
⋄︙قم برفعي كمشرف و ارسل ← تفعيل
⋄︙المطور ← [$DevUser]
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);}

if(in_array($from_id,$eri)){
$info = "مطور السورس";
}
elseif(in_array($from_id,$developer) ){
$info = "مطور ثانوي";
}
elseif(in_array($from_id,$Dev) ){
$info = "مطور الاساسي";
}
elseif(in_array($from_id,$nazar) ){
$info = "منشئ اساسي";
}
elseif(in_array($from_id,$carlos) ){
$info = "منشئ";
}
elseif($status == "creator"){
$info = "المالك";
}
elseif(in_array($from_id,$manger) ){
$info = "المدير";
}
elseif(in_array($from_id,$admin_user) ){
$info = "ادمن";
}
elseif(in_array($from_id,$mmyaz) ){
$info = "عضو مميز";
}elseif($status == "member" ){
$info = "عضو فقط";
}
if(!@$username){
$casss = "لايوجد يوزر";
}elseif(@$username){
$casss = "@$username";
}
if($text=="رتبتي" ){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
⌯⁞ رتبتك ↫ $info
⌯⁞ ايديك ↫ $from_id
⌯⁞ معرفك ↫ $casss
",
'parse_mode'=>"html",
'reply_to_message_id'=>$message->message_id,
]);
}
/*===== dev ~ @FF8FFI =====*/
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
@$settings2 = json_decode(file_get_contents("data/$chatid.json"),true);
$re = $update->message->reply_to_message;
$re_id = $update->message->reply_to_message->from->id;
$settingdev = json_decode(file_get_contents("DEVER.json"),true);
@$editgetsettings = json_decode(file_get_contents("data/$chat_edit_id.json"),true);
@$user = json_decode(file_get_contents("data/user.json"),true);
if($text == "اضف امر" or $text == "وضع امر" or $text == "وظع امر" or $text == "وظع امر"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙ارسل الامر القديم الان .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
elseif($text == "رفع مميز" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
⋄︙ارسل الامر الجديد الان .
*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.mmaz";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "رفع ادمن" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙ارسل الامر الجديد الان .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.admi";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "رفع مدير" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙ارسل الامر الجديد الان .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.modir";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "رفع منشئ" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙ارسل الامر الجديد الان .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.mans";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "رفع منشئ اساسي" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙ارسل الامر الجديد الان .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.mansas";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "تاك للكل" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙ارسل الامر الجديد الان .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.tagall";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "تنزيل الكل" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos) || in_array($from_id,$nazar) || in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙ارسل الامر الجديد الان .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.tkal";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "ايدي" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙ارسل الامر الجديد الان .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.idse";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "كشف" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙ارسل الامر الجديد الان .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.ksh";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "حظر" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙ارسل الامر الجديد الان .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.kik";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "طرد" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙ارسل الامر الجديد الان .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.kout";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "كتم" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙ارسل الامر الجديد الان .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.ktm";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "تقيد" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙ارسل الامر الجديد الان .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.tkeed";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.mmaz"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙ارسل الامر الجديد الان .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["mmaz"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.admi"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙تم حفظ الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["admi"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.mansas"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙تم حفظ الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["mansas"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.tkal"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙تم حفظ الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["tkal"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.mans"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙تم حفظ الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["mans"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.tagall"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙تم حفظ الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["tagall"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.modir"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙تم حفظ الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["modir"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.idse"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙تم حفظ الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["idse"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.ksh"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙تم حفظ الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["ksh"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.kik"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙تم حفظ الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["kik"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.kout"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙تم حفظ الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["kout"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.ktm"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙تم حفظ الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["ktm"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.tkeed"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙تم حفظ الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["tkeed"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
$setmm = $settings["information"]["mmaz"];
$settagall = $settings["information"]["tagall"];
$setmans = $settings["information"]["mans"];
$setmansas = $settings["information"]["mansas"];
$setad = $settings["information"]["admi"];
$stmode = $settings["information"]["modir"];
$setid = $settings["information"]["idse"];
$setksh = $settings["information"]["ksh"];
$sethazr = $settings["information"]["kik"];
$setout = $settings["information"]["kout"];
$setktm = $settings["information"]["ktm"];
$settkal = $settings["information"]["tkal"];
$settkeed  = $settings["information"]["tkeed"];
if($text == "الاوامر المضافه" or $text == "الاوامر المختصره" or $text == "المضافه"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
⋄︙اليك اوامر المضافه
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙رفع منشئ اساسي ← $setmansas
⋄︙رفع منشئ ← $setmans
⋄︙رفع مدير ← $stmode
⋄︙رفع ادمن ← $setad
⋄︙رفع مميز ← $setmm
⋄︙تاك للكل ← $settagall
⋄︙تنزيل الكل ← $settkal
⋄︙كشف ← $setksh
⋄︙كتم ← $setktm
⋄︙تقيد ← $settkeed
⋄︙طرد ← $setout
⋄︙حظر ← $sethazr
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
}}
if($text == "حذف الاوامر المضافه" or $text == "مسح المضافه" or $text == "تنظيف المضافه"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙تم مسح الاوامر المضافه .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["information"]["mmaz"] = "لايوجد امر";
$settings["information"]["admi"] = "لايوجد امر";
$settings["information"]["modir"] = "لايوجد امر";
$settings["information"]["idse"] = "لايوجد امر";
$settings["information"]["ksh"] = "لايوجد امر";
$settings["information"]["kik"] = "لايوجد امر";
$settings["information"]["tkal"] = "لايوجد امر";
$settings["information"]["kout"] = "لايوجد امر";
$settings["information"]["ktm"] ="لايوجد امر";
$settings["information"]["tagall"] = "لايوجد امر";
$settings["information"]["mans"] = "لايوجد امر";
$settings["information"]["mansas"] ="لايوجد امر";
$settings["information"]["tkeed"] = "لايوجد امر";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
/*===== dev ~ @FF8FFI =====*/
if($re and $text == "رفع مطور ثانوي" and $re_id !=$id_Bot and  in_array($from_id,$Dev) || in_array($from_id,$eri) and !in_array($re_id,$developer)){
file_put_contents("data/developers/developer.txt",$re_id ."\n " , FILE_APPEND);
file_put_contents("data/developers/developers.txt",'[@'.$re_user ."]". "\n " , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
⋄︙تم ترقية ليصبح مطور ثانوي
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
elseif($re and $text == "رفع مطور ثانوي"  and $re_id !=$id_Bot and in_array($from_id,$Dev) and  in_array($from_id,$eri) and in_array($re_id,$developer)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"⋄︙العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
⋄︙هوه بالفعل مطور ثانوي
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if(in_array($from_id,$Dev) || in_array($from_id,$eri)){
if($re and $text == "تنزيل مطور ثانوي" and in_array($re_id,$developer)){
$re_id_info = file_get_contents("data/developers/$chat_id.txt");
$devr = file_get_contents("data/developers/$chat_id/developer.txt");
$devr1 = explode("             \n",$devr);
$str = str_replace($re_id,"",$re_id_info);
$str2 = str_replace("⌯ ❨ [" . "@". $re_user ."] ❩ " . "•" . " ❨ `". $re_id ."` ❩ ","",$devr1);
file_put_contents("data/developers/developer.txt",$str);
file_put_contents("data/developers/developers.txt",$str);
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"
⋄︙العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
⋄︙تم تنزيله من قائمة المطورين الثانوي
", 'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }}

if(in_array($from_id,$Dev)){
if($re and $text == "تنزيل مطور ثانوي" and !in_array($re_id,$developer)){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"
⋄︙العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
⋄︙ هوه ليس مطور ثانوي ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); } }

$REMAS = str_replace('رفع مطور ثانوي ','',$text);
if ($text =="رفع مطور ثانوي $REMAS" and preg_match('/([0-9])/i',$REMAS) and $REMAS !=$id_Bot and  in_array($from_id,$Dev) || in_array($from_id,$eri) and !in_array($REMAS,$developer)){
$REMAS= str_replace('رفع مطور ثانوي ','',$text);
$carlosid = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$REMAS"))->result->username;
$carlosname = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$REMAS"))->result->first_name;
file_put_contents("data/developers/developer.txt",$REMAS ."\n " , FILE_APPEND);
file_put_contents("data/developers/developers.txt",'[@'.$carlosid ."]". "\n " , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"⋄︙العضو ⋙「 [$carlosname](tg://user?id=$REMAS) 」 
⋄︙تم ترقية ليصبح مطور ثانوي
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
$REMAS = str_replace('رفع مطور ثانوي ','',$text);
if ($text =="رفع مطور ثانوي $REMAS" and preg_match('/([0-9])/i',$REMAS) and $REMAS !=$id_Bot and in_array($from_id,$Dev) and  in_array($from_id,$eri) and in_array($REMAS,$developer)){
$REMAS= str_replace('رفع مطور ثانوي ','',$text);
$carlosid = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$REMAS"))->result->username;
$carlosname = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$REMAS"))->result->first_name;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"⋄︙العضو ⋙「 [$carlosname](tg://user?id=$REMAS) 」 
⋄︙هوه بالفعل مطور ثانوي
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if(in_array($from_id,$Dev) || in_array($from_id,$eri)){
$REMASID = str_replace('تنزيل مطور ثانوي ','',$text);
if ($text =="تنزيل مطور ثانوي $REMASID" and preg_match('/([0-9])/i',$REMAS) and in_array($REMASID,$developer)){
$REMASID= str_replace('تنزيل مطور ثانوي ','',$text);
$carlosid = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$REMASID"))->result->username;
$carlosname = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$REMASID"))->result->first_name;
$REMASID_info = file_get_contents("data/developers/$chat_id.txt");
$devr = file_get_contents("data/developers/$chat_id/developer.txt");
$devr1 = explode("             \n",$devr);
$str = str_replace($REMASID,"",$REMASID_info);
$str2 = str_replace("⌯ ❨ [" . "@". $catlosid ."] ❩ " . "•" . " ❨ `". $REMASID ."` ❩ ","",$devr1);
file_put_contents("data/developers/developer.txt",$str);
file_put_contents("data/developers/developers.txt",$str);
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"
⋄︙ العضو ⋙「 [$carlosname](tg://user?id=$REMASID) 」 
⋄︙تم تنزيله من قائمة المطورين الثانوي
", 'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }}

if(in_array($from_id,$Dev)){
$REMASID = str_replace('تنزيل مطور ثانوي ','',$text);
if ($text =="تنزيل مطور ثانوي $REMASID" and preg_match('/([0-9])/i',$REMAS) and !in_array($REMASID,$developer)){
$REMASID= str_replace('تنزيل مطور ثانوي ','',$text);
$carlosid = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$REMASID"))->result->username;
$carlosname = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$REMASID"))->result->first_name;
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"
⋄︙ العضو ⋙「 [$carlosname](tg://user?id=$REMASID) 」 
⋄︙هوه ليس مطور ثانوي ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); } }

if($text == "مسح المطورين الثانويه"  || $text == "⌯ مسح المطورين الثانويه" and   in_array($from_id,$Dev)){
			file_put_contents("data/developers/developer.txt"," ");
			file_put_contents("data/developers/developers.txt"," ");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ عزيزي ⋙「 [$first_name](tg://user?id=$from_id) 」 
⋄︙تم مسح قائمة المطورين الثانويه
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "⌯ المطورين الثانويه" || $text == "المطورين الثانويه" and   in_array($from_id,$Dev) and $developers_info != NULL and $developers_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"⋄︙اليك قائمة ⋙ المطورين الثانويه
$list_developers
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "⌯ المطورين الثانويه" || $text == "المطورين الثانويه" and   in_array($from_id,$Dev) and $developers_info == NULL || $developers_info == " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ عزيزي ⋙「 [$first_name](tg://user?id=$from_id) 」 
⋄︙لايوجد مطور ثانوي حاليأ
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}

if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$eri)) {
if($rt && $text == "رفع منشئ اساسي" or $rt && $text == "من اس" and $text==$settings["information"]["mansas"] and !in_array($re_id,$manger)){
			file_put_contents("data/nazar/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/nazar/$chat_id/nazr.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⋄︙ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
⋄︙ تم ترقية ليصبح منشئ اساسي
"
,'parse_mode'=>'markdown',
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}
elseif($rt && $text == "رفع منشئ اساسي" or $rt && $text == "من اس" and $text==$settings["information"]["mansas"] and in_array($re_id,$nazar)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
⋄︙هوه بالفعل منشئ اساسي
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
$IDMARX = str_replace('رفع منشئ اساسي ','',$text);
if ($text =="رفع منشئ اساسي $IDMARX" and preg_match('/([0-9])/i',$IDMARX) and !in_array($IDMARX,$nazar)){
$IDMARX= str_replace('رفع منشئ اساسي ','',$text);
$IDMARXID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDMARX"))->result->username;
$IDMARXNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDMARX"))->result->first_name;
			file_put_contents("data/nazar/$chat_id.txt",$IDMARX . "\n" , FILE_APPEND);
			file_put_contents("data/nazar/$chat_id/nazr.txt" , " *𓆩* [" . "@". $IDMARXID ."] *𓆪* " . "»" . " *𓆩* `". $IDMARX ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⋄︙ العضو ⋙「 [$IDMARXNAME](tg://user?id=$IDMARX) 」 
⋄︙ تم ترقية ليصبح منشئ اساسي
"
,'parse_mode'=>'markdown',
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}
$IDMARX = str_replace('رفع منشئ اساسي ','',$text);
if ($text =="رفع منشئ اساسي $IDMARX" and preg_match('/([0-9])/i',$IDMARX) and in_array($IDMARX,$nazar)){
$IDMARX= str_replace('رفع منشئ اساسي ','',$text);
$IDMARXID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDMARX"))->result->username;
$IDMARXNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDMARX"))->result->first_name;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ العضو ⋙「 [$IDMARXNAME](tg://user?id=$IDMARX) 」 
⋄︙هوه بالفعل منشئ اساسي
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}

$IDMARX = str_replace('تنزيل منشئ اساسي ','',$text);
if ($text =="تنزيل منشئ اساسي $IDMARX" and preg_match('/([0-9])/i',$IDMARX) and in_array($IDMARX,$nazar)){
$IDMARX= str_replace('تنزيل منشئ اساسي ','',$text);
$IDMARXID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDMARX"))->result->username;
$IDMARXNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDMARX"))->result->first_name;
	$IDMARX_info = file_get_contents("data/nazar/$chat_id.txt");
	$mdrs = file_get_contents("data/nazar/$chat_id/nazr.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($IDMARX,"",$IDMARX_info);
	$str2 = str_replace(" *𓆩* [" . "@". $IDMARXID ."] *𓆪* " . "»" . " *𓆩* `". $IDMARX ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/nazar/$chat_id.txt",$str);
	file_put_contents("data/nazar/$chat_id/nazr.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
⋄︙ العضو ⋙「 [$IDMARXNAME](tg://user?id=$IDMARX) 」 
⋄︙ تم تنزيله من قائمة المنشئين الاساسي
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
$IDMARX = str_replace('تنزيل منشئ اساسي ','',$text);
if ($text =="تنزيل منشئ اساسي $IDMARX" and preg_match('/([0-9])/i',$IDMARX) and !in_array($IDMARX,$nazar)){
$IDMARX= str_replace('تنزيل منشئ اساسي ','',$text);
$IDMARXID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDMARX"))->result->username;
$IDMARXNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDMARX"))->result->first_name;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ العضو ⋙「 [$IDMARXNAME](tg://user?id=$IDMARX) 」 
⋄︙هوه ليس منشئ اساسي ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح المنشئين الاساسي" ){
file_put_contents("data/nazar/$chat_id.txt","");
file_put_contents("data/nazar/$chat_id.txt","");
file_put_contents("data/nazar/$chat_id/nazr.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ بواسطة ⋙「 [$first_name](tg://user?id=$from_id) 」 
⋄︙ تم مسح قائمة المنشئين الاساسي
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}

if($re and $text == "تنزيل المنشئ اساسي" || $text == "تنزيل منشئ اساسي"  and in_array($re_id,$nazar)){
	$re_id_info = file_get_contents("data/nazar/$chat_id.txt");
	$mdrs = file_get_contents("data/nazar/$chat_id/nazr.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/nazar/$chat_id.txt",$str);
	file_put_contents("data/nazar/$chat_id/nazr.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
⋄︙ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
⋄︙تم تنزيله من قائمة المنشئين الاساسي
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل المنشئ اساسي" || $text == "تنزيل منشئ اساسي" || $text == "ت م ا" || $text == "تنما" and !in_array($re_id,$nazar)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
⋄︙ هوه ليس منشئ اساسي ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المنشئين الاساسي" || $text == "قائمه المنشئين الاساسي" and $nazarr_info != NULL and $nazarr_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"⋄︙اليك قائمة ⋙ المشئين الاساسي
$nazarr_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المنشئين الاساسي" ||  $text == "قائمه المنشيئن الاساسي" and $nazarr_info == NULL || $nazarr_info == " " || $nazarr_info == ""){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ عزيزي ⋙「 [$first_name](tg://user?id=$from_id) 」 
⋄︙لايوجد اي منشئ اساسي
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {
if($rt && $text == "رفع منشئ" or $rt && $text == "من" and $text==$settings["information"]["mans"] and !in_array($re_id,$manger)){
			file_put_contents("data/carlos/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/carlos/$chat_id/crlo.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
⋄︙تم ترقية ليصبح منشئ
"
,'parse_mode'=>'markdown',
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}
elseif($rt && $text == "رفع منشئ" or $rt && $text == "من" and $text == "رفع منشئ" and $text == "من" and $text==$settings["information"]["mans"] and in_array($re_id,$carlos)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"⋄︙العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
⋄︙ هوه بالفعل منشئ 
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
$IDCARLOS = str_replace('رفع منشئ ','',$text);
if ($text =="رفع منشئ $IDCARLOS" and preg_match('/([0-9])/i',$IDCARLOS) and !in_array($IDCARLOS,$carlos)){
$IDCARLOS= str_replace('رفع منشئ ','',$text);
$CARLOSID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDCARLOS"))->result->username;
$CARLOSNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDCARLOS"))->result->first_name;
			file_put_contents("data/carlos/$chat_id.txt",$IDCARLOS . "\n" , FILE_APPEND);
			file_put_contents("data/carlos/$chat_id/crlo.txt" , " *𓆩* [" . "@". $CARLOSID ."] *𓆪* " . "»" . " *𓆩* `". $IDCARLOS ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙لعضو ⋙「 [$CARLOSNAME](tg://user?id=$IDCARLOS) 」 
⋄︙ تم ترقية ليصبح منشئ
"
,'parse_mode'=>'markdown',
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}
$IDCARLOS = str_replace('رفع منشئ ','',$text);
if ($text =="رفع منشئ $IDCARLOS" and preg_match('/([0-9])/i',$IDCARLOS) and in_array($IDCARLOS,$carlos)){
$IDCARLOS= str_replace('رفع منشئ ','',$text);
$CARLOSID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDCARLOS"))->result->username;
$CARLOSNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDCARLOS"))->result->first_name;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"⋄︙العضو ⋙「 [$CARLOSNAME](tg://user?id=$IDCARLOS) 」 
⋄︙هوه بالفعل منشئ 
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}

$IDCARLOS = str_replace('تنزيل منشئ ','',$text);
if ($text =="تنزيل منشئ $IDCARLOS" and preg_match('/([0-9])/i',$IDCARLOS) and in_array($IDCARLOS,$carlos)){
$IDCARLOS= str_replace('تنزيل منشئ ','',$text);
$CARLOSID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDCARLOS"))->result->username;
$CARLOSNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDCARLOS"))->result->first_name;
	$IDCARLOS_info = file_get_contents("data/carlos/$chat_id.txt");
	$mdrs = file_get_contents("data/carlos/$chat_id/crlo.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($IDCARLOS,"",$IDCARLOS_info);
	$str2 = str_replace(" *𓆩* [" . "@". $CARLOSID ."] *𓆪* " . "»" . " *𓆩* `". $IDCARLOS ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/carlos/$chat_id.txt",$str);
	file_put_contents("data/carlos/$chat_id/crlo.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"⋄︙العضو ⋙「 [$CARLOSNAME](tg://user?id=$IDCARLOS) 」 
⋄︙تم تنزيله من قائمة المنشئين
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
$IDCARLOS = str_replace('تنزيل منشئ ','',$text);
if ($text =="تنزيل منشئ $IDCARLOS" and preg_match('/([0-9])/i',$IDCARLOS) and !in_array($IDCARLOS,$carlos)){
$IDCARLOS= str_replace('تنزيل منشئ ','',$text);
$CARLOSID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDCARLOS"))->result->username;
$CARLOSNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDCARLOS"))->result->first_name;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"⋄︙العضو ⋙「 [$CARLOSNAME](tg://user?id=$IDCARLOS) 」 
⋄︙ ليس منشئ ليتم تنزيله 
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح المنشيئن" ){
file_put_contents("data/carlos/$chat_id.txt","");
file_put_contents("data/carlos/$chat_id.txt","");
file_put_contents("data/carlos/$chat_id/crlo.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"⋄︙عزيزي ⋙「 [$first_name](tg://user?id=$from_id) 」 
⋄︙ تم مسح قائمة المنشئين
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}

if($re and $text == "تنزيل المنشئ" || $text == "تنزيل منشئ"  and in_array($re_id,$carlos)){
	$re_id_info = file_get_contents("data/carlos/$chat_id.txt");
	$mdrs = file_get_contents("data/carlos/$chat_id/crlo.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/carlos/$chat_id.txt",$str);
	file_put_contents("data/carlos/$chat_id/crlo.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
⋄︙ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
⋄︙تم تنزيله من قائمة المنشئين
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل المنشئ" || $text == "تنزيل منشئ" || $text == "ت م" || $text == "تنم" and !in_array($re_id,$carlos)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
⋄︙ ليس منشئ ليتم تنزيله 
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المنشئين" || $text == "قائمه المنشئين" and $carloss_info != NULL and $carloss_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"⋄︙اليك قائمة ⋙ المشئينن
$carloss_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المنشيئن" ||  $text == "قائمه المنشيئن" and $carloss_info == NULL || $carloss_info == " " || $carloss_info == ""){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"⋄︙عزيزي ⋙「 [$first_name](tg://user?id=$from_id) 」 
⋄︙لايوجد منشئ حاليأ
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos) || in_array($from_id,$eri)  || in_array($from_id,$nazar)) {
if($rt && $text == "رفع مدير" or $rt && $text == "مد" and $text==$settings["information"]["modir"] and !in_array($re_id,$manger)){
	if($settings["lock"]["rfaabot"] == "مقفول"){
			file_put_contents("data/manger/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/manger/$chat_id/mange.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⋄︙ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
⋄︙ تم ترقية ليصبح مدير
"
,'parse_mode'=>'markdown',
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}
elseif($rt && $text == "رفع مدير" or $rt && $text == "مد" and $text==$settings["information"]["modir"] and in_array($re_id,$manger)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
⋄︙ هوه بالفعل مدير
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}
$IDEHAB = str_replace('رفع مدير ','',$text);
if ($text =="رفع مدير $IDEHAB" and preg_match('/([0-9])/i',$IDEHAB) and !in_array($IDEHAB,$manger)){
$IDEHAB= str_replace('رفع مدير ','',$text);
$IDEHABID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDEHAB"))->result->username;
$IDEHABNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDEHAB"))->result->first_name;
	if($settings["lock"]["rfaabot"] == "مقفول"){
			file_put_contents("data/manger/$chat_id.txt",$IDEHAB . "\n" , FILE_APPEND);
			file_put_contents("data/manger/$chat_id/mange.txt" , " *𓆩* [" . "@". $IDEHABID ."] *𓆪* " . "»" . " *𓆩* `". $IDEHAB ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⋄︙ العضو ⋙「 [$IDEHABNAME](tg://user?id=$IDEHAB) 」 
⋄︙تم ترقية ليصبح مدير
"
,'parse_mode'=>'markdown',
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}
$IDEHAB = str_replace('رفع مدير ','',$text);
if ($text =="رفع مدير $IDEHAB" and preg_match('/([0-9])/i',$IDEHAB) and in_array($IDEHAB,$manger)){
$IDEHAB= str_replace('رفع مدير ','',$text);
$IDEHABID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDEHAB"))->result->username;
$IDEHABNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDEHAB"))->result->first_name;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ العضو ⋙「 [$IDEHABNAME](tg://user?id=$IDEHAB) 」 
⋄︙ هوه بالفعل مدير
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}
$IDEHAB = str_replace('تنزيل مدير ','',$text);
if ($text =="تنزيل مدير $IDEHAB" and preg_match('/([0-9])/i',$IDEHAB) and in_array($IDEHAB,$manger)){
$IDEHAB= str_replace('تنزيل مدير ','',$text);
$IDEHABID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDEHAB"))->result->username;
$IDEHABNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDEHAB"))->result->first_name;
	$IDEHAB_info = file_get_contents("data/manger/$chat_id.txt");
	$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($IDEHAB,"",$IDEHAB_info);
	$str2 = str_replace(" *𓆩* [" . "@". $IDEHABID ."] *𓆪* " . "»" . " *𓆩* `". $IDEHAB ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/manger/$chat_id.txt",$str);
	file_put_contents("data/manger/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
⋄︙ العضو ⋙「 [$IDEHABNAME](tg://user?id=$IDEHAB) 」 
⋄︙تم تنزيله من قائمة المدراء
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
$IDEHAB = str_replace('تنزيل مدير ','',$text);
if ($text =="تنزيل مدير $IDEHAB" and preg_match('/([0-9])/i',$IDEHAB) and !in_array($IDEHAB,$manger)){
$IDEHAB= str_replace('تنزيل مدير ','',$text);
$IDEHABID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDEHAB"))->result->username;
$IDEHABNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDEHAB"))->result->first_name;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ العضو ⋙「 [$IDEHABNAME](tg://user?id=$IDEHAB) 」 
⋄︙ ليس مدير ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح المدراء" ){
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id/mange.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ بواسطة ⋙「 [$first_name](tg://user?id=$from_id) 」 
⋄︙ تم مسح قائمة المدراء
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}

if($re and $text == "تنزيل المدير" || $text == "تنزيل مدير"  and in_array($re_id,$manger)){
	$re_id_info = file_get_contents("data/manger/$chat_id.txt");
	$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/manger/$chat_id.txt",$str);
	file_put_contents("data/manger/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
⋄︙ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
⋄︙ تم تنزيله من قائمة المدراء
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل المدير" || $text == "تنزيل مدير" and !in_array($re_id,$manger)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
⋄︙ ليس مدير ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المدراء" || $text == "قائمه المدراء" and $mangers_info != NULL and $mangers_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"⋄︙اليك قائمة ⋙ المدراء
$mangers_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المدراء" ||  $text == "قائمه المدراء" and $mangers_info == NULL || $mangers_info == " " || $mangers_info == ""){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ عزيزي ⋙「 [$first_name](tg://user?id=$from_id) 」 
⋄︙ لايوجد اي مدراء حاليأ
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$AUBEHAB) || in_array($from_id,$carlos) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {
if($rt && $text == "رفع ادمن" or $rt && $text == "اد" and $text==$settings["information"]["admi"]  and !in_array($re_id,$admin_user)){
	if($settings["lock"]["rfaabot"] == "مقفول"){
			file_put_contents("data/admin_user/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/admin_user/$chat_id/mange.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
⋄︙ تم ترقية ليصبح ادمن
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
elseif($rt && $text == "رفع ادمن" or $rt && $text == "اد" and $text==$settings["information"]["admi"] and in_array($re_id,$admin_user)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
⋄︙ هوه بالفعل ادمن
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}
$IDTIGER = str_replace('رفع ادمن ','',$text);
if ($text =="رفع ادمن $IDTIGER" and preg_match('/([0-9])/i',$IDTIGER) and !in_array($IDTIGER,$admin_user)){
$IDTIGER= str_replace('رفع ادمن ','',$text);
$TIGERID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDTIGER"))->result->username;
$TIGERNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDTIGER"))->result->first_name;
	if($settings["lock"]["rfaabot"] == "مقفول"){
			file_put_contents("data/admin_user/$chat_id.txt",$IDTIGER . "\n" , FILE_APPEND);
			file_put_contents("data/admin_user/$chat_id/mange.txt" , " *𓆩* [" . "@". $TIGERID ."] *𓆪* " . "»" . " *𓆩* `". $IDTIGER ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ العضو ⋙「 [$TIGERNAME](tg://user?id=$IDTIGER) 」 
⋄︙ تم ترقية ليصبح ادمن
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
$IDTIGER = str_replace('رفع ادمن ','',$text);
if ($text =="رفع ادمن $IDTIGER" and preg_match('/([0-9])/i',$IDTIGER) and in_array($IDTIGER,$admin_user)){
$IDTIGER= str_replace('رفع ادمن ','',$text);
$TIGERID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDKLOS"))->result->username;
$TIGERNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDKLOS"))->result->first_name;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ العضو ⋙「 [$TIGERNAME](tg://user?id=$IDTIGER) 」 
⋄︙ هوه بالفعل ادمن
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}

$IDTIGER = str_replace('تنزيل ادمن ','',$text);
if ($text =="تنزيل ادمن $IDTIGER" and preg_match('/([0-9])/i',$IDTIGER) and in_array($IDTIGER,$admin_user)){
$IDTIGER= str_replace('تنزيل ادمن ','',$text);
$TIGERID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDTIGER"))->result->username;
$TIGERNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDTIGER"))->result->first_name;
	$IDTIGER_info = file_get_contents("data/admin_user/$chat_id.txt");
	$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
	$admn1 = explode("             \n",$admn);
	$str = str_replace($IDTIGER,"",$IDTIGER_info);
	$str2 = str_replace(" *𓆩* [" . "@". $TIGERID ."] *𓆪* " . "»" . " *𓆩* `". $IDTIGER ."` *𓆪* ","",$admn1);
	file_put_contents("data/admin_user/$chat_id.txt",$str);
	file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
⋄︙ العضو ⋙「 [$TIGERNAME](tg://user?id=$IDTIGER) 」 
⋄︙تم تنزيله من قائمة الادمنيه
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
$IDTIGER = str_replace('تنزيل ادمن ','',$text);
if ($text =="تنزيل ادمن $IDTIGER" and preg_match('/([0-9])/i',$IDTIGER) and !in_array($IDTIGER,$admin_user)){
$IDTIGER= str_replace('تنزيل ادمن ','',$text);
$TIGERID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDTIGER"))->result->username;
$TIGERNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDTIGER"))->result->first_name;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ العضو ⋙「 [$TIGERNAME](tg://user?id=$IDTIGER) 」 
⋄︙هوه ليس ادمن ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if( $text =="مسح الادمنيه" or $text == "مسح الادمنية"){
file_put_contents("data/admin_user/$chat_id.txt","");
file_put_contents("data/admin_user/$chat_id.txt","");
file_put_contents("data/admin_user/$chat_id/mange.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ بواسطة ⋙「 [$first_name](tg://user?id=$from_id) 」 
⋄︙تم مسح قائمة الادمنيه
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}

if( $text =="رفع الادمنيه" or $text == "رفع الادمنية"){
$cmg = file_get_contents("data/count/$chat_id.txt");
$cmssg  = explode("\n",$cmg);
$cmsg = count($cmssg);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⋄︙ تم رفع الادمنيه بنجاح
⋄︙ عدد الادمنيه تم رفعهم ⋙ $cmsg
",
'reply_to_message_id'=>$message_id,
 ]);
	}
}

if($re and $text == "تنزيل ادمن" and in_array($re_id,$admin_user)){
	$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
	$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
	$admn1 = explode("             \n",$admn);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$admn1);
	file_put_contents("data/admin_user/$chat_id.txt",$str);
	file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
⋄︙ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
⋄︙ تم تنزيله من قائمة الادمنيه
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل ادمن"  and !in_array($re_id,$admin_user)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
⋄︙ هوه ليس ادمن ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "الادمنيه" || $text == "قائمه الادمنيه" and $admin_users_info != NULL and $admin_users_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"⋄︙اليك قائمة ⋙ الادمنيه
$admin_users_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "الادمنيه" ||  $text == "قائمه الادمنيه" and $admin_users_info == NULL || $admin_users_info == " " || $admin_users_info == ""){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ عزيزي ⋙「 [$first_name](tg://user?id=$from_id) 」 
⋄︙ لايوجد اي ادمن حاليأ
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$AUBEHAB) || in_array($from_id,$admin_user) || in_array($from_id,$manger) or in_array($from_id,$carlos) or in_array($from_id,$eri) || in_array($from_id,$nazar)) {
if($rt && $text == "رفع مميز" or $rt && $text == "م" and $text==$settings["information"]["mmaz"] and !in_array($re_id,$mmyaz)){
	if($settings["lock"]["rfaabot"] == "مقفول"){
			file_put_contents("data/mmyaz/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/mmyaz/$chat_id/mange.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
⋄︙تم ترقيه ليصبح مميز
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
elseif($rt && $text == "رفع مميز" or $rt && $text == "م"  and $text==$settings["information"]["mmaz"] and in_array($re_id,$mmyaz)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
⋄︙هوه بالفعل مميز 
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}
$IDKLOS = str_replace('رفع مميز ','',$text);
if ($text =="رفع مميز $IDKLOS" and preg_match('/([0-9])/i',$IDKLOS) and !in_array($IDKLOS,$mmyaz)){
$IDKLOS= str_replace('رفع مميز ','',$text);
$IDARLOSA = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDKLOS"))->result->username;
$IDARLOSNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDKLOS"))->result->first_name;
	if($settings["lock"]["rfaabot"] == "مقفول"){
			file_put_contents("data/mmyaz/$chat_id.txt",$IDKLOS . "\n" , FILE_APPEND);
			file_put_contents("data/mmyaz/$chat_id/mange.txt" , " *𓆩* [" . "@". $IDARLOSA ."] *𓆪* " . "»" . " *𓆩* `". $IDKLOS ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ العضو ⋙「 [$IDARLOSNAME](tg://user?id=$IDKLOS) 」 
⋄︙تم ترقيه ليصبح مميز
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
$IDKLOS = str_replace('رفع مميز ','',$text);
if ($text =="رفع مميز $IDKLOS" and preg_match('/([0-9])/i',$IDKLOS) and in_array($IDKLOS,$mmyaz)){
$IDKLOS= str_replace('رفع مميز ','',$text);
$IDARLOSA = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDKLOS"))->result->username;
$IDARLOSNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDKLOS"))->result->first_name;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ العضو ⋙「 [$IDARLOSNAME](tg://user?id=$IDKLOS) 」 
⋄︙هوه بالفعل مميز 
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}
$IDKLOS = str_replace('تنزيل مميز ','',$text);
if ($text =="تنزيل مميز $IDKLOS" and preg_match('/([0-9])/i',$IDKLOS) and in_array($IDKLOS,$mmyaz)){
$IDKLOS= str_replace('تنزيل مميز ','',$text);
$IDARLOSA = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDKLOS"))->result->username;
$IDARLOSNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDKLOS"))->result->first_name;
	$IDKLOS_info = file_get_contents("data/mmyaz/$chat_id.txt");
	$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($IDKLOS,"",$IDKLOS_info);
	$str2 = str_replace(" *𓆩* [" . "@". $IDARLOSA ."] *𓆪* " . "»" . " *𓆩* `". $IDKLOS ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/mmyaz/$chat_id.txt",$str);
	file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
⋄︙ العضو ⋙「 [$IDARLOSNAME](tg://user?id=$IDKLOS) 」 
⋄︙ تم تنزيله من قائمة المميزين
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
$IDKLOS = str_replace('تنزيل مميز ','',$text);
if ($text =="تنزيل مميز $IDKLOS" and preg_match('/([0-9])/i',$IDKLOS) and !in_array($IDKLOS,$mmyaz)){
$IDKLOS= str_replace('تنزيل مميز ','',$text);
$IDARLOSA = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDKLOS"))->result->username;
$IDARLOSNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDKLOS"))->result->first_name;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ العضو ⋙「 [$IDARLOSNAME](tg://user?id=$IDKLOS) 」 
⋄︙هوه ليس مميز ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح المميزين" ){
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id/mange.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ بواسطة ⋙「 [$first_name](tg://user?id=$from_id) 」 
⋄︙ تم مسح قائمة المميزين
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}

if($re and $text == "تنزيل مميز"   and in_array($re_id,$mmyaz)){
	$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
	$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/mmyaz/$chat_id.txt",$str);
	file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
⋄︙ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
⋄︙ تم تنزيله من قائمة المميزين
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل مميز" and !in_array($re_id,$mmyaz)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
⋄︙وه ليس مميز ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المميزين" || $text == "قائمه المميزين" and $mmyazs_info != NULL and $mmyazs_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"⋄︙ اليك قائمة ⋙ المميزين
$mmyazs_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المميزين" ||  $text == "قائمه المميزين" and $mmyazs_info == NULL || $mmyazs_info == " " || $mmyazs_info == ""){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ عزيزي ⋙「 [$first_name](tg://user?id=$from_id) 」 
⋄︙ لايوجد اي مميز حاليأ
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($rt && $text == "تنزيل الكل" or $rt && $text == "تنزيل من كل الرتب" and $text==$settings["information"]["tkal"]){
if($status == "creator" || in_array($from_id,$Dev) || in_array($from_id,$eri) or in_array($from_id,$developer)) {
$re_id_info = file_get_contents("data/nazar/$chat_id.txt");
	$mdrs = file_get_contents("data/nazar/$chat_id/nazr.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/nazar/$chat_id.txt",$str);
	file_put_contents("data/nazar/$chat_id/nazr.txt",$str2);
	$re_id_info = file_get_contents("data/carlos/$chat_id.txt");
	$mdrs = file_get_contents("data/carlos/$chat_id/crlo.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/carlos/$chat_id.txt",$str);
	file_put_contents("data/carlos/$chat_id/crlo.txt",$str2);
	$re_id_info = file_get_contents("data/manger/$chat_id.txt");
	$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/manger/$chat_id.txt",$str);
	file_put_contents("data/manger/$chat_id/mange.txt",$str2);
	$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
	$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
	$admn1 = explode("             \n",$admn);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$admn1);
	file_put_contents("data/admin_user/$chat_id.txt",$str);
	file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
	$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
	$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/mmyaz/$chat_id.txt",$str);
	file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙العضو ←  [$re_name](tg://user?id=$re_id)
⋄︙تم تنزيله من ← ⤈
~ ( المنشيئن الاساسين • المنشئ • المدراء • الادمنيه • المميزين ) ~
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if($rt && $text == "تنزيل الكل" or $rt && $text == "تنزيل من كل الرتب" and $text==$settings["information"]["tkal"]){
if(in_array($from_id,$nazar)) {
	$re_id_info = file_get_contents("data/carlos/$chat_id.txt");
	$mdrs = file_get_contents("data/carlos/$chat_id/crlo.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/carlos/$chat_id.txt",$str);
	file_put_contents("data/carlos/$chat_id/crlo.txt",$str2);
	$re_id_info = file_get_contents("data/manger/$chat_id.txt");
	$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/manger/$chat_id.txt",$str);
	file_put_contents("data/manger/$chat_id/mange.txt",$str2);
	$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
	$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
	$admn1 = explode("             \n",$admn);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$admn1);
	file_put_contents("data/admin_user/$chat_id.txt",$str);
	file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
	$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
	$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/mmyaz/$chat_id.txt",$str);
	file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙العضو ←  [$re_name](tg://user?id=$re_id)
⋄︙تم تنزيله من ← ⤈
~ (  المنشئ • المدراء • الادمنيه • المميزين ) ~
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if($rt && $text == "تنزيل الكل" or $rt && $text == "تنزيل من كل الرتب" and $text==$settings["information"]["tkal"]){
if(in_array($from_id,$carlos)) {
	$re_id_info = file_get_contents("data/manger/$chat_id.txt");
	$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/manger/$chat_id.txt",$str);
	file_put_contents("data/manger/$chat_id/mange.txt",$str2);
	$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
	$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
	$admn1 = explode("             \n",$admn);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$admn1);
	file_put_contents("data/admin_user/$chat_id.txt",$str);
	file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
	$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
	$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/mmyaz/$chat_id.txt",$str);
	file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙العضو ←  [$re_name](tg://user?id=$re_id)
⋄︙تم تنزيله من ← ⤈
~ ( المدراء • الادمنيه • المميزين ) ~
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if($rt && $text == "تنزيل الكل" or $rt && $text == "تنزيل من كل الرتب" and $text==$settings["information"]["tkal"]){
if(in_array($from_id,$manger)) {
	$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
	$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
	$admn1 = explode("             \n",$admn);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$admn1);
	file_put_contents("data/admin_user/$chat_id.txt",$str);
	file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
	$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
	$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/mmyaz/$chat_id.txt",$str);
	file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙العضو ←  [$re_name](tg://user?id=$re_id)
⋄︙تم تنزيله من ← ⤈
~ (  الادمنيه • المميزين ) ~
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($status == "creator" and in_array($from_id,$Dev) and in_array($from_id,$eri) and in_array($from_id,$carlos) and in_array($from_id,$nazar)){
if($text == "مسح المرفوعين" or $text == "مسح الكل"){
$CMM = count($mmyazs)-1;
$CM = count($mangers)-1;
$CA = count($admin_users)-1;
$CALL = $CA + $CM + $CMM;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⋄︙ بواسطـة $info
ـــ ـــ ـــ ــــ ــــ 
⋄︙تم حذف {$CA} من الادمنيه
⋄︙تم حذف {$CM} من المدراء
⋄︙تم حذف {$CMM} من المميزين
ـــ ـــ ـــ ــــ ــــ 
⋄︙ تم حذف {$CALL} من المرفوعين
⋄︙تم حذف الكل بنجاح 
✓
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id/mange.txt" ,"");
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id/mange.txt" ,"");
file_put_contents("data/admin_user/$chat_id.txt","");
file_put_contents("data/admin_user/$chat_id/mange.txt","");
}
}
