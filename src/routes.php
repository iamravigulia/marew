<?php
use Illuminate\Support\Facades\Route;

// Route::get('greeting', function () {
//     return 'Hi, this is your awesome package! map';
// });

// Route::get('Marew/test', 'EdgeWizz\Marew\Controllers\MarewController@test')->name('test');

Route::post('fmt/marew/store', 'EdgeWizz\Marew\Controllers\MarewController@store')->name('fmt.marew.store');
