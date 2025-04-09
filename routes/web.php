<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support;
use App\Models\Job;



$jobs = [
    [
        'id' => 1,
        'title' => 'Software Engineer',
        'company' => 'Tech Company',
    ],
    [
        'id' => 2,
        'title' => 'Data Analyst',
        'company' => 'Data Corp',
    ],
    [
        'id' => 3,
        'title' => 'Web Developer',
        'company' => 'Web Solutions',
    ]
];


Route::get('/', function () {
    return view(
        'home',
        [
            'greeting' => 'Hello ',
        ]
    );

});

Route::get('/About', function () {
    return view('About');
});

Route::get('/Contact', function () {
    return view('Contact');
});

Route::get('/Jobs', function ()  {
    return view(
        'Jobs',
        ['jobs' => job::all()]
    );
});

Route::get(uri: '/Jobs/{id}', action: function ($id)  {

    $job = Job::find($id);

    return view('Job', ['job' => $job]);
});

