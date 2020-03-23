<?php

Route::get('/', function(){
    return view('welcome');
});

// Student Routes
Route::post('/student', "StudentsController@store")->name('student.store');
Route::post('/student/delete/{student}', "StudentsController@destroy")->name('student.destroy');

// Teacher Routes
Route::get('/teachers', 'TeachersController@index')->name('teacher.index');
Route::post('/teacher', "TeachersController@store")->name('teacher.store');
Route::post('/teacher/delete/{teacher}', "TeachersController@destroy")->name('teacher.destroy');

// Teacher Posts Routes
Route::post('/teacher/{teacher}/posts', "TeacherPostsController@store")->name('teacher_posts.store');
