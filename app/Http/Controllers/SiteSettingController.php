<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteSetting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\UploadedFile;

class SiteSettingController extends Controller
{
     public function index(){
    	$sitesetting = SiteSetting::find(1);
   	return view('admin.sitesetting.index',compact('sitesetting'));
    }

    public function store(Request $request, SiteSetting $sitesetting){
   if($request->hasFile('logo'))
       {
        $sitesetting->logo = $request->file('logo');
      $new_name = rand(). '.' .  $sitesetting->logo->getClientOriginalExtension();
        $sitesetting->logo->move('images/',$new_name);
         $sitesetting->logo = $new_name;
   //$actualite->image = $request->image->store('image');
        }
    $sitesetting->site_name = $request->input('site_name');
    $sitesetting->slegon = $request->input('slegon');
    $sitesetting->developper_name = $request->input('developper_name');
    $sitesetting->developper_email = $request->input('developper_email');
    $sitesetting->site_email = $request->input('site_email');
    $sitesetting->site_phone = $request->input('site_phone');
        $sitesetting->save();
          
         session()->flash('success','La modification à étè faite avec succée');

 return redirect('/admin/sitesetting');
}
  
public function update($id,Request $request){

		$sitesetting = SiteSetting::find($id);
    if($request->hasFile('logo'))
       {
        $sitesetting->logo = $request->file('logo');
      $new_name = rand(). '.' .  $sitesetting->logo->getClientOriginalExtension();
        $sitesetting->logo->move('images/',$new_name);
         $sitesetting->logo = $new_name;
   //$actualite->image = $request->image->store('image');
        }
    $sitesetting->site_name = $request->input('site_name');
    $sitesetting->slegon = $request->input('slegon');
    $sitesetting->developper_name = $request->input('developper_name');
    $sitesetting->developper_email = $request->input('developper_email');
    $sitesetting->site_email = $request->input('site_email');
    $sitesetting->site_phone = $request->input('site_phone');
        $sitesetting->save();
          
          session()->flash('success','La modification à étè faite avec succée');

 return redirect('/admin/sitesetting');
    }
}
