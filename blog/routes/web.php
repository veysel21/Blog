<?php
/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------

*/
Route::post('/add_category','AddCategoryController@create')->name('addCategoryPost');
Route::get('/add_categories','AddCategoryController@index')->name('addCategory');


Route::get('/categories','CategoryController@index');

Route::get('/change_passwords', function() {
    return view('back.change_passwords');
});

Route::resource('makaleler','Back\ArticleController');

Route::get('/home', function() {
    return view('back.index');
})->name('home')->middleware('auth');
Auth::routes();
Route::get('/', 'Front\Homepage@index') -> name('homepage');





/*
|--------------------------------------------------------------------------
| Fronted Routes
|--------------------------------------------------------------------------

*/


Route::get('/iletisim','Front\Homepage@contact')->name('contact');
Route::post('/iletisim','Front\Homepage@contactpost')->name('contact.post');
Route::get('/kategori/{category}','Front\Homepage@category')->name('category');
Route::get('/{category}/{slug}','Front\Homepage@single')->name('single');
Route::get('/{sayfa}','Front\Homepage@page')->name('page');





