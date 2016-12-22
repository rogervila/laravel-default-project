<?php

Route::get('/', function () {
    return response('it works!');
});

Auth::routes();
