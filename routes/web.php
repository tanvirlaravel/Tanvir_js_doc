<?php



Route::view('/', 'welcome')->name('home');
Route::view('/definations', 'definations.definations')->name('definations');

// First Steps
Route::view('/what_is_js', 'FirstSteps.WhatisJavaScript.WhatisJavaScript')->name('WhatisJavaScript');

// Introducing JavaScript objects
Route::view('/what_is_object', 'Objects.intro')->name('Objects.intro');
Route::view('/object-basics', 'Objects.object_basics.object_basics')->name('Objects.object.basics');
Route::view('/Object-oriented', 'Objects.Object_oriented.Object-oriented')->name('Objects.Object.oriented');
Route::view('/object-Working-JSON', 'Objects.WorkingJSON.WorkingJSON')->name('Objects.WorkingJSON');