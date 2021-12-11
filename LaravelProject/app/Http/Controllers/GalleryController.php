<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\User;

class GalleryController extends Controller
{
    public function postimages(Request $request){
    $pic= new gallery;

    $image=$request->file;
    $imagename=time().'.'.$image->getClientOriginalExtension();
    $request->file->move('galleryimage',$imagename);
    $pic->image=$imagename;

    $pic->save();

    return redirect()->back()->with('message','Image Uploaded succesfully');


    }
    public function showgallery(){

        $pic=gallery::paginate(6);

        return view('pages.gallery',compact('pic'));
    }
}