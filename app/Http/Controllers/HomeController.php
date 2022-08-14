<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        return view('home', compact('user'));
    }

    public function edit(Request $request, User $user)
    {
        $user = Auth::user();

        return view('update_password', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $user = Auth::user();   
        DB::table('oauth_access_tokens')
        ->where('user_id', Auth::id())
        ->update([
            'revoked' => true
        ]);
        if ($request->password) {
            $input['password'] = bcrypt($request->password);
        } else {
            $input['password'] = $user->password;
        }
        $user->whereId($id)->first()->update($input);
        
        return back()->with('password-update', 'Password updated successfully!');
    }
}
