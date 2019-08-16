<?php

Auth::routes();

Route::view('/', 'welcome');

Route::get('/dashboard', 'DashboardController')->name('dashboard');
