<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceRequestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopProviderRequestController;
use App\Models\Provider;
use App\Models\ServiceRequest;
use App\Models\TopProviderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\RequestCheckController;

Route::get('/home', function () {
    $visits = session()->get('visits', 1000); // Get visits count from session (default)
    session()->put('visits', $visits + 1);
    return view('home');
});

Route::get('/search', [ServiceController::class, 'search'])->name('search.service');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/airconditions', function () {
    return view('air-conditions');
});
Route::get('/appliance', function () {
    return view('appliance');
});
Route::get('/carpentry', function () {
    return view('carpentry');
});
Route::get('/electrical', function () {
    return view('electrical');
});
Route::get('/painting', function () {
    return view('painting');
});
Route::get('/plumbing', function () {
    return view('plumbing');
});
Route::get('/servicerequest', function () {
    return view('servicerequest');
});



Route::get('/topproviderrequest', [TopProviderRequestController::class, 'create'])->name('topProviderRequest.create');
Route::post('/topproviderrequest', [TopProviderRequestController::class, 'store'])->name('topProviderRequest.store');

Route::get('/servicerequest', [ServiceRequestController::class, 'create'])->name('servicerequest.create');
Route::post('/servicerequest', [ServiceRequestController::class, 'store'])->name('servicerequest.store');



Route::get('/proauth/register', [ProviderController::class, 'showRegisterForm'])->name('register');
Route::post('/proauth/register', [ProviderController::class, 'register'])->name('register.store');
Route::get('/proauth/login', [ProviderController::class, 'showLoginForm'])->name('login');
Route::post('/proauth/login', [ProviderController::class, 'login'])->name('login.submit');
Route::post('/logout', [ProviderController::class, 'logout'])->middleware('auth:provider')->name('provider.logout');

Route::middleware('auth:provider')->group(function () {
    Route::get('/profile/{id}', [ProviderController::class, 'showProfile'])->name('provider.profile');
    Route::get('/profile/{id}/edit', [ProviderController::class, 'editprofile'])->name('provider.edit');
    Route::put('/profile/{id}', [ProviderController::class, 'updateprofile'])->name('provider.update');
});

Route::post('/profile/{id}/update-photo', [ProviderController::class, 'updatePhoto'])->name('provider.updatePhoto');
Route::get('/dashboard',[ProviderController::class, 'dashboard'])->name('provider.dashboard');
Route::get('/adminlogin', function () {
    return view('admin_login');
});

Route::post('/adminlogin', function (Request $request) {
    $request->validate([
        'username' => 'required',
        'password' => 'required'
    ]);

    // Check fixed admin credentials
    if ($request->username === 'admin' && $request->password === 'admin2222') {
        return redirect()->route('admin.dashboard');
    }

    return back()->with('error', 'Invalid username or password');
})->name('admin.login.submit');

Route::get('/admin', function () {
    $serviceRequests = ServiceRequest::all(); // Fetch all service requests
    $topproviderrequests = TopProviderRequest::all();
    return view('admin', compact('serviceRequests','topproviderrequests'));
})->name('admin.dashboard');

Route::post('/service-request/accept/{requestKey}', [ServiceRequestController::class, 'acceptRequest']) ->name('service-request.accept');
Route::post('/service-toprequest/accept/{requestKey}', [TopProviderRequestController::class, 'acceptRequest']) ->name('service-toprequest.accept');
Route::post('/top-provider-requests/refuse/{requestKey}', [TopProviderRequestController::class, 'refuse'])->name('top-provider-requests.refuse');

Route::get('/check-pending', [RequestCheckController::class, 'checkPendingRequests']);


