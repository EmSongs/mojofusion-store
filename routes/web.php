```
<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthAdmin;


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home.index');

route::middleware(['auth'])->group(function () {
    route::get('/account-dashboard', [UserController::class,'index'])->name('user.index');
});

route::middleware(['auth',AuthAdmin::class])->group(function () {
    route::get('/admin', [AdminController::class,'index'])->name('admin.index');
    route::get('/admin/brands', [AdminController::class,'Brands'])->name('admin.brands');
});