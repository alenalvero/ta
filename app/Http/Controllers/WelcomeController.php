<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function checkUser()
    {	
    	if (auth()->user()->type == 'admin'){
    		return redirect('/admin/user');
    	}
    	if (auth()->user()->type == 'operator'){
    		return redirect('/operator/bis');
    	}
    	if (auth()->user()->type == 'user'){
    		return redirect('/');
  		}
    }
}
