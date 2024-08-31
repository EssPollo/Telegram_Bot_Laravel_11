<?php

use App\Http\Controllers\TelegramController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/telegram',[TelegramController::class,'index']);
//Route::post('/telegram/store',[TelegramController::class,'store'])->name('telegram.store');

Route::resource('telegram',TelegramController::class)
->only(['index','store'])
->names(['telegram.index',
'telegram.store',
]);

