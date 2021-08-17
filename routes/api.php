<?php
Route::group(['middleware' => ['auth:api', 'bindings']], function() {
    Route::get('admin/pm3-container/fetch', 'Pm3ContainerController@fetch')->name('package.skeleton.fetch');
    Route::apiResource('admin/pm3-container', 'Pm3ContainerController');
});
