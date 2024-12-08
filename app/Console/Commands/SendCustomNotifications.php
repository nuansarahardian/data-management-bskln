<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\CustomNotification;
use Filament\Notifications\Notification;

class SendCustomNotifications extends Command
{
    protected $signature = 'custom-notifications:send';
    protected $description = 'Kirim notifikasi berdasarkan jadwal';

    public function handle()
    {
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
            // Debugging: Tampilkan notifikasi yang diproses
            $this->info("Mengirim notifikasi: {$notification->title} - {$notification->notify_at}");

            // Kirim ke admin (misalnya user dengan ID 1)
            $admin = \App\Models\User::find(1);

            if ($admin) {
                Notification::make()
                    ->title($notification->title)
                    ->body($notification->message)
                    ->success()
                    ->sendToDatabase($admin);

                // Tandai sebagai terkirim
                $notification->update(['is_sent' => true]);

                $this->info("Notifikasi '{$notification->title}' berhasil dikirim ke admin.");
            } else {
                $this->error('Admin tidak ditemukan!');
            }
        }
    }
}
