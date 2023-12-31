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

/*----------------------Home---------------------------*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\IndexController;
use App\Http\Controllers\web\CourseController;
use App\Http\Controllers\web\JoinUsController;
use App\Http\Controllers\web\AboutUsController;
use App\Http\Controllers\web\InHouseController;
use App\Http\Controllers\web\CalenderController;
use App\Http\Controllers\web\CategoryController;
use App\Http\Controllers\web\SpeakersController;
use App\Http\Controllers\web\ContactUsController;
use App\Http\Controllers\web\TesimonialController;
use App\Http\Controllers\web\PublicTrainingController;

Route::get("/", [IndexController::class, 'index']);














Route::post('/sendMessage',  [IndexController::class, 'sendMessage']);
Route::post('/sendNewsLetter',  [IndexController::class, 'sendNewsLetter']);
Route::get('/courses/{category_id}/{subCategory_id}/{filter_type}', [CourseController::class, 'filterCourses']);
Route::get('/searchForm',  [CourseController::class, 'searchForm'])->name('searchForm');

Route::get('/courseDetails/{id}', [CourseController::class, 'courseDetails']);
Route::post('/registerApplicants', [CourseController::class, 'registerApplicants'])->name('registerApplicants');
Route::get('/downloadBrochure/{course_id}', [CourseController::class, 'downloadBrochure']);
Route::get('/termsAndConditions', [CourseController::class, 'terms']);
Route::get('/requestInHouse/{course_id}', [CourseController::class, 'requestInHouse']);
Route::get('/registerCourse/{round_id}',[CourseController::class, 'registerCourse']);
Route::post('registerApplicantRounds',[CourseController::class, 'registerApplicantRounds']);
Route::post('/registerApplicantsDawnload', [CourseController::class, 'registerApplicantsDawnload'])->name('registerApplicantsDawnload');
Route::get('/refreshcaptcha', [CourseController::class, 'refreshCaptcha'])->name('refreshcaptcha');
//new
Route::get('fetch_data_search',[CourseController::class, 'fetch_data']);
//end
/*-------------------------Sasa--------------------- */
/*-------------------------My Category-------------------------*/
Route::get('/category/{id}', [CategoryController::class, 'index'])->name('category');
Route::get('fetch_data', [CategoryController::class, 'fetch_data']);

/*-------------------------Public Training-------------------------*/

Route::get('/publicTraining',  [PublicTrainingController::class, 'index'])->name('publicTraining');
Route::get('fetch_main', [PublicTrainingController::class, 'fetch_main']);
Route::get('/technicalTraining/{id}', [PublicTrainingController::class, 'technicalTraining'])->name('technicalTraining');
Route::get('/softTraining/{id}', [PublicTrainingController::class, 'softTraining'])->name('softTraining');
Route::get('/certiTraining/{id}', [PublicTrainingController::class, 'certiTraining'])->name('certiTraining');
Route::get('/it/{id}', [PublicTrainingController::class, 'itTraining'])->name('it');
Route::get('fetch_tech', [PublicTrainingController::class, 'fetch_tech']);
Route::get('fetch_soft', [PublicTrainingController::class, 'fetch_soft']);
Route::get('fetch_certi', [PublicTrainingController::class, 'fetch_certi']);
Route::get('fetch_it', [PublicTrainingController::class, 'fetch_it']);

/*-------------------------Testimonial-------------------------*/
Route::get('/tesimonial', [TesimonialController::class, 'index'])->name('tesimonial');
/*-------------------------contactUs-------------------------*/
Route::get('/contactus', [ContactUsController::class, 'index'])->name('contactus');
/*-------------------------speakers-------------------------*/
Route::get('/speakers',  [SpeakersController::class, 'index'])->name('speakers');
Route::post('/speakerForm',  [SpeakersController::class, 'speakerForm'])->name('speakerForm');
Route::post('speaker_dependentCountry/fetch',  [SpeakersController::class, 'fetchCountry'])->name('speaker_dependentCountry.fetch');
/*-------------------------JoinUs-------------------------*/
Route::get('/joinus', [JoinUsController::class, 'index'])->name('joinus');
Route::post('/joinusForm', [JoinUsController::class, 'joinusForm'])->name('joinusForm');
/*-------------------------AboutUsController-------------------------*/
Route::get('/aboutUs',  [AboutUsController::class, 'index'])->name('aboutUs');
Route::get('/conditions',  [AboutUsController::class, 'conditions'])->name('conditions');
Route::get('/consunltancy',  [AboutUsController::class, 'Consunltancy'])->name('consunltancy');
Route::get('/accreditations',  [AboutUsController::class, 'accreditations'])->name('accreditations');
/*-----------------------------------------------------------*/
Route::post('/reducedForm',  [CourseController::class, 'reducedForm'])->name('reducedForm');
/******************InHouse**************** */
Route::get('/inHouse',  [InHouseController::class, 'index'])->name('inHouse');
Route::post('registerApplicantsHouse', [InHouseController::class, 'registerApplicantsHouse']);
/*---------------------------------------------------------------------*/

Route::get('/calender/{current}', [CalenderController::class, 'getCal'])->name('calender');
Route::get('/calenderNext/{current}', [CalenderController::class, 'getCalNext'])->name('calenderNext');

Route::get('dynamicCalender/fetch', [CalenderController::class, 'dynamicCalender'])->name('dynamicCalender.fetch');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
