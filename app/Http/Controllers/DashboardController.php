<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        // Returning in a variable called posts, all the
        // posts associated with the currrent user
        return view('dashboard')->with('posts', $user->posts);
        // return view('dashboard');
    }


    /**
     * Update the authenticated User's Name resource in storage.
     *
     *
     */
    public function editUser(Request $request) {

      $user_id = auth()->user()->id;
      $user = User::find($user_id);
      if(!$user){
        return redirect('/')->with('error', 'User Not Found');
      }
      return view('auth.edituser')->with('user', $user);
      // $user->name = $request->input('name');
      // $user->save();

      // return redirect('/dashboard')->with('success', 'Name Updates');
    }

    public function updateUser(Request $request) {
      $user_id = auth()->user()->id;
      $user = User::find($user_id);
      if(!$user){
        return redirect('/dashboard')->with('error', 'Unable to change user');
      }
      $user->name = strtolower($request->input('name'));
      $user->organization = strtolower($request->input('organization'));
      $user->phone = $request->input('phone');
      $user->street_address = strtolower($request->input('street_address'));
      $user->city = strtolower($request->input('city'));
      $user->state = strtoupper($request->input('state'));
      $user->zip = $request->input('zip');
      if($request){
        $user->profileComplete = 1;
      }

      $user->save();
      // if ($user->name && $user->phone &&
      //     $user->street_address &&
      //     $user->city && $user->state &&
      //     $user->zip){
      return redirect('dashboard')->with('success', 'User updated');
    }



    public function checkProfileComplete(Request $request) {
      $user_id = auth()->user()->id;
      $user = User::find($user_id);
      $profileComplete = $user->profileComplete;

      if($profileComplete){
        return true;
      }else{
        if($user->name){
          $user->profileComplete = true;
          return true;
        }
        return false;
      }

    }
}
