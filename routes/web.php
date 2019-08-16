<?php

Auth::routes();

Route::view('/', 'marketing.index');

Route::get('/dashboard', 'DashboardController')->name('dashboard');
