<?php

Route::group(['middleware' => ['auth']], function () {
    Route::get('admin/pm3-container', 'Pm3ContainerController@index')->name('package.skeleton.index');
    Route::get('pm3-container', 'Pm3ContainerController@index')->name('package.skeleton.tab.index');
});
