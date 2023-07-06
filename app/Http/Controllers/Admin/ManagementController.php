<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ManagementController extends Controller
{
    public function index(){
        $users = User::all();
        return view('pages.admin.manage.index',[
            'users'=> $users
        ]);
    }

    public function role(Request $request){
        $user = User::findOrFail($request->userId);

        $user->roles = $request->role;
        $user->save();
        return redirect()->route('manage.index');
    }
}
