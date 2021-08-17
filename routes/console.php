<?php
use Illuminate\Support\Facades\Schema;
Artisan::command('pm3-container:install', function () {
    if (!Schema::hasTable('sample_skeleton')) {
        Schema::create('sample_skeleton', function (Illuminate\Database\Schema\Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('status', ['ENABLED', 'DISABLED'])->default('ENABLED');
            $table->timestamps();
        });
    }
    Artisan::call('vendor:publish', [
        '--tag' => 'pm3-container',
        '--force' => true
    ]);

    $this->info('PM3 Container has been installed');
})->describe('Installs the required js files and table in DB');


Artisan::command('pm3-container:uninstall', function () {

    $this->info('PM3 Container has been uninstalled');
})->describe('Uninstalls the required js files and table in DB');


