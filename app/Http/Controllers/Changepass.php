<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class Changepass extends Controller
{
    public function edit(User $user){
        $user = Auth::user();
        return view('pass.edit', compact('user'));
    }
    
    public function update(Request $request, $id){
        $user = User::find($id);
        $vr = $this->validateRequest(["password" => $request->password]);
        $user->update(['password' => Hash::make($vr['password'])]);
        return redirect('home/');
    }

    private function validateRequest(){
    return request()->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

    }
}
