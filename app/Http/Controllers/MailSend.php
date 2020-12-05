<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\MAil\SendMail;

class MailSend extends Controller
{
    public function mailsend(Request $request){

$all = $recipients = explode(',',request('email'));
$sujet = 'Inscription sur le site PDOC';
$msg = 'Votre compte a bie étè crée mais il doit etre confirme, merci de confirmer votre compte.';
$file = request('file');

$data = array('name'=>'louanes', 'msg' => $msg , 'sujet' = $sujet,'file'=$file, 'all' = $all);

Mail::send('email', $data, function($message) use ($data) {
$message->to($data['all']);
$message->attach($data['file']->getRealPath(),array(
'as'=>'file.'.$data['file']->getClientOriginalExtension(),
'mime'=> $data['file']->getMimeType()
));
});
return redirect()->route('email')
}
