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

    public function add_book()
    {
        //

        $data = [
            'category_name' => 'dashboard',
            'page_name' => 'analytics',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
        ];

        return view('admin.add_book',[

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
        $data = [
            'category_name' => 'dashboard',
            'page_name' => 'analytics',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
        ];

        return view('admin.bookings',[

            ])->with($data);
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
        $data = [
            'category_name' => 'dashboard',
            'page_name' => 'analytics',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
        ];

        $students_data = User::where('role', 'user')->latest()->paginate(20);

       

        return view('admin.students',[
            'students_data' => $students_data
            ])->with($data);
    }

    public function add_student()
    {
        //
        $data = [
            'category_name' => 'dashboard',
            'page_name' => 'analytics',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
        ];

        return view('admin.add_student',[

            ])->with($data);
    }

    public function single_student($admin_no)
    {
        //
        $data = [
            'category_name' => 'dashboard',
            'page_name' => 'analytics',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
        ];

        $student_data = User::where('admin_no', $admin_no)->first();

        return view('admin.single_student',[
            'student' => $student_data
        ])->with($data);
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
