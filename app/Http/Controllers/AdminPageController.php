<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;

use App\BinaryTree;

use App\DirectReferral;

class AdminPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        //

        $data = [
            'category_name' => 'dashboard',
            'page_name' => 'analytics',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
        ];

        return view('admin.home',[

        ])->with($data);
    }

    public function library()
    {
        //

        $data = [
            'category_name' => 'dashboard',
            'page_name' => 'analytics',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
        ];

        return view('admin.library',[

        ])->with($data);
    }

    public function settings()
    {
        //

        return view('admin.settings',[
            
        ]);
    }

    public function bookings()
    {
        //

        return view('admin.bookings',[
            
        ]);
    }

    public function doc()
    {
        //

        return view('admin.doc',[
            
        ]);
    }

    public function students()
    {
        //

        return view('admin.students',[
            
        ]);
    }

    public function single_student()
    {
        //

        return view('admin.single_student',[
            
        ]);
    }

    public function notifications()
    {
        //
        $data = [
            'category_name' => 'dashboard',
            'page_name' => 'analytics',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
        ];

        return view('admin.notifications',[
            
        ])->with($data);
    }


    public function orders()
    {
        //

        return view('admin.orders',[
            
        ]);
    }

    public function single_order()
    {
        //

        return view('admin.single_order',[
            
        ]);
    }

    public function support()
    {
        //

        return view('admin.support',[
            
        ]);
    }


    public function single_support()
    {
        //

        return view('admin.single_support',[
            
        ]);
    }

    public function audit_trail()
    {
        //

        return view('admin.audit_trail',[
            
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


}
