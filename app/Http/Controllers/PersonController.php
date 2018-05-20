<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonController extends Controller
{
   public function index(Request $request)
   {
       $user = Auth::user();
       $items = Person::paginate(5);
       return view('person.index', ['items' => $items, 'user' => $user]);
   }

   public function find(Request $request)
   {
     return view('person.find',['input' => '']);
   }

   public function search(Request $request)
   {
     $item = Person::find($request->input);
     $param = ['input' => $request->input, 'item' => $item];
     return view('person.find', $param);
  }

  public function getAuth(Request $request)
  {
     $param = ['message' => 'ログインして下さい。'];
     return view('person.auth', $param);
  }

  public function postAuth(Request $request)
  {
     $email = $request->email;
     $password = $request->password;
     if (Auth::attempt(['email' => $email,
             'password' => $password])) {
         $msg = 'ログインしました。（' . Auth::user()->name . '）';
     } else {
         $msg = 'ログインに失敗しました。';
     }
     return view('person.auth', ['message' => $msg]);
  }

}
