<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Models\PersonDetail;

class UserController extends Controller
{
    public function fomeView(){
        return view('adduser');
    }
    public function dataSubmit(Request $request){
        
        // echo "<pre>"; print_r($_FILES); die;
        $validator = Validator::make($request->all(),[
            'fname'=>'required|unique:person_details',
            'email'=>'required|email',
            'file'=>'required',
        ]);
        if ($validator->fails()){
            return redirect('fomeview')
            ->withErrors($validator)
            ->withInput();
        }

        if($request->hasfile('file'))
        {
            $file = $request->file;
            $destinationPath = public_path('uploads');
            $file->move($destinationPath,$file->getClientOriginalName());
        } 

        $sub = new PersonDetail();
        $sub->fname=$request->fname;
        $sub->email=$request->email;
        $sub->file=$request->hasFile('file') ? $file->getClientOriginalName() : null;
        $sub->save();
        
        return redirect('/list');
    }
    public function show(){
        $data = PersonDetail::all();
        return view('userlist',['PersonDetail'=>$data]);
         $user_list= PersonDetail::get();
         echo "<pre>";
         print_r($user_list->toArray());
        
    }
     public function userDel($id){
         $userData = PersonDetail::find($id);
         $userData->delete();
         return redirect('/list');
     }
     public function showData($id){
         $data = PersonDetail::find($id);
         return view("edit",['data'=>$data]);
     }

     function update(Request $request){
        
        
        if ($request->hasfile('file'))
        {
            $file =$request->file;
            $destinationPath = Public_path('uploads');
            $file->move($destinationPath,$file->getClientOriginalName());
        }
        // echo "<pre>"; print_r($request->file()); die;

        $sub = PersonDetail::find($request->id);
        $sub->fname=$request->fname;
        $sub->email=$request->email;
        $sub->file=$request->hasFile('file') ? $file->getClientOriginalName() : $request->old_file;
        $sub->update();

        return redirect('list');
     }
}