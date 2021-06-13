<?php

namespace App\Http\Controllers;

use App\UserProfile;
use App\User;
use Auth;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function getUserInfo(Request $request)
     {

        $user_id = Auth::user()->id;
        
        try {
            //code...
            $user_profile = UserProfile::where('user_id', $user_id)->first();

            return $user_profile;
            
        } catch (\Throwable $th) {
            //throw $th;

            return $th;
        }
      
     }

     public function upload_avatar(Request $request)
     {
        $user_id = Auth::user()->id;

        $image = $request->file('file');

        $newname = rand(233,9000).'.'.$image->getClientOriginalExtension();

        $image->move(public_path('avatars'), $newname);

        try {
            //code...
           $user = User::where('id', $user_id)->update([
                'avatar'=> $newname
            ]);

            return $user;
        } catch (\Throwable $th) {
            //throw $th;

            return $th;
        }



        
        return $newname;
         
        

     }



    public function updateProfile(Request $request)
    {
        //
        try {
            
            $user_id = Auth::user()->id;

  
    
            // return  $request->all();

            $profile = UserProfile::updateOrCreate([
                    'user_id' => $user_id
                    ],[
                    'bio' => $request->bio,
                    'gender' => $request->gender,
                    'nationality' => $request->nationality,
                    'address' => $request->address,
                    'phone' => $request->phone,
                    'nok_fullname' => $request->nok_fullname,
                    'nok_address' => $request->nok_address,
                    'nok_relationship' => $request->nok_relationship,
                    'nok_phone' => $request->nok_phone,
                    'recipient_code' => $request->recipient_code,
                    'Auth_Code' => $request->Auth_Code,
                    'bank_code' => $request->bank_code,
                    'account_name' => $request->account_name,
                    'account_number' => $request->account_number,
                    'sort_code' => $request->sort_code
    
            ]);
    
            return $profile;
            
        } catch (\Throwable $th) {
            //throw $th;

            return $th;
        }
    
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function show(UserProfile $userProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(UserProfile $userProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserProfile $userProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserProfile $userProfile)
    {
        //
    }
}
