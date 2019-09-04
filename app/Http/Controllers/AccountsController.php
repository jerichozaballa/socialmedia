<?php

namespace App\Http\Controllers;

use App\Account;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $accounts = Account::all();
        return view('accounts.index', compact('accounts', 'user'));
    }

    public function create(){
    	$account = new Account();
        return view('accounts.create', compact('account'));
    }

    public function store(){
        $account = Account::create($this->validateRequest());
    	return redirect('account');
    }

    public function show(Account $account){
        return view('accounts.show', compact('account'));
    }

    public function edit(Account $account){
        return view('accounts.edit', compact('account'));
    }

    public function update(Account $account){
        $account->update($this->validateRequest());
        return redirect('account/');
    }

    public function destroy(Account $account){
        $account->delete();
        return redirect('account');
    }

    private function validateRequest(){
        return request()->validate([
            'post' => 'required|min:3|max:1000',
        ]);

    }
}
