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

/*Route::get('/', function () {
    return view('index');
})->name('home');*/

Route::get('/','HomeController@index')->name('home');

Route::get('/home','HomeController@index')->name('home');

Route::get('cocktail/main',[
    'uses' => 'CocktailCategoryController@showCocktailCategories'
]);

Route::get('about-us', function () {
    return view('about-us');
});

Route::get('drink-category-grid-full/{id}/{category}', function () {
    return view('drink-category-grid-full');
});


Route::get('cocktail/category/{category?}',[
    'uses' => 'CocktailCategoryController@showCocktailList'
]);

Route::get('cocktail/view/{id}',[
    'uses' => 'CocktailCategoryController@showCocktailInformation'
]);

Route::get('cocktail/user-cocktails/{category?}',[
    'uses' => 'CocktailCategoryController@ShowUserCocktailsByCategory'
]);
Route::get('cocktail/add-cocktail/',[
    'uses' => 'CocktailsByUsersController@loadCocktailCategories'
]);

Route::get('cocktail/user-cocktail-page/{id}',[
    'uses' => 'CocktailCategoryController@showUserCocktailInformation'
]);

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/register','Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register','Auth\RegisterController@register')->name('register.submit');

Route::get('/profile', 'ProfileController@create');
Route::post('/profile/update', 'ProfileController@updateProfile')->name('profile.update');
Route::post('/profile/reset', 'Auth\ResetPasswordController@resetPassword')->name('password.reset');

Route::post('/add-my-cocktail', '\CocktailsByUsersController@addCocktailByUser');


Route::get('ajax',function(){
    return view('cocktail/category');
});
Route::get('/getpage/{category}/{page}','AjaxController@index');

