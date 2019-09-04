<?php

namespace App\Http\Controllers;

use App\User;
use App\Account;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
        $accounts = Account::all();
        return view('home', compact('user', 'accounts'));
    }

    public function edit(User $user){

        $user = Auth::user();
        //dd($user);
        //$user = User::where('id', Auth::user()->id)->firstOrFail();
        return view('homes.edit', compact('user'));
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $vr = $this->validateRequest(["first" => $request->first, "last" => $request->last, "bday" => $request->bday, "email" => $request->email]);
        $user->update($vr);
        return redirect('home/');
    }

    private function validateRequest(){
        return request()->validate([
            'first' => ['required', 'string', 'max:255'],
            'last' => ['required', 'string', 'max:255'],
            'bday' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

    }
}
