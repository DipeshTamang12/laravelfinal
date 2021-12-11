<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Contact;



class AdminController extends Controller
{
    public function product(){

        return view('admin.product');
    }

    public function uploadproduct(Request $request){

        $data=new product;
        $image=$request->file;
        
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('productimage',$imagename);
        
        $data->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->quantity=$request->quantity;

        $data->save();

        return redirect()->back()->with('message','Product Added Successfully');


    }
    public function showproduct(){

        $data=product::all();

        return view('admin.showproduct',compact('data'));
    }

    public function deleteproduct($id){

        
        $data=product::find($id);
        $data->delete();

        return redirect()->back()->with('message','Deleted Successfully.');

    }

    public function updateproduct($id){
        $data=product::find($id);

        return view('admin.updateproduct',compact('data'));

    }

    public function updateproductfinalize(Request $request,$id){

        $data=product::find($id);
        $image=$request->file;
        if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('productimage',$imagename);
        
        $data->image=$imagename;}

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->quantity=$request->quantity;

        $data->save();

        return redirect()->back()->with('message','Product Updated Successfully');


    }

    public function showcontact(){

        $client=contact::all();

        return view('admin.showcontact',compact('client'));

   
    }
    public function deletecontact($id){

        
        $client=contact::find($id);
        $client->delete();

        return redirect()->back()->with('message','Deleted Successfully.');

    }

    
    public function showimages(){

        $pic=gallery::all();

        return view('admin.showimages',compact('pic'));
    }
  
}