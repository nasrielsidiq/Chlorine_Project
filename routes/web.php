<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.edit.edit-student');
});
Route::get('/task', function () {
    return view('student_page.profille-student');
});
Route::get('/profile', function () {
    return view('student_page.profile-student');
});
