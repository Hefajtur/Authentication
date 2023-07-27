<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class HomeController extends Controller
{
    public function memberHome(){
        
        return view('home');
    }

    public function adminHome(){
        $members = User::where('role', '!=', 1)->get(['name', 'role']);
       
        return view('admin', compact('members'));
    }

    public function partnerHome(){
        return view('partner');
    }
}
