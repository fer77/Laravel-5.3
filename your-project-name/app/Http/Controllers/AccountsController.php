<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AccountsController extends Controller
{
	public function __construct() {
		$this->middleware('auth');
	}

    public function edit() {
    	return view('accounts.edit', [
    		'user' => auth()->user()
    	]);
    }
    public function update() {
    	$this->validate(request(), [
    		'name' => 'required',
    		// 'email' => 'required|email|unique:users,email,' . auth()->id()...
    		'email' => [
    			'required', 
    			'email', 
    			Rule::unique('users', 'email')
    			  ->ignore(auth()->id())
    			  ->where('active', 1)]
    	]);
    	auth()->user()->update([
    		'name' => request('name'),
    		'email' => request('email')
    	]);

    	return back();
    }
}
