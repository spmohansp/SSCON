<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main.index');
});


//ABOUT
Route::get('/about-institution', function () {
    return view('main.about.about-institution');
});

Route::get('/chairman', function () {
    return view('main.about.chairman');
})->name('chairman');

Route::get('/vice-chairman', function () {
    return view('main.about.vice-chairman');
})->name('vice-chairman');

Route::get('/principal', function () {
    return view('main.about.principal');
})->name('Principal');

Route::get('/vision-mission', function () {
    return view('main.about.vision-mission');
})->name('vision-mission');



//FACILITIES
Route::get('/facilities', function () {
    return view('main.facilities.facilities');
})->name('facilities');
Route::get('/hostel', function () {
    return view('main.facilities.hostel');
})->name('Hostel');
Route::get('/cafeteria', function () {
    return view('main.facilities.cafeteria');
})->name('Cafeteria');
Route::get('/transport', function () {
    return view('main.facilities.transport');
})->name('Transport');
Route::get('/library', function () {
    return view('main.facilities.library');
})->name('Library');
Route::get('/laboratory', function () {
    return view('main.facilities.laboratoryfacilities');
})->name('Laboratory');
Route::get('/clinical_experience', function () {
    return view('main.facilities.ClinicalExperience');
})->name('Clinical_Experience');
Route::get('/faculty', function () {
    return view('main.facilities.faculty');
})->name('Faculty');
Route::get('/cocurricular_activities', function () {
    return view('main.facilities.cocurricular_activities');
})->name('Co-Curricular_Activities');
Route::get('/sports', function () {
    return view('main.facilities.sports');
})->name('Sports');
Route::get('/scholarships', function () {
    return view('main.facilities.scholarships');
})->name('Scholarships');



//Events
Route::get('/events', function () {
    return view('main.events.list-event');
});


//Course
Route::get('/courses', function () {
    return view('main.course.course');
})->name('courses');



//Committe
Route::get('/committe/Placement-Cell', function () {
    return view('main.committe.placement-cell');
})->name('Placement-Cell');

Route::get('/committe/Anti-ragging-Squad', function () {
    return view('main.committe.anti-ragging-squad');
})->name('Anti-ragging-Squad');

Route::get('/committe/Anti-Discrimination-Cell', function () {
    return view('main.committe.anti-discrimination-cell');
})->name('Anti-Discrimination-Cell');

Route::get('/anti-ragging-committee', function () {
    return view('main.committe.anti-ragging-committee');
})->name('anti-ragging-committee');

Route::get('/sc-st-committee', function () {
    return view('main.committe.sc-st-committe');
})->name('sc-st-committe');

Route::get('/Student_Grievance_Redressal_Cell', function () {
    return view('main.committe.grievance');
})->name('Student_Grievance');




Route::get('/contact', function () {
    return view('main.contact');
});
