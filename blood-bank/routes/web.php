use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaffProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // User Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Blood Bank Staff Profile Routes
    Route::prefix('staff')->group(function () {
        Route::get('/profile', [StaffProfileController::class, 'show'])->name('staff.profile.show');
        Route::get('/profile/edit', [StaffProfileController::class, 'edit'])->name('staff.profile.edit');
        Route::put('/profile', [StaffProfileController::class, 'update'])->name('staff.profile.update');
    });
});

require __DIR__.'/auth.php';
