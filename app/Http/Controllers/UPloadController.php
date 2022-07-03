<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use Illuminate\Http\UploadedFile ;
use Illuminate\Support\Facades\Storage;
 

class UPloadController extends Controller
{

    public function index(){
    return view('upload');
    }
    public function upload(Request $request){
    
    $photo=new Photo();
    if($request->file('photo')){
    $file=$request->file('photo');
    $filename=date('YmdHi').$file->getClientOriginalName();
    //$file->move(public_path('public/images'),$filename);
    $file=$request->file('photo')->storeAs('images',$filename);
   
    $photo->name=$filename;
    $photo->save();
   
    }
    return redirect()->route('photo.view');
     //$
    }
    
    public function show($id){
    $p=Photo::find($id);
    return view('myphoto',['p'=> $p]);
    }
    public function showme(){
    $photos=Photo::get();
    return view('show',['photos'=>$photos]);
    
    }
    
}
