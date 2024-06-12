<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Exemplary;
use App\Models\User;
use Illuminate\Http\Request;

class ExemplaryUserController extends Controller
{
    public function associate(){

        $exemplary = Exemplary::all();
        $user = User::all();
       
        return view('exemplary_user.associate',compact('exemplary','user'));

    }

    public function store(Request $request){

        $exemplary=Exemplary::find($request->exemplary_id);
        $exemplary->users()->attach($request->user_id);

    }
}
