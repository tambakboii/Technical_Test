<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');
});


// Route for Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Routes for Users
Route::resource('users', UserController::class);

// Routes for Vehicles
// Route::get('/vehicles/create', [VehicleController::class, 'create'])->name('vehicles.create');
// Route::post('/vehicles', [VehicleController::class, 'store'])->name('vehicles.store');

Route::resource('vehicles', VehicleController::class);

// Routes for Bookings
Route::resource('bookings', BookingController::class);

// Routes for Approvals
Route::resource('approvals', ApprovalController::class);

// Routes for Logs
Route::resource('logs', LogController::class);
// Route::resource('users', UserController::class);
// Route::resource('vehicles', VehicleController::class);
// Route::resource('bookings', BookingController::class);
// Route::resource('approvals', ApprovalController::class);
// Route::resource('logs', LogController::class);
// Route::get('/', function () {
//     return "Selamat datang di sistem penyewaan mobil!";
// });
// Route::prefix('users')->group(function () {
//     Route::get('/', [UserController::class, 'index'])->name('users.index'); // Menampilkan daftar user
//     Route::get('/create', [UserController::class, 'create'])->name('users.create'); // Form tambah user
//     Route::post('/', [UserController::class, 'store'])->name('users.store'); // Simpan user baru
//     Route::get('/{user}/edit', [UserController::class, 'edit'])->name('users.edit'); // Form edit user
//     Route::put('/{user}', [UserController::class, 'update'])->name('users.update'); // Update user
//     Route::delete('/{user}', [UserController::class, 'destroy'])->name('users.destroy'); // Hapus user
// });

// Route::prefix('vehicles')->group(function () {
//     Route::get('/', [VehicleController::class, 'index'])->name('vehicles.index'); // Menampilkan daftar kendaraan
//     Route::get('/create', [VehicleController::class, 'create'])->name('vehicles.create'); // Form tambah kendaraan
//     Route::post('/', [VehicleController::class, 'store'])->name('vehicles.store'); // Simpan kendaraan baru
//     Route::get('/{vehicle}/edit', [VehicleController::class, 'edit'])->name('vehicles.edit'); // Form edit kendaraan
//     Route::put('/{vehicle}', [VehicleController::class, 'update'])->name('vehicles.update'); // Update kendaraan
//     Route::delete('/{vehicle}', [VehicleController::class, 'destroy'])->name('vehicles.destroy'); // Hapus kendaraan
// });

// Route::prefix('bookings')->group(function () {
//     Route::get('/', [BookingController::class, 'index'])->name('bookings.index'); // Menampilkan daftar booking
//     Route::get('/create', [BookingController::class, 'create'])->name('bookings.create'); // Form tambah booking
//     Route::post('/', [BookingController::class, 'store'])->name('bookings.store'); // Simpan booking baru
//     Route::get('/{booking}/edit', [BookingController::class, 'edit'])->name('bookings.edit'); // Form edit booking
//     Route::put('/{booking}', [BookingController::class, 'update'])->name('bookings.update'); // Update booking
//     Route::delete('/{booking}', [BookingController::class, 'destroy'])->name('bookings.destroy'); // Hapus booking
// });

// Route::prefix('approvals')->group(function () {
//     Route::get('/', [ApprovalController::class, 'index'])->name('approvals.index'); // Menampilkan daftar approval
//     Route::get('/create', [ApprovalController::class, 'create'])->name('approvals.create'); // Form tambah approval
//     Route::post('/', [ApprovalController::class, 'store'])->name('approvals.store'); // Simpan approval baru
//     Route::get('/{approval}/edit', [ApprovalController::class, 'edit'])->name('approvals.edit'); // Form edit approval
//     Route::put('/{approval}', [ApprovalController::class, 'update'])->name('approvals.update'); // Update approval
//     Route::delete('/{approval}', [ApprovalController::class, 'destroy'])->name('approvals.destroy'); // Hapus approval
// });

// Route::prefix('logs')->group(function () {
//     Route::get('/', [LogController::class, 'index'])->name('logs.index'); // Menampilkan daftar log
// });