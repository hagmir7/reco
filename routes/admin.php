<?php
use Illuminate\Support\Facades\Route;


Route::name('shopper.')->group(function (){

    Route::prefix('client-requests/')->name('client_requests.')->group(function (){
        Route::get('/', [\App\Http\Controllers\ClientRequestsController::class, 'index'])->name('index');
        Route::get('/{clientRequest}', [\App\Http\Controllers\ClientRequestsController::class, 'show'])->name('show');
    });
});
