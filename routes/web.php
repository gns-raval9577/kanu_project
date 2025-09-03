<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('customer.home');
})->name('home');

Route::get('/about', function () {
    return view('customer.about');
})->name('about');

Route::get('/services', function () {
    return view('customer.services');
})->name('services');

Route::get('/packages', function () {
    return view('customer.packages');
})->name('packages');

// Route::get('/product', function () {
//     return view('customer.product');
// })->name('product');

Route::get('/product', [ProductController::class, 'product'])->name('product');

Route::get('/destination', function () {
    return view('customer.destination');
})->name('destination');

Route::get('/tour', function () {
    return view('customer.tour');
})->name('tour');

Route::get('/booking', function () {
    return view('customer.booking');
})->name('booking');

Route::get('/gallery', function () {
    return view('customer.gallery');
})->name('gallery');

Route::get('/guides', function () {
    return view('customer.guides');
})->name('guides');

// Route::get('/testimonial', function () {
//     return view('customer.testimonial');
// })->name('testimonial');
Route::get('/testimonial', [TestimonialController::class, 'customerindex'])->name('testimonial');

Route::get('/404', function () {
    return view('customer.404');
})->name('404');

Route::get('/contact', function () {
    return view('customer.contact');
})->name('contact');

Route::post('/contact-send', [ContactController::class, 'send'])->name('contact.send');

Route::get('/dashboard',[DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    // Route::view('/dashboard', 'admin.dashboard')->name('dashboard');

    Route::resource('products', ProductController::class);
    Route::patch('products/{product}/toggle-status', [ProductController::class, 'toggleStatus'])
        ->name('products.toggle-status');

    Route::resource('testimonials', TestimonialController::class);
    Route::patch('testimonials/{testimonial}/toggle-status', [TestimonialController::class, 'toggleStatus'])
        ->name('testimonials.toggle-status');

    Route::resource('galleries', GalleryController::class);
    Route::patch('galleries/{gallery}/toggle-status', [GalleryController::class, 'toggleStatus'])
        ->name('galleries.toggle-status');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
