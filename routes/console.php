<?php

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

// Definisikan command `inspire`
Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// Scheduler untuk command `inspire`
return function (Schedule $schedule) {
    $schedule->command('inspire')->hourly(); 
    \Log::info('Command dijalankan.');
\Log::info('Notifikasi diproses.');
// Menjalankan command setiap jam
};
