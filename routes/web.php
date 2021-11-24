<?php



Route::view('/', 'welcome')->name('home');


// First Steps
Route::view('/what_is_js', 'FirstSteps.WhatisJavaScript.WhatisJavaScript')->name('WhatisJavaScript');

// Introducing JavaScript objects
Route::view('/what_is_object', 'Objects.intro')->name('Objects.intro');
Route::view('/object-basics', 'Objects.object_basics.object_basics')->name('Objects.object.basics');
Route::view('/Object-oriented', 'Objects.Object_oriented.Object-oriented')->name('Objects.Object.oriented');
Route::view('/object-Working-JSON', 'Objects.WorkingJSON.WorkingJSON')->name('Objects.WorkingJSON');


// https://edabit.com/
Route::view('/edabit/Arrow-Function', 'edabit.Arrow_Function')->name('edabit.Arrow_Function');
Route::view('/edabit/Function', 'edabit.Function')->name('edabit.Function');
Route::view('/edabit/Introduction-JavaScript', 'edabit.Introduction_JavaScript')->name('edabit.Introduction_JavaScript');


// Defination 
Route::view('/a', 'definations.a')->name('definations.a');
Route::view('/e', 'definations.e')->name('definations.e');
Route::view('/g', 'definations.a')->name('definations.g');
Route::view('/m', 'definations.m')->name('definations.m');
Route::view('/n', 'definations.n')->name('definations.n');