<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Validate;
use Illuminate\Validation\Rules\Unique;


class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('student_auth.login');
    }

    public function register(){
        return view('student_auth.register');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $request->validate([
            'name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            // 'confirm_password'=>'required',
            
        ]);


       //insert data//


    //    echo "hiiii";
       
       $admin = new Student();
       $admin->name = $request->name;
       $admin->last_name = $request->last_name;
       $admin->email = $request->email;
       $admin->password = Hash::make($request->password);
    //    $admin->confirm_password = Hash::make($request->confirm_password);
       $admin->save();

       if($admin){
        return back()->with('success','successfully addad data');

       }
       else{
        return back()->with('fail','somthing went wrong, try again');
       }

    }
    
    public function check(Request $request){
        // echo"hii";
        //validate section

        $request->validate([
          'email'=>'required|email',
          'password'=>'required',
        ]);
        
        $userInfo = Student::where('email','=', $request->email)->first();

        if(!$userInfo){
            return back()->with('fail','we do not recognize your address');
        }else{
            //check password

            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return   redirect('order');

        }else{
            return back()->with('fail','Incorrect password');

        }
    }

    }

     public function logout()
     {
       if(session()->has('LoggedUser'))
       {
        session()->pull('LoggedUser');
        return redirect('student/login');
       }
     }



    
    public function dashboard()
    {

        // $data = ['LoggedUserInfo'=>Student::where('id','=', session('LoggedUser'))->first()];
         return view('frontend/student/index', );
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
