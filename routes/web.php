<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MemberCaptureController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\ClaimsController;
use App\Http\Controllers\PDFController;

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

Route::middleware('auth')->group(function () {
    //Dashboard
    Route::get('/', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

    //Dashboard-Tables
    Route::get('/tables-member-capture-in-progress', [TableController::class, 'indexMemberCapture']);
    Route::get('/tables-claims-completed', [TableController::class, 'indexClaimsCompleted']);
    Route::get('/tables-claims-in-progress', [TableController::class, 'indexClaimsInProgress']);

    // Route::delete('/dashboard/{id}', [TableController::class, 'destroyMemberCaptureTableData']);
    // Route::delete('/dashboard/{id}', [TableController::class, 'destroyClaimsTableData']);

    Route::resource('/dashboard', DashboardController::class);
    Route::post('/dashboard/claims/{id}', [DashboardController::class, 'claims']);

    //Member captures Form
    Route::resource("/member-capture", MemberCaptureController::class)->except(['update']);
    Route::put('/member-capture/{id}', [MemberCaptureController::class, 'update']);
    Route::post('/check-main-member-id', [MemberCaptureController::class, 'checkMainMemberId']);
    Route::post('/in-progress', [MemberCaptureController::class, 'inProgress']);
    Route::get('/pdfgenerate',[PDFController::class, 'domppdf']);//pdf related

    //Claims Form
    Route::resource("/member-claim", ClaimsController::class);
    Route::post('/check-main-member-id-claim', [ClaimsController::class, 'checkMainMemberId']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
