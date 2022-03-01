<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('signin', function () {
    return view('signin');
});

Route::get('signup', function () {
    return view('signup');
});

Route::get('about', function () {
    return redirect('https://www.educastudio.com/about-us');
});

Route::prefix('products') -> group(function(){
    Route::get('marbel-edu-games',function(){
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
    });

    Route::get('Marbel & Friends - Kids Games',function(){
        return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    });

    Route::get('Riri-Story Books',function(){
        return redirect('https://www.educastudio.com/category/riri-story-books');
    });

    Route::get('Kolak-Kids Songs',function(){
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    });

    Route::get('Kabi-Islamic Apps',function(){
        return redirect('https://www.educastudio.com/category/kabi-islamic-books');
    });

    Route::get('Marbel Junior - Merchandise & Licensing',function(){
        return redirect('https://www.educastudio.com/category/marbel-junior');
    });

    Route::get('Keong Games - Entertainment Games',function(){
        return redirect('https://www.educastudio.com/category/keong-casual-games');
    });
});

Route::get('news/{id?}', function ($id = '/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19') {
    return redirect("https://www.educastudio.com/news" .$id);
});

Route::prefix('program') -> group(function(){
    Route::get('karir',function(){
        return redirect('https://www.educastudio.com/program/karir');
    });

    Route::get('magang',function(){
        return redirect('https://www.educastudio.com/program/magang');
    });

    Route::get('kunjungan-industri',function(){
        return redirect('https://www.educastudio.com/program/kunjungan-industri');
    });
});

Route::resource('contact', ContactController::class)->only([
    'index'
]);
