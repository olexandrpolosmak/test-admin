<?php

use App\Http\Controllers\Cms\Auth\SignInController;
use App\Http\Controllers\Cms\Auth\SignOutController;
use App\Http\Controllers\Cms\Companies\CreateCompanyController;
use App\Http\Controllers\Cms\Companies\EditCompanyController;
use App\Http\Controllers\Cms\Companies\IndexCompaniesController;
use App\Http\Controllers\Cms\Companies\StoreCompanyController;
use App\Http\Controllers\Cms\Companies\UpdateCompanyController;
use App\Http\Controllers\Cms\NotificationCampaigns\CreateNotificationCampaignController;
use App\Http\Controllers\Cms\NotificationCampaigns\EditNotificationCampaignController;
use App\Http\Controllers\Cms\NotificationCampaigns\IndexNotificationCampaignsController;
use App\Http\Controllers\Cms\NotificationCampaigns\StoreNotificationCampaignController;
use App\Http\Controllers\Cms\NotificationCampaigns\UpdateNotificationCampaignController;
use App\Http\Controllers\Cms\Users\CreateUserController;
use App\Http\Controllers\Cms\Users\EditUserController;
use App\Http\Controllers\Cms\Users\IndexUsersController;
use App\Http\Controllers\Cms\Users\StoreUserController;
use App\Http\Controllers\Cms\Users\UpdateUserController;
use App\Http\Controllers\Users\ShowUserController;
use App\Http\Controllers\Web\Companies\WebIndexCompaniesController;
use App\Http\Controllers\Web\Items\WebIndexItemsController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

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
Route::middleware([
    Authenticate::class,
])
    ->prefix('admin')
    ->group(function () {
        Route::get('auth/account/logout', SignOutController::class)
            ->name('auth.account.logout');

        Route::get('users', IndexUsersController::class)
            ->name('users.index');
        Route::get('users/create', CreateUserController::class)
            ->name('users.create');
        Route::get('users/{user}', EditUserController::class)
            ->name('users.edit');
        Route::post('users', StoreUserController::class)
            ->name('users.store');
        Route::post('users/{user}', UpdateUserController::class)
            ->name('users.update');

        Route::get('companies', IndexCompaniesController::class)
            ->name('companies.index');
        Route::get('companies/create', CreateCompanyController::class)
            ->name('companies.create');
        Route::get('companies/{company}', EditCompanyController::class)
            ->name('companies.edit');
        Route::post('companies', StoreCompanyController::class)
            ->name('companies.store');
        Route::post('companies/{company}', UpdateCompanyController::class)
            ->name('companies.update');


        Route::get('notification-campaigns/create',
            CreateNotificationCampaignController::class)
            ->name('notification-campaigns.create');
        Route::get('notification-campaigns/{notificationCampaign}',
            EditNotificationCampaignController::class)
            ->name('notification-campaigns.edit');
        Route::post('notification-campaigns',
            StoreNotificationCampaignController::class)
            ->name('notification-campaigns.store');
        Route::post('notification-campaigns/{notificationCampaign}',
            UpdateNotificationCampaignController::class)
            ->name('notification-campaigns.update');

        Route::get('dashboard', function () {
            return view('welcome');
        })->name('dashboard');
    });

Route::get('notification-campaigns',
    IndexNotificationCampaignsController::class)
    ->name('notification-campaigns.index');


Route::get('admin/login', function () {
    return view('login');
})->name('auth.signIn');
Route::post('auth/account/login', SignInController::class)
    ->name('auth.account.login');


Route::get('/', WebIndexCompaniesController::class)->name('web.index');
Route::get('/products', WebIndexItemsController::class)->name('web.products');

