<?php
Route::get('/', function () {
    return view('index');
});

Route::get('/{name}', function() {
    return redirect('/');
})->where('name', '[A-Za-z]+');
