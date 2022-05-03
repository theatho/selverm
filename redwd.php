<?php
flush();
ob_start();
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);


$saiko = file_get_contents("data/saikoo.txt");
$ccarllos = file_get_contents("data/ccarllos.json");
if($text=="ضع قوانين"){
file_put_contents("data/ccarllos.json","$from_id");
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⋄︙اهلا بك عزيزي
⋄︙لان قم بارسال القوانين
⋄︙يمكنك اضافة
⋄︙لعرض الاسم ⋙ `{الاسم}`
⋄︙لعرض الايدي ⋙ `{الايدي}`
⋄︙ لعرض المعرف ⋙ `{المعرف}`
⋄︙ لعرض مطور البوت ⋙ `{المطور}`
⋄︙ لعرض الوقت ⋙ `{الوقت}`
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
file_put_contents("data/saikoo.txt","saiko");
}
}
if($text and $saiko =="saiko" and $ccarllos == $from_id){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⋄︙ اهلا بك عزيزي
⋄︙ تم حفض القوانين بنجاح
⋄︙ الان قم بارسال القوانين لعرض القوانين
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
file_put_contents("data/ssaiko.txt","$text");
unlink("data/saikoo.txt");
}
}
if($text=="القوانين"){
	$times = date('h:i:s');
	$ameer = file_get_contents("data/ssaiko.txt");
	$text = str_replace(["gpname","username","time"],["$namegroup","@$newmemberuser","$date | $date2"],"$ameer");
$text = str_replace('{الاسم}',$first_name,$text);
$text = str_replace('{الايدي}',$from_id,$text);
$text = str_replace('{المعرف}',$usr,$text);
$text = str_replace('{المطور}',$buy,$text);
$text = str_replace('{الوقت}',$times,$text);
if($settings["lock"]["bbhi"] == "مقفول"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$text",'reply_to_message_id'=>$message->message_id,'parse_mode'=>"MarkDown",]);}}
if($text=="القوانين"){
if($settings["lock"]["bbhi"] == "مفتوح"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⋄︙ عذراء عزيزي عليك تفعيل القوانين
⋄︙ لتفعيل ارسال ↫ تفعيل القوانين
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
}
}
if($text=="مسح القوانين"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⋄︙ تم مسح القوانين بنجاح
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
file_put_contents("data/ssaiko.txt","");
}
}
$ameer = file_get_contents("data/ssaiko.txt");
if($text=="القوانين" and $ameer == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⋄︙عزيزي لايوجد قوانين
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
}

if(strpos($text, 'ضع وصف')!== false){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
$newdec= str_replace('ضع وصف','',$text);
bot('setChatDescription',[
'chat_id'=>$chat_id,
'description'=>$newdec
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
⋄︙تم وضع الوصف  
⋄︙بواسطة* [$first_name](tg://user?id=$from_id)
",'parse_mode'=>'MarkDown',
]);
}
}

$MSg_Id = $message->message_id;
$FN_MSg = $message->from->first_name;
$UM_MSg = $message->from->username;
$Id_MSg = $message->from->id;
if(!$UM_MSg){
$MsG = "
☜︎︎︎ : الاسم : $FN_MSg
☜︎︎︎ : الايدي : $Id_MSg
☜︎︎︎ : قام بنشر صوره اباحيه : ☞︎︎︎
";
}elseif($UM_MSg){
$MsG = "
☜︎︎︎ : الاسم : $FN_MSg
☜︎︎︎ : المعرف : @".$UM_MSg."
☜︎︎︎ : قام بنشر صوره اباحيه : ☞︎︎︎
";
}
if($message->photo){
$file = $message->photo[count($message->photo)-1]->file_id;
$get = bot('getfile',['file_id'=>$file]);
$patch = $get->result->file_path;
$url = "https://api.telegram.org/file/bot".API_KEY."/$patch"; 
$Api = json_decode(file_get_contents("https://forhassan.ml/my_ip/ImageInfo.php?url=".$url),true);
if($Api['ok']["Info"] == "Indecent"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$MSg_Id,
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MsG,
]);}
}

$BANID = str_replace('حظر ','',$text);
$BANID = str_replace('الغاء حظر ','',$text);
$DADY = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$REMAS),true);
@$REMAS2 = $DADY['result']['status'];
if(in_array($REMAS,$eri)){
$inf = "مبرمج السورس";
}
elseif(in_array($BANID,$nazar) ){
$inf = "منشئ اساسي";
}
elseif(in_array($BANID,$carlos) ){
$inf = "المنشئ";
}
elseif(in_array($BANID,$Dev) ){
$inf = "مطور اساسي";
}
elseif(in_array($BANID,$developer) ){
$inf = "مطور ثانوي";
}
elseif($REMAS2 == "creator"){
$inf = "المالك";
}
elseif($REMAS2 == "administrator"){
$inf = "المشرف";
}
elseif(in_array($BANID,$manger) ){
$inf = "المدير";
}
elseif(in_array($BANID,$AUBEHAB) ){
$inf = "مدير عام ";
}
elseif(in_array($BANID,$admin_user) ){
$inf = "الادمن";
}
elseif(in_array($BANID,$mmyaz) ){
$inf = "عضو مميز";
}elseif($REMAS2 !== "creator" || $REMAS2 !== "administrator" || $REMAS2 !== "member" || !in_array($BANID,$admin_user) || !in_array($BANID,$mmyaz) || !in_array($BANID,$manger) || !in_array($BANID,$developer) ){
$inf = "فقط عضو";
}elseif($REMAS2 == "member" ){
$inf = "فقط عضو";
}
$SABRENLOVE = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=$BANID"));
$NAMEID =$SABRENLOVE->result->first_name;
if ($text =="حظر $BANID" and preg_match('/([0-9])/i',$BANID)){
	if ($settings["lock"]["banuser"] =="مقفول"){
$BANID= str_replace('حظر ','',$text);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$AUBEHAB) or in_array($from_id,$eri)) {
if ( $REMAS2 != 'creator' && $REMAS2 != 'administrator' && !in_array($BANID,$Dev) && !in_array($BANID,$manger) && !in_array($BANID,$admin_user) && !in_array($BANID,$mmyaz) && !in_array($BANID,$developer) && !in_array($BANID,$nazar) && !in_array($BANID,$carlos) && !in_array($BANID,$eri) && !in_array($BANID,$AUBEHAB)) {
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$REMAS
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⋄︙ العضو ⋙「 [$NAMEID](tg://user?id=$REMAS) 」 
⋄︙تم حظره من المجموعه
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
   } 
else	
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⋄︙عذرا لا تستطيع حظر ⋙ ( $inf )",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
 }
 }
if ($text =="الغاء حظر $BANID" and preg_match('/([0-9])/i',$BANID)){
	if ($settings["lock"]["banuser"] =="مقفول"){
$BANID= str_replace('الغاء حظر ','',$text);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$AUBEHAB) or in_array($from_id,$eri)) {
if ( $REMAS2 != 'creator' && $REMAS2 != 'administrator' && !in_array($BANID,$Dev) && !in_array($BANID,$manger) && !in_array($BANID,$admin_user) && !in_array($BANID,$mmyaz) && !in_array($BANID,$developer) && !in_array($BANID,$nazar) && !in_array($BANID,$carlos) && !in_array($BANID,$eri) && !in_array($BANID,$AUBEHAB)) {
	bot('unbanChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$REMAS
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⋄︙ العضو ⋙「 [$NAMEID](tg://user?id=$REMAS) 」 
⋄︙ تم الغاء حظره من المجموعه
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
   } 
else	
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⋄︙عذرا لا تستطيع الغاء حظر ⋙ ( $inf )",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
 }
 }
 if($rt && $text == "حظر" or $rt && $text == "احظر" and $text==$settings["information"]["kik"] ){
 	if ($settings["lock"]["banuser"] =="مقفول"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$AUBEHAB) or in_array($from_id,$eri)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer) && !in_array($re_id,$nazar) && !in_array($re_id,$carlos) && !in_array($re_id,$eri) && !in_array($re_id,$AUBEHAB)) {
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⋄︙ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
⋄︙ تم حظره من المجموعه
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
   } 
else	
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⋄︙ عذرا لا تستطيع حظر ⋙ ( $infor )",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
 }
 }
 if($rt && $text == "الغاء الحظر" or $rt && $text == "الغاء حظر"){
 	if ($settings["lock"]["banuser"] =="مقفول"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$AUBEHAB) or in_array($from_id,$eri)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer) && !in_array($re_id,$nazar) && !in_array($re_id,$carlos) && !in_array($re_id,$eri) && !in_array($re_id,$AUBEHAB)) {
	bot('unbanChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⋄︙ العضو ⋙「 [$re_name](tg://user?id=$re_id) 」 
⋄︙ تم الغاء حظره من المجموعه
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
   } 
else	
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⋄︙عذرا لا تستطيع الغاء حظر ⋙ ( $infor )",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
 }
}
if($text == "مسح المحظورين"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$AUBEHAB) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {
file_put_contents("banduser/$chat_id.txt","");
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"⋄︙بواسطة ⋙ [$first_name](tg://user?id=$from_id)
⋄︙ تم مسح قائمة المحظورين
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}
if($text == "المحظورين" and $get_Busers != NULL || $get_Busers != ""){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"⋄︙ بواسطة ⋙ [$first_name](tg://user?id=$from_id)
⋄︙تم عرض قائمة المحظورين
━━━━━━━━━━━━━
[$get_Busers]",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}
if($text == "المحظورين" and $get_Busers == NULL || $get_Busers == ""){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"⋄︙عزيزي ⋙ [$first_name](tg://user?id=$from_id)
⋄︙لايوجد اي محظور حاليأ
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}
}
 
if($text == "تفعيل الاشتراك الاجباري"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"⋄︙بواسطة - [$first_name](tg://user?id=$from_id)
⋄︙تم تفعيل الاشتراك الاجباري
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["information"]["lockchannel"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"⋄︙البوت ليس مفعل قم بتفعيل البوت",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}}
elseif($text == "تعطيل الاشتراك الاجباري"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"⋄︙بواسطة - [$first_name](tg://user?id=$from_id)
⋄︙تم تعطيل الاشتراك الاجباري
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["information"]["lockchannel"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"⋄︙البوت ليس مفعل قم بتفعيل البوت",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}}
elseif(strpos($text  , 'وضع قناة') !== false or strpos($text  , 'اضف قناة') !== false or strpos($text  , 'ضع قناة') !== false) {
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {
$add = $settings["information"]["added"];
if ($add == true) {
$code = $num = str_replace(['وضع قناة ','اضف قناة','ضع قناة'],'',$text );
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"⋄︙بواسطة - [$first_name](tg://user?id=$from_id)
⋄︙تم وضع القناة ← $code
⋄︙ارسل تفعيل الاشتراك الاجباري
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["information"]["setchannel"]="$code";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"⋄︙البوت ليس مفعل قم بتفعيل البوت",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}  

if($settings["information"]["lockchannel"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) && !in_array($from_id,$eri) && !in_array($from_id,$nazar) && !in_array($from_id,$carlos) ){
if ($tc == 'group' | $tc == 'supergroup'){
$usernamechannel = $settings["information"]["setchannel"];
$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=".$usernamechannel."&user_id=".$from_id));
$tch = $forchannel->result->status;
$getGrop2 = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=".$usernamechannel))->result;
$NameGrop2 = $getGrop2->title;
if($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
$msg = $settings["information"]["lastmsglockchannel"];
$channeltext = $settings["channellist"]["$from_id"]["channeltext"];
if($channeltext == false){
bot('SendMessage',[ 'chat_id'=>$chat_id, 'text'=>"⋄︙عزيزي - [$first_name](tg://user?id=$from_id)
⋄︙لاتستطيع التحدث هنا عليك الاشتراك
⋄︙قناة الاشتراك ← $usernamechannel
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$NameGrop2",'url'=>"t.me/$usernamechannel"]],]])]);
bot('deletemessage',[ 'chat_id'=>$chat_id, 'message_id'=>$message_id ]);
bot('deletemessage',[ 'chat_id'=>$chat_id, 'message_id'=>$msg ]);
$msgplus = $message_id + 1;
$settings["information"]["lastmsglockchannel"]="$msgplus";
$settings["channellist"]["$from_id"]["channeltext"]="true";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('deletemessage',[ 'chat_id'=>$chat_id, 'message_id'=>$message_id ]); } } } } }

if($settings["information"]["step"] == "setchannel"){
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {
if ($tc == 'group' | $tc == 'supergroup'){
if(strpos($text  , '@') !== false) {
$plus = mb_strlen("$text ");
if($plus < 25) {
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"⋄︙بواسطة - [$first_name](tg://user?id=$from_id)
⋄︙تم وضع القناة ← $text
⋄︙ارسل تفعيل الاشتراك الاجباري
", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, ]);
$settings["information"]["setchannel"]="$text ";
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"*⋄︙المعرف غير صحيح*", 'reply_to_message_id'=>$message_id,   ]); } }
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"⋄︙خطاء يجب ان تضع @ للمعرف", 'reply_to_message_id'=>$message_id, ]); } } } }

 $sttings = json_decode(file_get_contents("data/media.json"),1);
$media = $sttings["media"][$chat_id];
$ameer = $sttings["ameer"][$chat_id];
if($sttings["media"][$chat_id]==null){
$sttings["media"][$chat_id]=0;
file_put_contents("data/media.json",json_encode($sttings));
}
$oo = $message->message_id;
if ($message->sticker){
file_put_contents("data/media.json");
$sttings['ameer'][$chat_id][] = "$oo";
$sttings["media"][$chat_id]+=1;
file_put_contents("data/media.json",json_encode($sttings));
}
if ($message->photo){
file_put_contents("data/media.json");
$sttings['ameer'][$chat_id][] = "$oo";
$sttings["media"][$chat_id]+=1;
file_put_contents("data/media.json",json_encode($sttings));
}
if ($message->video){
file_put_contents("data/media.json");
$sttings['ameer'][$chat_id][] = "$oo";
$sttings["media"][$chat_id]+=1;
file_put_contents("data/media.json",json_encode($sttings));
}
if ($message->video_note){
file_put_contents("data/media.json");
$sttings['ameer'][$chat_id][] = "$oo";
$sttings["media"][$chat_id]+=1;
file_put_contents("data/media.json",json_encode($sttings));
}
if ($message->animation){
file_put_contents("data/media.json");
$sttings['ameer'][$chat_id][] = "$oo";
$sttings["media"][$chat_id]+=1;
file_put_contents("data/media.json",json_encode($sttings));
}
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$AUBEHAB) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {
if($text == "عدد الميديا"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⋄︙  عدد الميديا : $media
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
exit();
}
}
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$AUBEHAB) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {
if($text == "مسح الميديا"){
if($media == "0"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⋄︙عدد الميديا : $media
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
exit();
}
}
}
date_default_timezone_set("Asia/Baghdad");
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {
if($text == "مسح الميديا"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⋄︙جاري مسح الميديا انتظر قاليأ
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
for($i=0;$i<=$sttings["media"][$chat_id];$i++){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>"$ameer[$i]",
]);
}
$date = $message->date;
$gettime = time();
$sppedtime = $gettime - $date;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙بواسطة ⋙ [$first_name](tg://user?id=$from_id)
⋄︙تم مسح الميديا ⋙ $media
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
unset($sttings['media'][$chat_id]);
unset($sttings['ameer'][$chat_id]);
file_put_contents("data/media.json",json_encode($sttings));
exit();
}
}
 
$id = file_get_contents('id.txt');
if($id == "✓"){
$namw = $message->new_chat_member->first_name;
$nam = $message->new_chat_member->last_name;
$idw = $message->new_chat_member->id;
$usw = $message->new_chat_member->username;
$Datauser = $update->callback_query->from->username;
$Dataid = $update->callback_query->from->id;
$chat_id2 = $update->callback_query->message->chat->id;
mkdir("Ali");
mkdir("Ali/$chat_id");
$get = file_get_contents("Ali/$chat_id2/$Dataid.txt");
if($message->new_chat_member){
bot('restrictChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$idw,
]);
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*⌯⁞ العضو ⋙ *[@$usw]*
⌯⁞  الايدي ⋙ *[$idw](tg://user?id=$idw)*
⌯⁞ تمت تقييدك بواسطة البوت اضغط على زر انا لست روبوت*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"⌯⁞ انا لست روبوت ⁞⌯","callback_data"=>"unban-$idw"]],
]
])
]);
file_put_contents("Ali/$chat_id/$from_id.txt",$idw);
}
$Ali = explode('-', $data);
if($data == "unban-$Ali[1]" and $get == $Dataid){
bot('promoteChatMember',[
'chat_id'=>$chat_id2,
'user_id'=>$Ali[1],
'can_send_messages'=>true,
]);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$update->callback_query->message->message_id,
'text'=>"⋄︙تم الغاء تقيدك بنجاح انت لست روبوت بالفعل",
'parse_mode'=>"MarkDown",
]);
unlink("Ali/$chat_id2/$Dataid.txt");
}}
elseif( $text =="فتح التحقق"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"⋄︙بواسطة ⋙ [$first_name](tg://user?id=$from_id)
⋄︙تم فتح التحقق
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('id.txt',✓);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"⋄︙البوت ليس مفعل قم بتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
if( $text =="قفل التحقق"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"⋄︙بواسطة ⋙ [$first_name](tg://user?id=$from_id)
⋄︙تم قفل التحقق
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 file_put_contents('id.txt',✘);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}

$token = API_KEY;
$mustafa = json_decode(file_get_contents("data/$chat_id.json"),true);
$cei = $update->edited_message->chat->id;
$cfi = $update->edited_message->from->id;
$stn = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
$runk = $stn['result']['status'];
$result = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$cei&user_id=".$cfi),true);
$result_admin = $result['result']['status'];
mkdir("data");
if($mustafa == null ){
$mustafa = '{"lock": {"put": "مفتوح"}}';
$mustafa = json_decode($mustafa,true);
file_put_contents("data/$chat_id.json",$mustafa);
}
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if ($text == "قفل الدخول" ) {
bot('sendMessage',[
     'chat_id'=>$chat_id,
     'text'=>"⋄︙بواسطة ⋙ [$first_name](tg://user?id=$from_id)
⋄︙تم قفل الدخول
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$mustafa["lock"]["put"]="مقفول️";
file_put_contents("data/$chat_id.json",json_encode($mustafa,true));
}
}
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if ($text == "فتح الدخول"  ) {
bot('sendMessage',[
     'chat_id'=>$chat_id,
     'text'=>"⋄︙ بواسطة ⋙ [$first_name](tg://user?id=$from_id)
⋄︙تم فتح الدخول
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$mustafa["lock"]["put"]="مفتوح";
file_put_contents("data/$chat_id.json",json_encode($mustafa,true));
}
}
if($mustafa["lock"]["put"] == "مقفول️"){
if($update->message->new_chat_member){
 bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$update->message->new_chat_member->id
]);
}
}

$set = file_get_contents("data/set.json");
$setch = file_get_contents("data/setch.json");
if(in_array($from_id,$Dev)){
if ($text == "⋄ تعين الاشتراك" or $text == "تعيين الاشتراك الاجباري" or $text == "تغيير قناة الاشتراك" or $text == "تعيين قناة الاشتراك"){
file_put_contents("data/set.json","setch");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"⋄︙عزيزي - $info
⋄︙حسنأ قم بأرسال معرف قناة مندون @
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
if($text && $set =="setch" and in_array($from_id,$Dev)){
file_put_contents("data/setch.json",$text); 
file_put_contents("data/set.json","");
bot("sendmessage",["chat_id"=>$chat_id,"text"=>"⋄︙عزيزي - $info
⋄︙تم حفظ قناة الاشتراك بنجاح
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}

if(in_array($from_id,$Dev)){
if($text == "⋄ حذف الاشتراك" or $text == "حذف قناة الاشتراك"){
file_put_contents("data/setch.json","");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"⋄︙عزيزي - $info
⋄︙تم حذف قناة الاشتراك بنجاح
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}

if(!$setch){
$GT7 = "لايوجد قناة حاليأ";
}elseif($setch){
$GT7 = "@$setch";
}
if($text == "⋄ جلب الاشتراك" or $text == "قناة الاشتراك" or $text == "الاشتراك الاجباري" or $text == "قناة الاشتراك الاجباري"){
$setchannel = file_get_contents("data/setchannel.json");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"⋄︙عزيزي - $info
⋄︙قناة الاشتراك الاجباري - $GT7
⋄︙وضع الاشتراك - $setchannel
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
}

if($text =="تفعيل ردود المطور" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⋄︙بواسطه ← [$first_name](tg://user?id=$from_id)
⋄︙تم تفعيل ردود المطور بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["rdodsg"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙البوت ليس مفعل قم بتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="تعطيل ردود المطور" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⋄︙بواسطه ← [$first_name](tg://user?id=$from_id)
⋄︙تم تعطيل ردود المطور بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["rdodsg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙البوت ليس مفعل قم بتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}

mkdir("data");
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
if($text =="اضف رد" or $text == "اظف رد"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙*حسننا , الان ارسل كلمه الرد ✓*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["addradArmof"]="$from_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["addradArmof"] =="$from_id"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙*جيد , يمكنك الان ارسال جواب الرد 
⋄︙ نص,صوره,فيديو,متحركه,بصمه,اغنيه ✓*

⋄︙لعرض الاسم ← {Name}
⋄︙لعرض يوزر ← {User}
⋄︙لعرض الايدي ← {Id}
⋄︙لعرض المجموعة ← {Grop}
⋄︙لعرض المطور ← {Dev}
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$settings["addradArmof"]="$from_id.don";
$settings["setrad"]="$text";
$settings["setraddArmof"][]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
elseif($message->photo && $settings["addradArmof"] =="$from_id.don"){
$photo = $message->photo[0]->file_id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙* تم اضافة الرد بنجاح  ✓*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$settings[$settings["setrad"]]["photo"]="$photo";
$settings["addradArmof"]="$from_id.done";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}

elseif($message->video && $settings["addradArmof"] =="$from_id.don"){
$video = $message->video->file_id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙* تم اضافة الرد بنجاح  ✓*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$settings[$settings["setrad"]]["video"]="$video";
$settings["addradArmof"]="$from_id.done";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
elseif($message->voice && $settings["addradArmof"] =="$from_id.don"){
$voice = $message->voice->file_id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙تم اضافة الرد بنجاح  ✓*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$settings[$settings["setrad"]]["voice"]="$voice";
$settings["addradArmof"]="$from_id.done";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
elseif($message->audio && $settings["addradArmof"] == "$from_id.don"){
$audio = $message->audio->file_id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙تم اضافة الرد بنجاح  ✓*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$settings[$settings["setrad"]]["audio"]="$audio";
$settings["addradArmof"]="$from_id.done";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
elseif($message->sticker && $settings["addradArmof"] =="$from_id.don"){
$sticker = $message->sticker->file_id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙ تم اضافة الرد بنجاح  ✓*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$settings[$settings["setrad"]]["sticker"]="$sticker";
$settings["addradArmof"]="$from_id.done";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
elseif($message->text && $settings["addradArmof"] =="$from_id.don"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙ تم اضافة الرد بنجاح  ✓*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$settings[$settings["setrad"]]["text"]="$text";
$settings["addradArmof"]="$from_id.done";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
elseif($message->document && $settings["addradArmof"] =="$from_id.don"){
$document = $message->document->file_id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙ تم اضافة الرد بنجاح  ✓*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$settings[$settings["setrad"]]["animation"]="$document";
$settings["addradArmof"]="$from_id.done";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
elseif($text and $settings[$text]["text"]!=null and $settings[$text]["text"]!="{"){
if(!@$username){$Useeer = "لايوجد يوزر";}elseif(@$username){$Useeer = "@$username";}
$text = str_replace(["gpname","username","time"],["$namegroup","@$newmemberuser","$date | $date2"],$settings[$text]["text"]);
$text = str_replace('{Name}',$name,$text);
$text = str_replace('{Grop}',$namegroup,$text);
$text = str_replace('{Id}',$from_id,$text);
$text = str_replace('{User}',$Useeer,$text);
$text = str_replace('{Dev}',$buy,$text);
if($settings["lock"]["rdg"]=="مقفول"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>$text,'reply_to_message_id'=>$message->message_id, 
]);
}}
elseif($text and $settings[$text]["photo"]!=null){
if($settings["lock"]["rdg"]=="مقفول"){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$settings[$settings["setrad"]]["photo"],'reply_to_message_id'=>$message->message_id, 
]);
}}
elseif($text !== "اضف رد" and $settings[$text]["video"]!=null){
if($settings["lock"]["rdg"]=="مقفول"){
bot('sendvideo',[
'chat_id'=>$chat_id,
'video'=>$settings[$text]["video"],'reply_to_message_id'=>$message->message_id, 
]);
}}
elseif($text and $settings[$text]["animation"]!=null){
if($settings["lock"]["rdg"]=="مقفول"){
bot('senddocument',[
'chat_id'=>$chat_id,
'document'=>$settings[$text]["animation"],'reply_to_message_id'=>$message->message_id, 
]);
}}
elseif($text and $settings[$text]["audio"]!=null){
if($settings["lock"]["rdg"]=="مقفول"){
bot('sendaudio',[
'chat_id'=>$chat_id,
'audio'=>$settings[$text]["audio"],'reply_to_message_id'=>$message->message_id, 
]);
}}
elseif($text and $settings[$text]["voice"]!=null){
if($settings["lock"]["rdg"]=="مقفول"){
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>$settings[$text]["voice"],'reply_to_message_id'=>$message->message_id, 
]);
}}
elseif($text and $settings[$text]["sticker"]!=null){
if($settings["lock"]["rdg"]=="مقفول"){
bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>$settings[$text]["sticker"],'reply_to_message_id'=>$message->message_id, 
]);
}}
elseif($text =="الردود" or $text == "قائمة الردود"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)){
if($settings["setraddArmof"]!=null){
$a = $settings["setraddArmof"];
for($i =0;$i<count($a)-1;$i++){
$radod = $radod."⋄︙ $i- $a[$i] "."\n";
}
$radod = $radod."⋄︙ $i- $a[$i] "."\n";
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙الردود العامه المضافه في البوت
*
$radod
*",'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id, 
]);
}
else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"* ⋄︙ يوجد ردود مضافه حاليا ❕*",
'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id, 
]);
}}}
if($text == "مسح الردود"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙ تم مسح كل الردود  ✓*",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
]);
unset($settings["setraddArmof"]);
unset($settings[$settings["setrad"]]["text"]);
unset($settings[$settings["setrad"]]["photo"]);
unset($settings[$settings["setrad"]]["video"]);
unset($settings[$settings["setrad"]]["voice"]);
unset($settings[$settings["setrad"]]["animation"]);
unset($settings[$settings["setrad"]]["sticker"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
if($text == "مسح رد" or $text == "حذف رد"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙الان ارسل الرد لمسحه من المجموعه*"
,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id, ]);
$settings["addradArmof"]="$from_id.dell";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
if($text && $settings["addradArmof"] =="$from_id.dell"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)){
if(in_array($text,$settings["setraddArmof"])){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙ تم مسح الرد بنجاح"
,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
]);
$key = array_search($text,$settings["setraddArmof"]);
unset($settings[$text]["sticker"]);
unset($settings[$text]["photo"]);
unset($settings[$text]["video"]);
unset($settings[$text]["text"]);
unset($settings[$text]["animation"]);
unset($settings[$text]["voice"]);
unset($settings[$text]["audio"]);
unset($settings["setraddArmof"][$key]);
$settings["setraddArmof"] = array_values($settings["setraddArmof"]); 
$settings["addradArmof"]="done";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}}

mkdir("data");
@$sttingamrad = json_decode(file_get_contents("data/amrad.json"),true);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
@$settings2 = json_decode(file_get_contents("data/$chatid.json"),true);
if($text =="⋄ اضف رد عام" or $text == "اضف رد للكل"){
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙حسننا , الان ارسل كلمه الرد ✓*",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
$sttingamrad["addradArmof"]="$from_id";
$sttingamrad = json_encode($sttingamrad,true);
file_put_contents("data/amrad.json",$sttingamrad);
}}
elseif($text and $sttingamrad["addradArmof"] =="$from_id"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙*جيد , يمكنك الان ارسال جواب الرد 
⋄︙ نص,صوره,فيديو,متحركه,بصمه,اغنيه ✓*

⋄︙لعرض الاسم ← {Name}
⋄︙لعرض يوزر ← {User}
⋄︙لعرض الايدي ← {Id}
⋄︙لعرض المجموعة ← {Grop}
⋄︙لعرض المطور ← {Dev}
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$sttingamrad["addradArmof"]="$from_id.don";
$sttingamrad["setrad"]="$text";
$sttingamrad["setraddArmof"][]="$text";
$sttingamrad = json_encode($sttingamrad,true);
file_put_contents("data/amrad.json",$sttingamrad);
}
elseif($message->photo && $sttingamrad["addradArmof"] =="$from_id.don"){
$photo = $message->photo[0]->file_id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙✓ تم الحفظ*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$sttingamrad[$sttingamrad["setrad"]]["photo"]="$photo";
$sttingamrad["addradArmof"]="$from_id.done";
$sttingamrad = json_encode($sttingamrad,true);
file_put_contents("data/amrad.json",$sttingamrad);
}

elseif($message->video && $sttingamrad["addradArmof"] =="$from_id.don"){
$video = $message->video->file_id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙✓ تم الحفظ*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$sttingamrad[$sttingamrad["setrad"]]["video"]="$video";
$sttingamrad["addradArmof"]="$from_id.done";
$sttingamrad = json_encode($sttingamrad,true);
file_put_contents("data/amrad.json",$sttingamrad);
}
elseif($message->voice && $sttingamrad["addradArmof"] =="$from_id.don"){
$voice = $message->voice->file_id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙✓ تم الحفظ*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$sttingamrad[$sttingamrad["setrad"]]["voice"]="$voice";
$sttingamrad["addradArmof"]="$from_id.done";
$sttingamrad = json_encode($sttingamrad,true);
file_put_contents("data/amrad.json",$sttingamrad);
}
elseif($message->audio && $sttingamrad["addradArmof"] == "$from_id.don"){
$audio = $message->audio->file_id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙✓ تم الحفظ*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$sttingamrad[$sttingamrad["setrad"]]["audio"]="$audio";
$sttingamrad["addradArmof"]="$from_id.done";
$sttingamrad = json_encode($sttingamrad,true);
file_put_contents("data/amrad.json",$sttingamrad);
}
elseif($message->sticker && $sttingamrad["addradArmof"] =="$from_id.don"){
$sticker = $message->sticker->file_id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙✓ تم الحفظ*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$sttingamrad[$sttingamrad["setrad"]]["sticker"]="$sticker";
$sttingamrad["addradArmof"]="$from_id.done";
$sttingamrad = json_encode($sttingamrad,true);
file_put_contents("data/amrad.json",$sttingamrad);
}
elseif($message->text && $sttingamrad["addradArmof"] =="$from_id.don"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙✓ تم الحفظ*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$sttingamrad[$sttingamrad["setrad"]]["text"]="$text";
$sttingamrad["addradArmof"]="$from_id.done";
$sttingamrad = json_encode($sttingamrad,true);
file_put_contents("data/amrad.json",$sttingamrad);
}
elseif($message->document && $sttingamrad["addradArmof"] =="$from_id.don"){
$document = $message->document->file_id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙✓ تم الحفظ*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$sttingamrad[$sttingamrad["setrad"]]["animation"]="$document";
$sttingamrad["addradArmof"]="$from_id.done";
$sttingamrad = json_encode($sttingamrad,true);
file_put_contents("data/amrad.json",$sttingamrad);
}
elseif($text and $sttingamrad[$text]["text"]!=null and $sttingamrad[$text]["text"]!="{"){
if(!@$username){$Useeer = "لايوجد يوزر";}elseif(@$username){$Useeer = "@$username";}
$text = str_replace(["gpname","username","time"],["$namegroup","@$newmemberuser","$date | $date2"],$sttingamrad[$text]["text"]);
$text = str_replace('{Name}',$name,$text);
$text = str_replace('{Grop}',$namegroup,$text);
$text = str_replace('{Id}',$from_id,$text);
$text = str_replace('{User}',$Useeer,$text);
$text = str_replace('{Dev}',$buy,$text);
$text = str_replace('{time}',$date2,$text);
if($settings["lock"]["rdodsg"]=="مقفول"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>$text,'reply_to_message_id'=>$message->message_id, 
]);
}}
elseif($text and $sttingamrad[$text]["photo"]!=null){
if($settings["lock"]["rdodsg"]=="مقفول"){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$sttingamrad[$sttingamrad["setrad"]]["photo"],'reply_to_message_id'=>$message->message_id, 
]);
}}
elseif($text !== "⋄ اضف رد عام" and $sttingamrad[$text]["video"]!=null){
if($settings["lock"]["rdodsg"]=="مقفول"){
bot('sendvideo',[
'chat_id'=>$chat_id,
'video'=>$sttingamrad[$text]["video"],'reply_to_message_id'=>$message->message_id, 
]);
}}
elseif($text and $sttingamrad[$text]["animation"]!=null){
if($settings["lock"]["rdodsg"]=="مقفول"){
bot('senddocument',[
'chat_id'=>$chat_id,
'document'=>$sttingamrad[$text]["animation"],'reply_to_message_id'=>$message->message_id, 
]);
}}
elseif($text and $sttingamrad[$text]["audio"]!=null){
if($settings["lock"]["rdodsg"]=="مقفول"){
bot('sendaudio',[
'chat_id'=>$chat_id,
'audio'=>$sttingamrad[$text]["audio"],'reply_to_message_id'=>$message->message_id, 
]);
}}
elseif($text and $sttingamrad[$text]["voice"]!=null){
if($settings["lock"]["rdodsg"]=="مقفول"){
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>$sttingamrad[$text]["voice"],'reply_to_message_id'=>$message->message_id, 
]);
}}
elseif($text and $sttingamrad[$text]["sticker"]!=null){
if($settings["lock"]["rdodsg"]=="مقفول"){
bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>$sttingamrad[$text]["sticker"],'reply_to_message_id'=>$message->message_id, 
]);
}}
elseif($text =="⋄ ردود المطور" or $text == "قائمة الردود العامه"){
if( in_array($from_id,$Dev) or in_array($from_id,$developer)){
if($sttingamrad["setraddArmof"]!=null){
$a = $sttingamrad["setraddArmof"];
for($i =0;$i<count($a)-1;$i++){
$radod = $radod."⋄︙ ↵{ $i- $a[$i] }"."\n";
}
$radod = $radod."⋄︙ ↵{ $i- $a[$i] }"."\n";
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙قائمه الردود العامه 
•━━━━━━━━━━━━━━•
$radod
",'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id, 
]);
}
else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙لم يتم اضافة ردود عامه *",
'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id, 
]);
}}}
if($text == "⋄ حذف ردود المطور"){
if( in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙بواسطه ← [$first_name](tg://user?id=$from_id)
⋄︙تم مسح ردود المطور بنجاح",
'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id, 
]);
unset($sttingamrad["setraddArmof"]);
unset($sttingamrad[$sttingamrad["setrad"]]["text"]);
unset($sttingamrad[$sttingamrad["setrad"]]["photo"]);
unset($sttingamrad[$sttingamrad["setrad"]]["video"]);
unset($sttingamrad[$sttingamrad["setrad"]]["voice"]);
unset($sttingamrad[$sttingamrad["setrad"]]["animation"]);
unset($sttingamrad[$sttingamrad["setrad"]]["sticker"]);
$sttingamrad = json_encode($sttingamrad,true);
file_put_contents("data/amrad.json",$sttingamrad);
}}
if($text == "حذف رد للكل" or $text == "⋄ حذف رد عام"){
if( in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⋄︙ xقم بارسال الرد العام المراد حذفه*",'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id, ]);
$sttingamrad["addradArmof"]="$from_id.dell";
$sttingamrad = json_encode($sttingamrad,true);
file_put_contents("data/amrad.json",$sttingamrad);
}}
if($text && $sttingamrad["addradArmof"] =="$from_id.dell"){
if( in_array($from_id,$Dev) or in_array($from_id,$developer)){
if(in_array($text,$sttingamrad["setraddArmof"])){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم حذف الرد العام $text",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$key = array_search($text,$sttingamrad["setraddArmof"]);
unset($sttingamrad[$text]["sticker"]);
unset($sttingamrad[$text]["photo"]);
unset($sttingamrad[$text]["video"]);
unset($sttingamrad[$text]["text"]);
unset($sttingamrad[$text]["animation"]);
unset($sttingamrad[$text]["voice"]);
unset($sttingamrad[$text]["audio"]);
unset($sttingamrad["setraddArmof"][$key]);
$sttingamrad["setraddArmof"] = array_values($sttingamrad["setraddArmof"]); 
$sttingamrad["addradArmof"]="done";
$sttingamrad = json_encode($sttingamrad,true);
file_put_contents("data/amrad.json",$sttingamrad);
}}}
