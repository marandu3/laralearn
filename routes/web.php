<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support;
use App\Models\Job;




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

