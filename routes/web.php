<?php
//add model path
use App\Models\Job;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

//  for example 1 use
// $jobs = [

//     [
//         'id' => 1,
//         'title' => 'Programmer',
//         'salary' => '40,000'
//     ],
//     [
//         'id' => 2,
//         'title' => 'Teacher',
//         'salary' => '20,000'
//     ],
//     [
//         'id' => 3,
//         'title' => 'Java Developer',
//         'salary' => '70,000'
//     ]
// ];

// example 1
// Route::get('/jobs', function () use ($jobs) {
//     return view(
//         'jobs',
//         ['jobs' => $jobs]
//     );
// });


// example-1
// Route::get('/jobs/{id}', function ($id) use ($jobs) {

//     $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

//     return view('job', ['job' => $job]);
// });
// for example 2 use
// class job
// {
//     public static function all()
//     {
//         return [

//             [
//                 'id' => 1,
//                 'title' => 'Programmer',
//                 'salary' => '40,000'
//             ],
//             [
//                 'id' => 2,
//                 'title' => 'Teacher',
//                 'salary' => '20,000'
//             ],
//             [
//                 'id' => 3,
//                 'title' => 'Java Developer',
//                 'salary' => '70,000'
//             ]
//         ];
//     }
// }

Route::get('/', function () {
    // $jobs = Job::all();
    // dd($jobs[0]->title);
    return view('home');
});
// example-2
Route::get('/jobs', function () {
    return view(
        'jobs',
        ['jobs' => Job::all()]
    );
});

// example-2
Route::get('/jobs/{id}', function ($id) {

    // $job = Arr::first(job::all(), fn($job) => $job['id'] == $id);
    // if (!$job) abort(404);
    $job = Job::find($id);
    return view('job', ['job' => $job]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});