<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * 
 */
class LoginController extends Controller
{
	public function postlogin(Request $request){
		dd($request->all());
	}
}