<?php
use Illuminate\Support\Facades\Route;

Route::get('greeting', function () {
    return 'Hi, this is your awesome package!';
});

Route::get('test', 'EdgeWizz\Fillup\Controllers\FillupController@test')->name('test');