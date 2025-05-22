<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsReadToNotifications extends Migration
{
    public function up()
    {
        Schema::table('notifications', function (Blueprint $table) {
            // حذف المفتاح الخارجي القديم
            $table->dropForeign(['sender_id']);
            $table->dropForeign(['receiver_id']);
            $table->boolean('is_read')->default(false);

            // إضافة المفتاح الخارجي الجديد مع جدول providers
            $table->foreign('sender_id')->references('id')->on('providers')->onDelete('cascade');
            $table->foreign('receiver_id')->references('id')->on('providers')->onDelete('cascade');

        });
    }

    public function down()
    {
        Schema::table('notifications', function (Blueprint $table) {
            $table->dropForeign(['sender_id']);
            $table->dropForeign(['receiver_id']);

            $table->foreign('sender_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('receiver_id')->references('id')->on('users')->onDelete('cascade');
        });
    }
}
