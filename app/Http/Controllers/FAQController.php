<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\FAQ;
use App\Http\Requests\FAQRequest;
class FAQController extends Controller
{
    public function index(){
        $faq = FAQ::all();//where('active',1)->get();
    	return view('admin.FAQ.index',compact('faq'));
   }

   public function create(){

   	return view('admin.FAQ.add');
   }

   
   public function store(FAQRequest $request,FAQ $faq){
      $faq->create([
            'question'  => $request->question,
            'reponse' => $request->reponse,
            'active' => 1,
        ]);

 return redirect('/admin/FAQ');
   }
    public function edit($id){
      $faq = FAQ::find($id);
   	 return view('admin.FAQ.edit',compact('faq'));
   }
    public function update($id,Request $request){
        $faq = FAQ::find($id);
        $faq->question = $request->input('question');
        $faq->reponse = $request->input('reponse');
       
        $faq->save();

 return redirect('/admin/FAQ');
   }
    public function destroy($id){
        $faq = FAQ::find($id); // recupere les donnees de la bdd qui a une id=$id
        $faq->active = 0;
        $faq->save();
 
 return redirect('/admin/FAQ');
      //  return redirect('/admin/users')->withFlashMessage('');
  }

  public function show($id){
      $faq = FAQ::find($id);
      return view('admin.FAQ.show',compact('faq'));
  }

}
