<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();

Route::get('/choose', 'ChooseRoleController@index')->name('choose');

Route::get('/', 'ChooseRoleController@index')->name('choose')->middleware('auth');



Route::get('/affiliate/{user_code}', 'UserPageController@affiliate_reg')->name('user.affiliate_reg');



Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'user'], function(){

    Route::get('/', 'UserPageController@home')->name('user.home');

    Route::get('/my_profile', 'UserPageController@my_profile')->name('user.my_profile');

    Route::get('/my_books', 'UserPageController@my_books')->name('user.my_books');

    Route::get('/school_library', 'UserPageController@school_library')->name('user.school_library');

    Route::get('/doc', 'UserPageController@doc')->name('user.doc');

    Route::get('/my_doc', 'UserPageController@my_doc')->name('user.my_doc');


    Route::get('/notifications', 'UserPageController@notifications')->name('user.notifications');

    Route::get('/purchase_success', function (){
        # code...
        // $category_name = '';
        $data = [
            'category_name' => 'pages',
            'page_name' => 'maintenence',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',

        ];
        // $pageName = 'maintenence';
        return view('user.purchase_success')->with($data);
    });


});



Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function(){

    Route::get('/', 'AdminPageController@home')->name('admin.home');

    Route::get('/students', 'AdminPageController@students')->name('admin.students');

    Route::get('/add_student', 'AdminPageController@add_student')->name('admin.add_student');

    Route::get('/library', 'AdminPageController@library')->name('admin.library');

    Route::get('/add_book', 'AdminPageController@add_book')->name('admin.add_book');

    Route::get('/doc/{doc_id}', 'AdminPageController@doc/{doc_id}')->name('admin.doc/{doc_id}');

    Route::get('/bookings', 'AdminPageController@bookings')->name('admin.bookings');

    Route::get('/settings', 'AdminPageController@students')->name('admin.settings');

    Route::get('/notifications', 'AdminPageController@notifications')->name('admin.notifications');

    Route::get('/single_student/{admin_no}', 'AdminPageController@single_student')->name('admin.single_student');





});





// Route::get('/', 'HomeController@index');

// Route::get('/register', function() {
//     return redirect('/reg');    
// });
// Route::get('/password/reset', function() {
//     return redirect('/login');    
// });



Route::get('/reg', function() {
    // $category_name = 'auth';
    $data = [
        'category_name' => 'auth',
        'page_name' => 'auth_default',
        'has_scrollspy' => 0,
        'scrollspy_offset' => '',
    ];
    // $pageName = 'auth_default';
    return view('pages.authentication.auth_register',[
        'user_code' => ''
    ])->with($data);
})->name('reg');


Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');

Route::get('/stripe', 'StripePaymentController@stripe')->name('stripe');


Route::post('/add_book', 'BookController@add_book')->name('add_book');




Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');


Route::post('updateProfile', 'UserProfileController@updateProfile');

Route::post('/getUserInfo', 'UserProfileController@getUserInfo');

Route::post('/upload_avatar', 'UserProfileController@upload_avatar');


Route::post('/upload_payment_proof', 'OfflinePaymentController@upload_payment_proof')->name('upload_payment_proof');





Route::get('/receive', 'UserProfileController@getUserInfo');


Route::get('/landingPage/{user_code}', 'LandingPageController@landingPage');


Route::get('/record_landing_page_leads', 'LandingPageLeedController@record_landing_page_leads')->name('record_landing_page_leads');


Route::get('/check_legs/{id}', 'BinaryTreeController@check_legs')->name('check_legs');

Route::post('/add_node', 'BinaryTreeController@add_node')->name('add_node');

Route::get('/getChildren/{id}', 'BinaryTreeController@getChildren')->name('getChildren');


Route::post('/register_student', 'AddStudentController@register')->name('register_student');









