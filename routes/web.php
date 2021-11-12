<?php



Route::view('/', 'welcome')->name('home');
Route::view('/definations', 'definations.definations')->name('definations');

Route::view('/what_is_js', 'FirstSteps.WhatisJavaScript.WhatisJavaScript')->name('WhatisJavaScript');