<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomNotificationsTable extends Migration
{
    public function up()
    {
        Schema::create('custom_notifications', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul notifikasi
            $table->text('message'); // Pesan notifikasi
            $table->timestamp('notify_at'); // Waktu untuk memunculkan notifikasi
            $table->boolean('is_sent')->default(false); // Status notifikasi
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('custom_notifications');
    }
}
