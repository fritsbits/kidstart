<?php

Route::get('/',                                   ['as' => 'welcome',             'uses' => 'HomeController@welcome']);
Route::get('/paviljoen-schaarbeek/letterzetten',  ['as' => 'site.letterzetten',   'uses' => 'HomeController@paviljoenLetterzetten']);

