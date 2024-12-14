<?php

use App\Models\Task;
use App\Models\Blog;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rules\In;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/blogs', function () {
    return view('blogs', [
        'blogs' => Blog::all()
        
    ]);
});

Route::get("blogs/{id}", function($id){
    $blogs = Blog::all();
    
    $blog = Arr::first($blogs, fn ($blog) => $blog['id'] == $id);


    return view('blog', ['blog' => $blog]);
});

Route::get('tasks', function(){
    return view('tasks', [
        'tasks' => Task::all()
    ]);
});

Route::get("tasks/{id}", function($id){
    $tasks = Task::all();
    $task = Arr::first($tasks, fn ($task) => $task['id'] == $id);
    return view('task', ['task' => $task]);
});