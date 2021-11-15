<?php

use App\Jobs\CompanyCreated;
use Illuminate\Support\Facades\Route;

Route::get('/test', function() {
    CompanyCreated::dispatch('darciofjunior81@gmail.com')
                    ->onQueue('queue_email');

    return response()->json(['message' => 'success']);
});

Route::get('/', function() {
    return response()->json(['message' => 'success']);
});
