<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberCaptureController;
use App\Http\Controllers\DashboardController;
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
// Route::get('/dashboard', function () {
//     return view('Admin.dashboard');
// });
Route::resource("/dashboard", DashboardController::class);
Route::get('/member-captures', function () {
    return view('forms.member_captures');
});

//Updating Section 3 & 4
Route::get('/update_extended_member/{em_id}', function ($em_id) {
    return view('forms.extendedmember', ['em_id' => $em_id]);
});
Route::get('/update_beneficiary_member/{bd_id}', function ($bd_id) {
    return view('forms.beneficiarymember', ['bd_id' => $bd_id]);
});

Route::resource("/member-capture", MemberCaptureController::class)->except(['update']);
Route::put('/member-capture/{id}', [MemberCaptureController::class, 'update']);
Route::post('/check-main-member-id', [MemberCaptureController::class, 'checkMainMemberId']);
Route::post('/in-progress', [MemberCaptureController::class, 'inProgress']);

