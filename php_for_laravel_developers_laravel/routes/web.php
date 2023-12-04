<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    $task1 = new stdClass();
    $task1->id = 1;
    $task1->title = 'Task 1';
    $task1->description = 'This is the first task';
    $task1->completed = 1;
    $task2 = new stdClass();
    $task2->id = 2;
    $task2->title = 'Task 2';
    $task2->description = 'This is the second task';
    $task2->completed = 0;

    $tasks = [
            $task1,
            $task2
    ];
    return view('tasks',[
        'tasks' => $tasks
    ]);
});

Route::get('/tasks', function () {
    return view('tasks',[
        'tasks' => []
    ]);
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});
