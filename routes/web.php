<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ManagerController;
use App\Http\Middleware\Admin;
use App\Http\Controllers\StateController;

Route::get('/', function () {
    return view('auth.login');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/view', function () {
    return view('admin.adminDashboard');
})->middleware(['admin'])->name('view');

Route::controller(AdminController::class)->group(function () {

    Route::get('/adminlogin', 'adminlogin')->name('adminlogin');
    Route::post('/verify', 'verify')->name('verify');
    Route::get('/adminlogout', 'adminlogout')->name('adminlogout');
});
Route::controller(StateController::class)->group(function () {
    Route::get('/statecreate', 'stateCreate')->name('statecreate');
    Route::get('/statedashboard',  'index')->name('statedashboard');
    Route::post('/stateupload', 'stateUpload')->name('stateupload');
    Route::get('/editstate/{id}',  'edit')->name('editstate');
    Route::post('/updatestate/{id}',  'updateState')->name('updatestate');
    Route::get('/deletestate/{id}',  'deleteState')->name('deletestate');
    Route::get('/import',  'import')->name('import');
    Route::post('/importdata',  'importData')->name('importdata');
});
Route::controller(CityController::class)->group(function () {
    Route::get('/citycreate', 'createCity')->name('citycreate');
    Route::get('/citydashboard',  'index')->name('citydashboard');
    Route::post('/cityupload', 'uploadCity')->name('cityupload');
    Route::get('/editcity/{id}',  'editCity')->name('editcity');
    Route::post('/updatecity/{id}',  'updateCity')->name('updatecity');
    Route::get('/deletecity/{id}',  'deleteCity')->name('deletecity');
});
Route::controller(ManagerController::class)->group(function () {
    Route::get('/managercreate', 'createManager')->name('managercreate');
    Route::get('/managerdashboard',  'index')->name('managerdashboard');
    Route::post('/managerupload', 'uploadManager')->name('managerupload');
    Route::get('/editmanager/{id}',  'editManager')->name('editmanager');
    Route::post('/updatemanager/{id}',  'updateManager')->name('updatemanager');
    Route::delete('/deletemanager/{id}',  'deleteManager')->name('deletemanager');
    Route::post('/status/{id}',  'updateStatus')->name('status');
});
Route::controller(EmployeeController::class)->group(function () {
    Route::get('/employeecreate', 'createEmployee')->name('employeecreate');
    Route::get('/employeedashboard',  'index')->name('employeedashboard');
    Route::post('/employeeupload', 'uploadEmployee')->name('employeeupload');
    Route::get('/editemployee/{id}',  'editEmployee')->name('editemployee');
    Route::post('/updateemployee/{id}',  'updateEmployee')->name('updateemployee');
    Route::delete('/deleteemployee/{id}',  'deleteEmployee')->name('deleteemployee');
    Route::post('/updatestatus/{id}',  'updateStatus')->name('updatestatus');
});

require __DIR__ . '/auth.php';
