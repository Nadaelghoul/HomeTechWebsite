<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\API\UserController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Middleware\CheckAccessOrRefresh;
use App\Http\Controllers\Api\ServiceRequestApiController;
use App\Http\Controllers\Api\TopProviderRequestApiController;
use App\Http\Controllers\Api\ProviderController;
use App\Http\Controllers\Api\ServiceApiController;
use App\Http\Controllers\Api\ContactApiController;
use App\Http\Controllers\Api\RequestCheckApiController;
use App\Http\Controllers\Api\AdminApiController;




Route::post('/user/auth/register/client', [AuthController::class, 'registerClient']);
Route::post('/user/auth/register', [AuthController::class, 'register']);
Route::post('/user/auth/login',    [AuthController::class, 'login']);

Route::post('/user/auth/logout', [AuthController::class, 'logout'])
     ->middleware(CheckAccessOrRefresh::class);

Route::get('/user/auth/check', [AuthController::class, 'check'])
     ->middleware(CheckAccessOrRefresh::class);






// Route for servicse request
Route::get('/service-requests', [ServiceRequestApiController::class, 'index']);
Route::get('/service-requests/{id}', [ServiceRequestApiController::class, 'show']);
Route::post('/service-requests', [ServiceRequestApiController::class, 'store']);

Route::post('/service-request/{requestKey}', [ServiceRequestApiController::class, 'acceptRequest'])
     ->middleware(CheckAccessOrRefresh::class);


// top provider request
Route::post('/top-provider-request', [TopProviderRequestApiController::class, 'store']);
Route::post('/top-provider-request/accept/{requestKey}', [TopProviderRequestApiController::class, 'acceptRequest'])
     ->middleware(CheckAccessOrRefresh::class);

Route::post('/top-provider-request/refuse/{requestKey}', [TopProviderRequestApiController::class, 'refuse'])
     ->middleware(CheckAccessOrRefresh::class);

Route::get('/top-provider-request', [TopProviderRequestApiController::class, 'create'])
          ->middleware(CheckAccessOrRefresh::class);

Route::get('/top-provider-request/notification', [TopProviderRequestApiController::class, 'getNotification'])
    ->middleware(CheckAccessOrRefresh::class);

Route::post('/top-provider-request/notification-viewed', [TopProviderRequestApiController::class, 'makeNotificationViewed'])
    ->middleware(CheckAccessOrRefresh::class);



//admin

Route::post('/admin/login', [AdminApiController::class, 'login'])
     ->middleware(CheckAccessOrRefresh::class);

Route::get('/admin/dashboard', [AdminApiController::class, 'dashboard'])
     ->middleware(CheckAccessOrRefresh::class);


//  search
Route::post('/search-service', [ServiceApiController::class, 'search'])
     ->middleware(CheckAccessOrRefresh::class);



//contact
Route::post('/contact', [ContactApiController::class, 'submit'])
     ->middleware(CheckAccessOrRefresh::class);



//check
Route::get('/check-pending-requests', [RequestCheckApiController::class, 'checkPendingRequests'])
     ->middleware(CheckAccessOrRefresh::class);


// Profile
Route::get('/users/user/profile/{id}' , [ProviderController::class, 'showProfile'])
     ->middleware(CheckAccessOrRefresh::class);

Route::get('/users/user/profile/{id}/edit', [ProviderController::class, 'editProfile'])
     ->middleware(CheckAccessOrRefresh::class);

Route::post('/users/user/profile/{id}' , [ProviderController::class, 'updateProfile'])
     ->middleware(CheckAccessOrRefresh::class);

Route::post('/users/user/profile/{id}/update-photo', [ProviderController::class, 'updatePhoto'])
     ->middleware(CheckAccessOrRefresh::class);

     Route::get('/dashboard', [ProviderController::class, 'dashboardApi'])
     ->middleware(CheckAccessOrRefresh::class);

