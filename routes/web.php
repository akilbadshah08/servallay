<?php



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



Auth::routes();



//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/innerpage/page/{slug?}', 'MHomeController@innerpage');
// Route::get('/', 'HomeController@index')->name('home');

// Route::get('/contact', 'HomeController@contact')->name('contact');

// Route::post('/contact_submit', 'HomeController@contact_submit')->name('home.contact_submit');

// Route::get('/myoption', 'HomeController@myoption')->name('myoption')->middleware('auth','subscription');

// Route::get('/category/{slug}', 'HomeController@category')->name('category');





// Route::get('/product', 'HomeController@product')->name('product');

// Route::get('/productdetail/{slug}', 'HomeController@productdetail')->name('productdetail');



// Route::get('/libraries_history', 'HomeController@libraries_history')->name('libraries_history')->middleware('auth','subscription');

// Route::get('/libraries/{slug?}', 'HomeController@library')->name('library')->middleware('auth','subscription');

// Route::get('/livevirtual', 'HomeController@livevirtual')->name('livevirtual')->middleware('auth','subscription');

// Route::get('/instudio', 'HomeController@instudio')->name('instudio')->middleware('auth','subscription');



// // Route::get('/livevirtual', 'HomeController@instudio')->name('instudio');

// Route::get('/programs', 'HomeController@programs')->name('program')->middleware('auth','subscription');

// Route::get('/program_detail/{slug}', 'HomeController@program_detail')->name('program_detail')->middleware('auth','subscription');



// Route::get('/blogs', 'HomeController@blogs')->name('blog');

// Route::get('/blog_detail/{slug}', 'HomeController@blog_detail')->name('blog_detail');

// Route::post('/contactsubmit', 'HomeController@contactsubmit')->name('contactsubmit');


Route::get('logout','Auth\LoginController@logout');


Route::group(["middleware" => ["is_thisAdmin","auth"]],function (){

    Route::group(["namespace" => "Admin"], function (){

        Route::resource("admin-dashboard","DashboardController");

        Route::resource("admin-users","UsersController");

        Route::resource("admin-category","CategoryController");

        Route::resource("admin-products","ProductController");

        Route::resource("admin-providers","ProvidersController");



         Route::resource("admin-blogs","BlogController");

        Route::resource("admin-orders","OrderController");

        Route::resource("admin-payment","PaymentController");

        

        Route::resource("admin-librarys","LibraryController");

        Route::resource("admin-video-category","VideoCategoryController");

        Route::resource("admin-program-videos","ProgramVideoController");

        Route::resource("admin-programs","ProgramController");

        Route::resource("admin-trainers","TrainerController");

    });

});





// Route::group(['prefix' => 'basket'], function () {

//     Route::get('/', 'BasketController@index')->name('basket');



//     Route::get('/create', 'BasketController@create')->name('basket.create');

//     Route::delete('/destroy', 'BasketController@destroy')->name('basket.destroy');

//     Route::patch('/update/{rowid}', 'BasketController@update')->name('basket.update');

// });



// Route::get('/payment', 'PaymentController@index')->name('payment');

// Route::post('/successful', 'PaymentController@pay')->name('cpay');







// Route::get('/orders', 'OrderController@index')->name('orders');

// Route::get('/orders/{id}', 'OrderController@detail')->name('order');



// Route::resource('profile', 'UserDetailController')->middleware('auth');

// Route::get('subscription', 'HomeController@subscription')->middleware('auth');

// Route::post('pay', 'HomeController@pay')->name('pay');

// Route::post('checkoutpay', 'HomeController@pay')->name('pay');



