<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Users;

use App\Models\Product;




class HomeController extends Controller
{
    public function redirect(){

        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');

        }else{

            $data=product::paginate(3);

            return view('user.home',compact('data'));
        }

        
    }

    public function index(){

        if(Auth::id()){

            return redirect('redirect');
        }else{

            $data=product::paginate(3);

            return view('user.home',compact('data'));
        }

        
    }

    public function about(){

        return view('pages.about');
    }
    public function jewelry(){

        return view('pages.jewelry');
    }
    public function contact(){

        return view('pages.contact');
    }
}