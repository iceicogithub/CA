<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cources;
use App\Models\Chapter;
use App\Models\User;

class ListOfUser extends Controller

    {
        public function index()
        {
            $core = Cources::all();
            // $cource = Cources::all();
            return view('auth/listuser',compact('core'));
        }
        public function destroy($id)
        {
            $user =User::find($id);
        if(!is_null($user)){
            $user->delete();
        }
        return redirect()->back();
        }
}
