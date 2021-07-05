<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Illuminate\Support\Facades\Hash;

class AddStudentController extends Controller
{
    //
    public function register(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'class' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'admin_no' => ['required', 'string', 'max:255', 'unique:users'],
            // 'user_code' => ['exists:users,user_code'],
            // 'password' => ['required', 'string', 'min:8'],
            
        ]);

        


        $username = str_replace(' ', '', $request->name);

        $username = strtolower($username);

        $new_username = mb_strimwidth($username, 0, 10);

        $email = $new_username .rand(111,900).'@sjpis.sch';

        $password = strtoupper($request->admin_no);

        $user = User::create([
            'name' => $request->name,
            'email' => $email,
            'admin_no' => $request->admin_no,
            'class' => $request->class,
            'password' => Hash::make($password),
        ]);



        return back()->with('reg_msg', 'Student Card Successfully Created');
    }
}
