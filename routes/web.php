<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.beranda');
});
Route::get('/task', function () {
    return view('student_page.profille-student');
});
