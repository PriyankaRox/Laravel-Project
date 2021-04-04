<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\CaptchaController;
use App\Http\Controllers\MyController;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('locations', \App\Http\Controllers\LocationController::class);
    Route::resource('feedbacks', \App\Http\Controllers\FeedbackController::class);
    Route::resource('customers', \App\Http\Controllers\CustomerController::class);
    Route::resource('tasks', \App\Http\Controllers\TasksController::class);    
    Route::resource('users', \App\Http\Controllers\UsersController::class);
    //Route::get('locationsview', \App\Http\Controllers\LocationController::class,'show');
    //Route::get('destroy',\App\Http\Controllers\LocationController::class,'destroy');

});


Route::get('locationsview{id}', [LocationController::class,'show']);
Route::get('locationsedit{id}', [LocationController::class,'show']);
Route::get('locationsdestroy{id}', [LocationController::class,'destroy']);

//pdf
Route::get('pdf/preview', [PDFController::class, 'preview'])->name('pdf.preview');
Route::get('pdf/generate', [PDFController::class, 'generatePDF'])->name('pdf.generate');

Route::get('/customer/pdf',[CustomerController::class, 'createPDF']);

//Route::get('/customer/pdf',[CustomerController::class, 'show']);

//email
Route::get('sendbasicemail',[MailController::class,'basic_email']);
Route::get('sendhtmlemail',[MailController::class,'html_email']);
Route::get('sendattachmentemail',[MailController::class,'attachment_email']);

//captcha
Route::get('contact-form', [CaptchaController::class, 'create']);
Route::post('captcha-validation', [CaptchaController::class, 'capthcaFormValidate']);
Route::get('reload-captcha', [CaptchaController::class, 'reloadCaptcha']);

//xl
Route::get('importExportView', [MyController::class, 'importExportView']);
Route::get('export', [MyController::class, 'export'])->name('export');
Route::post('import', [MyController::class, 'import'])->name('import');

