<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirmleaderController;
use App\Http\Controllers\Backend\CasesController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware(['auth', 'role:firmleader'])->group(function(){
    Route::get('/firmleader/dashboard', [FirmleaderController::class, 'FirmleaderDashboard'])->name('firmleader.dashboard');

    Route::get('/firmleader/logout', [FirmleaderController::class, 'FirmleaderLogout'])->name('firmleader.logout');

    Route::get('/firmleader/profile', [FirmleaderController::class, 'FirmleaderProfile'])->name('firmleader.profile'); 

    Route::get('/firmleader/change/password', [FirmleaderController::class, 'FirmleaderChangePassword'])->name('firmleader.change.password');   

    Route::post('/firmleader/update/password', [FirmleaderController::class, 'FirmleaderUpdatePassword'])->name('firmleader.update.password'); 
     
});


Route::get('/firmleader/login', [FirmleaderController::class, 'FirmleaderLogin'])->name('firmleader.login');


Route::middleware(['auth', 'role:firmleader'])->group(function(){

    Route::controller(CasesController::class)->group(function(){
        Route::get('/lawyers', 'Lawyers')->name('lawyers');
        Route::get('/case/lists', 'CaseList')->name('case.lists');
        Route::get('/edit/case{id}', 'EditCase')->name('edit.case');
        Route::post('/update/case', 'UpdateCase')->name('update.case');
       
            

});
     
});

    


