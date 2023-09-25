<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ChooseController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\TeamController;
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

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/about-us', [FrontendController::class, 'About'])->name('about_us');
Route::get('/contact-us', [FrontendController::class, 'Contact'])->name('contact_us');
Route::get('/team-all', [FrontendController::class, 'Team'])->name('team_all');
Route::get('/single-service/{id}', [FrontendController::class, 'SingleService'])->name('single_service');
Route::get('/project-all', [FrontendController::class, 'Project'])->name('project_all');
Route::get('/blog-all', [FrontendController::class, 'Blog'])->name('blog_all');
Route::get('/single-project/{id}', [FrontendController::class, 'single_project'])->name('single_project');
Route::get('/single-blog/{id}', [FrontendController::class, 'single_blog'])->name('single_blog');
Route::resources([

    'appointment' => AppointmentController::class
]);

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resources([
        'logo' => LogoController::class,
        'about' => AboutController::class,
        'service' => ServiceController::class,
        'gallery' => GalleryController::class,
        'blog' => BlogController::class,
        'address' => AddressController::class,
        'social' => SocialController::class,
        'partner' => PartnerController::class,
        'feedback' => FeedbackController::class,
        'project' => ProjectController::class,
        'general' => GeneralController::class,
        'choose' => ChooseController::class,
        'team' => TeamController::class,
    ]);
});

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

require __DIR__.'/auth.php';
