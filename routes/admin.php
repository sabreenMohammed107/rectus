<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\TestController;
use App\Http\Controllers\admin\RoundController;
use App\Http\Controllers\Admin\VenueController;
use App\Http\Controllers\admin\ClientController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\CareersController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\admin\CoursesController;
use App\Http\Controllers\admin\GalleryController;
use App\Http\Controllers\admin\BranchesController;
use App\Http\Controllers\admin\MessagesController;
use App\Http\Controllers\admin\PartenerController;
use App\Http\Controllers\admin\TraineerController;
use App\Http\Controllers\Admin\UserListController;
use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\admin\ExpertiseController;
use App\Http\Controllers\admin\BtsNumbersController;
use App\Http\Controllers\admin\NewsLetterController;
use App\Http\Controllers\admin\SubCategoryController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\admin\JobApplicantController;
use App\Http\Controllers\admin\TeachCoursesController;
use App\Http\Controllers\Admin\YearCalenderController;
use App\Http\Controllers\admin\RoundsApplicantController;
use App\Http\Controllers\admin\ApplicantSpeakerController;
use App\Http\Controllers\admin\CoursesApplicantController;

Auth::routes();

Route::get('registerTest', function () {
    return view('auth.register');
});


Route::post('/reg',  [TestController::class, 'create'])->name('reg');
Route::get('/adminLogin', function () {
    return view('auth.login');
});

// Route::namespace('Admin')->group(function () {

Route::get('/admin',  [AdminHomeController::class, 'home']);
Route::get('/home',  [AdminHomeController::class, 'home']);
/*--------------------branch----------------------*/
Route::resource('/admin/branch',  BranchesController::class);
Route::post('dynamic_dependent/fetch',  [BranchesController::class, 'fetch'])->name('dynamicdependent.fetch');
/*-------------------------partener-------------------*/
Route::resource('/admin/partener',  PartenerController::class);

/*-------------------------clients-------------------*/
Route::resource('/admin/client',  ClientController::class);


/*-------------------------btsNumber-------------------*/
Route::resource('/admin/number',  BtsNumbersController::class);

/*-------------------------slider-------------------*/
Route::resource('/admin/slider',  SliderController::class);
/*-------------------------subcategory-------------------*/
Route::resource('/admin/subcat',  SubCategoryController::class);

/*-------------------------course-------------------*/
Route::resource('/admin/course',  CoursesController::class);
Route::post('dynamicdependentCat/fetch',  [CoursesController::class, 'fetchCat'])->name('dynamicdependentCat.fetch');
Route::post('saveRelated',  [CoursesController::class, 'saveRelated'])->name('saveRelated');
Route::DELETE('deleteRelated/{id}',  [CoursesController::class, 'deleteRelated'])->name('deleteRelated');
/*--------------------round----------------------*/
Route::resource('/admin/round',  RoundController::class);
Route::post('dynamic_dependentCountry/fetch',  [RoundController::class, 'fetchCountry'])->name('dynamic_dependentCountry.fetch');
//new
Route::get('dynamic_round/fetch',  [RoundController::class, 'fetchRound'])->name('dynamic_round.fetch');

Route::get('fetch_dataPage',  [RoundController::class, 'fetchRoundPage'])->name('fetch_dataPage');

//end
/*-------------------------trainer-------------------*/
Route::resource('/admin/trainer',  TraineerController::class);

/*-------------------------testimonial-------------------*/
Route::resource('/admin/testimonial',  TestimonialController::class);

/*-------------------------Gallery-------------------*/
Route::resource('/admin/gallery',  GalleryController::class);

/*-------------------------News Letter-------------------*/
Route::resource('/admin/newsLetter',  NewsLetterController::class);

/*-------------------------Messages-------------------*/
Route::resource('/admin/message',  MessagesController::class);

/*-------------------------Expertise-------------------*/
Route::resource('/admin/expertise',  ExpertiseController::class);

/*-------------------------TeachCourses-------------------*/
Route::resource('/admin/teach',  TeachCoursesController::class);

/*-------------------------Career-------------------*/
Route::resource('/admin/career',  CareersController::class);

/*-------------------------JobApplicant-------------------*/
Route::resource('/admin/jobApplicant',  JobApplicantController::class);

/*-------------------------Applicants-------------------*/
Route::resource('/admin/appl',  ApplicantSpeakerController::class);

/*-------------------------CoursesApplicant-------------------*/
Route::resource('/admin/applCourse',  CoursesApplicantController::class);

/*-------------------------RoundsApplicant-------------------*/
Route::resource('/admin/applRound',  RoundsApplicantController::class);

/*-------------------------YearCalender-------------------*/
Route::resource('/admin/yearCalender',  YearCalenderController::class);

/*-------------------------Country-------------------*/
Route::resource('/admin/country',  CountryController::class);

/*-------------------------Venue-------------------*/
Route::resource('/admin/venue',  VenueController::class);


/*-----------------------------------------------------------*/
Route::resource('/admin/usersList',  UserListController::class);

Route::get('/resetPassword/{id}',  [UserListController::class, 'resetPassword'])->name('resetPassword');
Route::post('editUserPassword',  [UserListController::class, 'editUserPassword'])->name('editUserPassword');

// });
