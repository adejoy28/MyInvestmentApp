<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', 'UserController@index');
Route::post('/user/t', 'UserController@testing')->name('userSubmits');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');
Route::get('/logout', function () {
        Auth::logout();
    return redirect('/');
});

Route::post('/upload', 'UserController@uploadAvatar');
Route::post('/removeImage', 'UserController@removeOldImage')->name('removeImage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@index')->name('about');
Route::get('/t&c', 'HomeController@index')->name('t&c');
Route::get('/support', 'HomeController@index')->name('support');




/**
 * *****************************************************
 * Todo Making Tutorials
 * *****************************************************
 */
Route::resource('/todos', 'TodoController');

//  Route::get('/todos', 'TodoController@index');
//  Route::get('/todos/create', 'TodoController@create');
//  Route::get('/todos/{todo}/edit', 'TodoController@edit');
//  Route::get('/todos/{todo}/delete', 'TodoController@deleteTodo')->name('todo.delete');

//  Route::post('/todos/create', 'TodoController@createTodo');
//  Route::patch('/todos/{todo}/updateTodo', 'TodoController@updateTodoTitle')->name('todo.update');
 Route::put('/todos/{todo}/completeTodo', 'TodoController@completeTodo')->name('todo.complete');
 Route::put('/todos/{todo}/notcompleteTodo', 'TodoController@notCompleteTodo')->name('todo.notcomplete');
//  Route::get('/todos', function () {
//     return view('todos.index');
//  });


/*
 **********************************************
 * Dashboard router
 **********************************************
 */
// Route::resource('/dashboard', 'DashboardController');
Route::get('/dashboard', function() {
     return view('dashboard/index');
 })->name('dashboard');
Route::get('/investments/unapproved', 'InvestmentController@unapproved')->name('unapproved');
Route::get('/investments/ongoing', 'InvestmentController@ongoing')->name('ongoing');
Route::get('/investments/completed', 'InvestmentController@completed')->name('completed');
Route::get('/investments/new', 'InvestmentController@new')->name('new');
Route::get('/investments/abandoned', 'InvestmentController@abandoned')->name('abandoned');
Route::get('/investments/index', 'InvestmentController@index')->name('investments');


// Single Investment Routing

Route::get('/investment/{inv}/delete','InvestmentController@deleteInv')->name('deleteSingleInvestment');
Route::get('/investment/{inv}/edit','InvestmentController@edit')->name('editSingleInvestment');
Route::post('/investment','InvestmentController@startInv')->name('startInvestment');


// Messages Routes

Route::get('/dashboard/message/index', 'DashboardController@index')->name('inbox');
Route::get('/dashboard/message/unread', 'DashboardController@unread')->name('unread');
Route::get('/dashboard/message/read', 'DashboardController@read')->name('read');
Route::get('/dashboard/message/starred', 'DashboardController@starred')->name('starred');
Route::get('/dashboard/message/outbox', 'DashboardController@outbox')->name('outbox');
Route::get('/dashboard/message/compose', 'DashboardController@compose')->name('compose');

// Profiles Routes

Route::get('/dashboard/profile', 'DashboardController@profile')->name('dashboard/profile');
Route::get('/profile/upload', 'DashboardController@upload')->name('uploadImage');
Route::get('/profile/setting', 'DashboardController@settings')->name('settings');


// Plan Routes

Route::get("/plan", 'PlanController@show');


// PDF Routes
Route::get('/investment/generatePdf/{id}','InvestmentController@generateMOU')->name('investment.mou');
Route::get('/prie','InvestmentController@prie')->name('investment.mou');


/**
 * PAYSTACK
 */
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');



/**
 * SHOP ROUTES
 */
Route::get('/shop', 'ShopController@index')->name('shop.index');

// Cart Routes
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/addToCart', 'CartController@create')->name('cart.create');
