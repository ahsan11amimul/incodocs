<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\User;
use App\ContactUs;
class PagesController extends Controller
{
    //
    public function index()
    {
        return view('pages.index');
    }
    public function quotes()
    {
        return view('pages.quotes');
    }
    public function invoices()
    {
        return view('pages.invoices');
    }
    public function pricing()
    {
        return view('pages.pricing');
    }
    public function shipping()
    {
        return view('pages.shipping');
    }
    public function purchase()
    {
        return view('pages.purchase');
    }
    public function trade()
    {
        return view('pages.trade');
    }
    //contact form
    public function contact(Request $request)
    {
        if($request->isMethod("POST"))
        {
            $data=$request->validate([
            'email'=>'required|email',
            'name'=>'required',
            'phone_number'=>'required|digits:11',
            'company_name'=>'required|string',
            'message'=>'required|string'
            ]);
            $contactUs=ContactUs::create($data);
            return redirect('/contact')->with('success','Message Sent Successfully!!');

        }else{
            return view('pages.contact');
        }
    }
    //register form
     public function register(Request $request)
    {
        if($request->isMethod("POST"))
        {  
         $data= $request->validate([
          'name'=>'required|min:3|max:50|string',
          'email'=>'required|email',
          'password'=>'string|min:6|max:16'
          ]);
         // dd($data);
          $user=new User();
          //$user->create($data);
          $user->name=$data['name'];
          $user->email=$data['email'];
          $user->password=Hash::make($data['password']);
          $user->save();
          return \redirect('/login');

        }else{
            return view('pages.register');
        }
    }
    //login form
     public function login(Request $request)
    {
        if($request->isMethod("POST"))
        {
             $data=$request->validate([
                'email'=>'required|email',
                'password'=>'required|min:6'
            ]);
             if(Auth::attempt($data))
             {    
                 $status=Auth::user();
              
                 if($status->is_admin==1)
                 {
                    return redirect('/admin/dashboard');
                 }else{
                      return redirect('/user/dashboard');
                 }
             }
             else
             {
             return \redirect('/login')->with('error','Invalid credentials');
             }

        }else{
            return view('pages.login');
        }
    }

}
