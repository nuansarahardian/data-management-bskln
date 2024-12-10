<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;
use App\Models\User;
use Filament\Notifications\Notification;
use App\Models\CustomNotification;
use Carbon\Carbon;

// Command untuk mengirim notifikasi
Artisan::command('custom-notifications:send', function () {
    // Ambil notifikasi yang sudah waktunya dikirim
    $notifications = CustomNotification::where('notify_at', '<=', now())
        ->where('is_sent', false)
        ->get();

    $this->info('Waktu sekarang: ' . now());
    $this->info('Jumlah notifikasi yang ditemukan: ' . $notifications->count());

    if ($notifications->isEmpty()) {
        $this->info('Tidak ada notifikasi yang perlu dikirim.');
        return;
    }

    foreach ($notifications as $notification) {
        $this->info("Mengirim notifikasi: {$notification->title} - {$notification->notify_at}");

        // Cari admin (misalnya user dengan ID 1)
        $admin = User::find(1);

        if ($admin) {
            // Kirim notifikasi ke database menggunakan Filament Notifications
            Notification::make()
                ->title($notification->title)
                ->body($notification->message)
                ->success()
                ->sendToDatabase($admin);

            // Tandai sebagai terkirim
            $notification->update([
                'is_sent' => true,
                'updated_at' => Carbon::now('Asia/Jakarta'),
            ]);

            $this->info("Notifikasi '{$notification->title}' berhasil dikirim ke admin.");
        } else {
            $this->error('Admin tidak ditemukan!');
        }
    }
})->describe('Send custom notifications');

// Jadwalkan tugas
Schedule::command('custom-notifications:send')->everySecond();
