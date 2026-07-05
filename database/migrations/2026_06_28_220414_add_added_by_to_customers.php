<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  public function up(): void
{
    Schema::table('customers', function (Blueprint $table) {
        $table->foreignId('addedby_user_id')
              ->nullable()
              ->after('id')
              ->constrained('users'); // ← يربطه بجدول users تلقائياً
    });
}

public function down(): void
{
    Schema::table('customers', function (Blueprint $table) {
        $table->dropForeign(['addedby_user_id']);
        $table->dropColumn('addedby_user_id');
    });
}
};
