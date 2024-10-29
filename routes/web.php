<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CertificationCourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\MapController;
use App\Http\Middleware\TrackActiveSessions; 





Route::get('/admin/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/signup', [AuthController::class, 'signupPost'])->name('signup.post');

Route::get('/admin/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');

 
Route::middleware('auth')->group(function () {
    
    // Route::get('/dashboard', function () {
    //     return view('backend.pages.dashboard');
    // });

    //dashboard
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');



    // Banner Routes
Route::get('/banners', [BannerController::class, 'index'])->name('banners.index');
Route::get('/banners/create', [BannerController::class, 'create'])->name('banners.create');
Route::post('/banners', [BannerController::class, 'store'])->name('banners.store');
Route::get('/banners/{banner}/edit', [BannerController::class, 'edit'])->name('banners.edit');
Route::put('/banners/{banner}', [BannerController::class, 'update'])->name('banners.update');
Route::delete('/banners/{banner}', [BannerController::class, 'destroy'])->name('banners.destroy');

  // Route to show list of about sections
  Route::get('/about-sections', [AboutController::class, 'index'])->name('about.index');

  // Route to show form to create a new about section
  Route::get('/about-sections/create', [AboutController::class, 'create'])->name('about.create');

  // Route to store a newly created about section
  Route::post('/about-sections', [AboutController::class, 'store'])->name('about.store');

  // Route to show form to edit an existing about section
  Route::get('/about-sections/{about}/edit', [AboutController::class, 'edit'])->name('about.edit');

  // Route to update an existing about section
  Route::put('/about-sections/{about}', [AboutController::class, 'update'])->name('about.update');

  // Route to delete an existing about section
  Route::delete('/about-sections/{about}', [AboutController::class, 'destroy'])->name('about.destroy');



// Certification Courses Routes
Route::prefix('certification-courses')->name('certification-courses.')->group(function () {
    Route::get('/create', [CertificationCourseController::class, 'create'])->name('create');
    Route::post('/', [CertificationCourseController::class, 'store'])->name('store');
    Route::get('/index', [CertificationCourseController::class, 'index'])->name('index');
    Route::get('/{id}', [CertificationCourseController::class, 'show'])->name('show'); // GET for show

    Route::get('/{course}/edit', [CertificationCourseController::class, 'edit'])->name('edit');
    Route::put('/{course}', [CertificationCourseController::class, 'update'])->name('update');
    Route::delete('/{course}', [CertificationCourseController::class, 'destroy'])->name('destroy');

});



// routes/web.php
Route::get('/profile/settings', [ProfileController::class, 'settings'])->name('profile.settings');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/password/change', [ProfileController::class, 'showChangeForm'])->name('password.change');
Route::post('/password/update', [ProfileController::class, 'updatePassword'])->name('password.update');

Route::post('/logout', [ProfileController::class, 'logout'])->name('logout');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');



//teahcer prefix
Route::prefix('teacher')->name('teacher.')->group(function () {

    Route::post('/', [TeacherController::class, 'store'])->name('store');
    Route::put('/{teacher}', [TeacherController::class, 'update'])->name('update');
    Route::get('/', [TeacherController::class, 'index'])->name('index');
    Route::get('/create', [TeacherController::class, 'create'])->name('create');
    Route::get('/{teacher}', [TeacherController::class, 'show'])->name('show');
    Route::get('/{teacher}/edit', [TeacherController::class, 'edit'])->name('edit');
    Route::delete('/{teacher}', [TeacherController::class, 'destroy'])->name('destroy');



});


//gallery
Route::prefix('gallery')->name('gallery.')->group(function () {
    Route::get('/gallery', [GalleryController::class, 'index'])->name('index');
    Route::get('/create', [GalleryController::class, 'create'])->name('create');
    Route::post('/', [GalleryController::class, 'store'])->name('store');
    Route::get('/{gallery}/edit', [GalleryController::class, 'edit'])->name('edit');
    Route::put('/{gallery}', [GalleryController::class, 'update'])->name('update');
    Route::delete('/{gallery}', [GalleryController::class, 'destroy'])->name('destroy');
});


//testimonial
Route::prefix('testimonials')->name('testimonials.')->group(function () {
    Route::get('/', [TestimonialController::class, 'index'])->name('index');
    Route::get('/create', [TestimonialController::class, 'create'])->name('create');
    Route::post('/', [TestimonialController::class, 'store'])->name('store');
    Route::get('/{testimonial}', [TestimonialController::class, 'show'])->name('show'); // GET for show
    Route::get('/{testimonial}/edit', [TestimonialController::class, 'edit'])->name('edit');
    Route::put('/{testimonial}', [TestimonialController::class, 'update'])->name('update');
    Route::delete('/{testimonial}', [TestimonialController::class, 'destroy'])->name('destroy');
});


Route::prefix('enquiries')->name('enquiries.')->group(function () {
    Route::get('/pending', [EnquiryController::class, 'showPending'])->name('pending');
    Route::post('/{id}/done', [EnquiryController::class, 'markAsDone'])->name('done');
    Route::get('/history', [EnquiryController::class, 'showHistory'])->name('history');
});

Route::get('/admin/update-map', [App\Http\Controllers\MapController::class, 'showUpdateMapForm'])->name('admin.showUpdateMapForm');
Route::post('/admin/update-map', [App\Http\Controllers\MapController::class, 'updateMap'])->name('admin.updateMap');


//footer address
Route::prefix('footer')->name('footer.')->group(function () {
Route::get('/edit', [FooterController::class, 'edit'])->name('edit');
Route::put('/update', [FooterController::class, 'update'])->name('update');
});


Route::prefix('social_media')->name('social_media.')->group(function () {
    Route::get('/create', [SocialMediaController::class, 'create'])->name('create');
    Route::post('/store', [SocialMediaController::class, 'store'])->name('store');
    Route::get('/index', [SocialMediaController::class, 'index'])->name('index');
    Route::get('/{socialMedia}/edit', [SocialMediaController::class, 'edit'])->name('edit');
    Route::put('/{socialMedia}', [SocialMediaController::class, 'update'])->name('update');
    Route::delete('/{socialMedia}', [SocialMediaController::class, 'destroy'])->name('destroy');
});

}); //auth bracket end





Route::get('/index', [FrontController::class, 'index'])->name('index');

Route::get('/', [FrontController::class, 'showBanner'])->name('front.index');

Route::get('/banners/inactive', [BannerController::class, 'inactiveBanners'])->name('banners.inactive');
Route::put('/banners/{banner}/activate', [BannerController::class, 'activate'])->name('banners.activate');

Route::get('/', [FrontController::class, 'index'])->name('front.index');


Route::prefix('enquiry')->name('enquiry.')->group(function () {
    Route::get('/', [EnquiryController::class, 'create'])->name('create');
    Route::post('/store', [EnquiryController::class, 'store'])->name('store');
});


//show about page
Route::get('/about', [FrontController::class, 'about'])->name('front.about');

Route::get('/courses', [FrontController::class, 'courses'])->name('front.courses');

Route::get('/team', [FrontController::class, 'teachers'])->name('front.teachers');

Route::get('/gallery', [FrontController::class, 'gallery'])->name('front.gallery');




